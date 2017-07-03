<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Image;
use Input;

//Hier verwijs je naar de model, die connectie maakt met de database
use App\Detailmap;

class DetailmapController.php extends Controller
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
        
        //Hier pak je alles van in de database Detailmap staat en stopt het in de $detailmaps variable
        $detaimaps = Detailmap::all();

        //Array $data waar je met key => value $detailmaps erin zet
        $data = array(
            'detailmaps' => $detailmaps,
        );

        //Hier geef je de array $data mee aan de view die je laad
        return view('/detailmap', $data);
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
        $detailmap = ($id == -1) ? new Detailmap() : Detailmap::find($id);
        
        //Deze if statement checkt of de name al bestaat
        //zoja dan geeft ie aan de gebruiker aan dat ie al bestaat
        if(Detailmap::where('name', '=', $request->name)->exists()) {
            return redirect('/crud')->with('status', 'User already exists!');
        } else {

            //Hier zeg je dat name in de database $category = de name die je hebt doorgegeven in je form
            $detailmap->name = $request->name;
            
            if($request->detmap_img != null) {
                $detailmap->detmap_img = $request->detmap_img;
            }
        }
            $detailmap->save();    
        
        return redirect('/detailmap');
    }

    public function delete($id) {

        //$category = ($id == -1) ? new Category() : Category::find($id);
        $detailmap = Detailmap::find($id);
        $detailmap->delete();

        return redirect('/detailmap');
    }
}
