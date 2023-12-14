<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StarRating extends Component
{
    public $restaurant;
    public $avgRating;
    public $rating;
    public $starCode;



    public function setRating($val)
    {
        if($this->rating===$val) $this->rating= 0;
        else $this->rating = $val;

        for($i=0;$i<5;$i++)
        {
            if($i<$this->rating) $this->starCode[$i] = 1;
            else $this->starCode[$i] = 0;
        }

    }
    public function mount($restaurant)
    {
        $this->starCode = [0,0,0,0,0];
        $this->restaurant = $restaurant;
        $this->avgRating = 0;
        $this->rating = 0;
    }

    public function render()
    {
        return view('livewire.star-rating');
    }
}
