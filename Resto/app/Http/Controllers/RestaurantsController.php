<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Image;
use App\Http\Requests\CommentFilterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class RestaurantsController extends Controller
{
    function index(){
        $restaurants = DB::table('restaurants')->paginate(5); //get all restaurants
        $title = "Restaurants";
        foreach ($restaurants as $restaurant) {
            $restaurant->rating = round(Comment::where('restaurant_id',$restaurant->id)->avg('rating'),1);
        }
        return view('layouts/restaurants',array(
            'title'=>$title,
            'restaurants' => $restaurants,

        ));
    }

    public function show($restaurant_name) {
        $restaurant = Restaurant::where('url',$restaurant_name)->first(); //get first restaurant with restaurant_nam == $restaurant_name
        $owner = \App\Models\User::where('id',$restaurant->owner_id)->first();
        $title = $restaurant_name;
        $images = Image::where('restaurant_id',$restaurant->id)->get();
        $comments = Comment::where('restaurant_id',$restaurant->id)->get();
        $content = $restaurant->content;
        $avg = round(Comment::where('restaurant_id',$restaurant->id)->avg('rating'),1);
        $tags = $restaurant->tags;

        return view('restaurants/single',array( //Pass the restaurant to the view
            'title' => $title,
            'restaurant' => $restaurant,
            'owner'=>$owner,
            'comments'=>$comments,
            'images'=>$images,
            'content'=>$content,
            'avg'=>$avg,
            'tags'=>$tags
        ));
    }

}
