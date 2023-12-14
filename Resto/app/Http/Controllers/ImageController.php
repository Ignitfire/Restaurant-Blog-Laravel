<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Restaurant;
use App\Http\Requests\ImageFilterRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($restaurant_url): View
    {
        $restaurant = Restaurant::where('url',$restaurant_url)->first();
        return view('restaurants/imageUpload', ['title'=>'Upload image','restaurant' => $restaurant, 'id' => $restaurant->id]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ImageFilterRequest $request,$restaurant_url)
    {
       $restaurant = Restaurant::where('url',$restaurant_url)->first();
        $images = [];
        if ($request->images){
            foreach($request->images as $key => $image)
            {
                $imageName = time().rand(1,99).'.'.$image->extension();
                $image->move(public_path('images/galerie'), $imageName);
                $images[$key]['restaurant_id'] = $restaurant->id;
                $images[$key]['name'] = $imageName;
            }
        }

        foreach ($images as $key => $image) {
            Image::create($image);
        }
        return back()->with('success','Vous avez ajouté votre/vos image/s avec succès.')->with('images', $images);
    }
}
