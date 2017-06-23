<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        $data = array(
            // key       => value
            'categories' => $categories,
        );

        return view('home', $data);
    }

    public function edit(request $request, $id = -1) 
    {
        $category = ($id == -1) ? new Category() : Category::find($id);

        if(Category::where('name', '=', $request->name)->exists())
            return redirect('/crud')->with('status', 'User already exists!');
        else
            $category->name = $request->name;
            $uploadedfile = $request->valueimg;

            if($uploadedfile->getClientOriginalExtension() == 'png') {

                $category->catmap_img = $request->valueimg;
                $category->save();
                
                $uploaddate = $category->id. '.' .
                $request->valueimg->getClientOriginalExtension();
                $category->catmap_img = $uploaddate;

                $category->save();
                $request->catmap_img->move(base_path().'/public/img', $uploaddate);

            } //else if($uploadedfile->getClientOriginalExtension() == 'jpg') {
                
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
                else {
                dd('Geef een andere file formaat door.');
            }

            //$category->categorymap_img = $request->img;
            $category->save();    
        
        return redirect('/crud');
    }
}
