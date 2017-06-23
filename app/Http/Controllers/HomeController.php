<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Hier verwijs je naar de model, die connectie maakt met de database
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // Dit draait als eerst met de index function
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //De onderstaande functions worden geactiveerd wanneer ze worden opgeroepen.
    public function index()
    {
        
        //Hier pak je alles van in de database Category staat en stopt het in de $categories variable
        $categories = Category::all();

        //Array $data waar je met key => value $categories erin zet
        $data = array(
            'categories' => $categories,
        );

        //Hier geef je de array $data mee aan de view die je laad
        return view('home', $data);
    }

    //request $request is de laravel manier om te zeggen, pak alles wat je mij hebt toegestuurd via je form
    //Wanneer $id geen value heeft zal het een standaard value hebben van -1(null)
    public function edit(request $request, $id = -1) 
    {

        //Dat stukje code hieronder is eigenlijk deze if statement
        // if($id == -1) {
        //     $category = new Category();
        // } else {
        //     $category = Category::find($id);
        // }
        $category = ($id == -1) ? new Category() : Category::find($id);
        
        //Deze if statement checkt of de name al bestaat
        //zoja dan geeft ie aan de gebruiker aan dat ie al bestaat
        if(Category::where('name', '=', $request->name)->exists()) {
            return redirect('/crud')->with('status', 'User already exists!');
        } else {

            //Hier zeg je dat name in de database $category = de name die je hebt doorgegeven in je form
            $category->name = $request->name;
            
            if($request->catmap_img != null) {
                $uploadedfile = $request->catmap_img;
                $test = $request->file('catmap_img');
                
                if($request->hasFile('catmap_img')) {
                    dd('hoi');
                    dd($test, $uploadedfile);
                    // $category->catmap_img = $request->catmap_img;
                    // $category->save();
                    
                    // $uploaddate = $category->id. '.' .
                    // $request->catmap_img->getClientOriginalExtension();
                    // $category->catmap_img = $uploaddate;

                    // $category->save();
                    // $request->catmap_img->move(base_path().'/public/img', $uploaddate);

                }   else {  
                    dd('Geef een andere file formaat door.');
                } 
            }
        }
            $category->save();    
        
        return redirect('/crud');

             //else if($uploadedfile->getClientOriginalExtension() == 'jpg') {
                
            //     $mediaupload->picture = $request->file;
            //     $mediaupload->save();
                
            //     $uploaddate = $mediaupload->id. '.' .
            //     $request->file->getClientOriginalExtension();
            //     $mediaupload->picture = $uploaddate;

            //     $mediaupload->save();
            //     $request->file->move(base_path().'/public/mediafiles/images', $uploaddate);

            // } else if($uploadedfile->getClientOriginalExtension() == 'jpeg') {
                
            //     $mediaupload->picture = $request->file;
            //     $mediaupload->save();
                
            //     $uploaddate = $mediaupload->id. '.' .
            //     $request->file->getClientOriginalExtension();
            //     $mediaupload->picture = $uploaddate;

            //     $mediaupload->save();
            //     $request->file->move(base_path().'/public/mediafiles/images', $uploaddate);

            // } 

            //$category->categorymap_img = $request->img;
    }
}
