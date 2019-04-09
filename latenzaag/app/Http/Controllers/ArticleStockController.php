<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleStock;
use DB;
use Intervention\Image\ImageManagerStatic as Image;


class ArticleStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {


        //current article ID (last ID in table + 1)
        $id = DB::table('articles_stocks')->orderBy('updated_at', 'desc')->first()->id + 1;

        if ($request->hasFile('img')) {

            //save image in this format(id.extension ex : 7.jpg)
            $image = $request->img;
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();

            $image_resize = Image::make($request->img->getRealPath())->resize(340, 340);//resize image

            $image_resize->save(public_path('img/'.$id . '.' . $fileExtension)); //save image

            //image name in database
            $img = $id . '.' . $fileExtension;

            //create and save article in database.
            $article = ArticleStock::create([
                'categorie' => $request->categorie,
                'marque' => $request->marque,
                'nom' => $request->nom,
                'prix' => $request->prix,
                'description' => $request->description,
                'img' => $img
            ]);
            $article->save();
    
            return redirect('manage');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
