<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $restaurants = Restaurant::all(); //get all restaurants
        $title = 'Home';
        return view('welcome',['title'=>$title, 'restaurants' => $restaurants]);
    }
}
