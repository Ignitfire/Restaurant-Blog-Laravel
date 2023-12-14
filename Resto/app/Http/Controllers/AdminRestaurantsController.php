<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Http\Requests\CreateRestaurantRequest;

class AdminRestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all(); //get all restaurants
        return view('adminRestaurants',['restaurants' => $restaurants, 'title'=>'Gestion Restaurants']);
    }

    public function create(){
        return view('adminRestaurantsCreate');
    }

    public function store(CreateRestaurantRequest $request){
        $restaurant = Restaurant::create($request->validated());
        return redirect()->route('adminRestaurants.index')->with('success','Le restaurant à bien été sauvegardé');
    }

    public function edit(Restaurant $restaurant){

        return view('adminRestaurantsEdit',['restaurant'=>$restaurant]);
    }

    public function update(CreateRestaurantRequest $request, Restaurant $restaurant){
        dd($restaurant);
        $restaurant->update($request->validated());
        return redirect()->route('adminRestaurants.index')->with('success','Le restaurant à bien été mis à jour');
    }
    public function destroy(Restaurant $restaurant){
        dd($restaurant);
        $restaurant->delete();
        return redirect()->route('adminRestaurants.index')->with('success','Le restaurant à bien été supprimé');
    }


}
