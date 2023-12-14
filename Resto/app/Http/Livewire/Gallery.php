<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;
class Gallery extends Component
{
    private $restaurant;
    public $images;
    public $nb;
    public $size;

    public $current;

    public $classes;

    public $width;
    public $height;


    public function next()
    {
        if($this->current < $this->nb - 1)
        {
            $this->classes[$this->current] = 'carousel-item';
            $this->current++;
            $this->classes[$this->current] = 'carousel-item active';
        }
        else
        {
            $this->classes[$this->current] = 'carousel-item';
            $this->current = 0;
            $this->classes[$this->current] = 'carousel-item active';
        }
    }

    public function previous()
    {
        if($this->current > 0)
        {
            $this->classes[$this->current] = 'carousel-item';
            $this->current--;
            $this->classes[$this->current] = 'carousel-item active';
        }
        else
        {
            $this->classes[$this->current] = 'carousel-item';
            $this->current = $this->nb - 1;
            $this->classes[$this->current] = 'carousel-item active';
        }
    }
    public function mount($restaurant,$width,$height)
    {
        $this->restaurant = $restaurant;
        $this->images = Image::where('restaurant_id',$restaurant->id)->get();
        $this->nb = count($this->images);
        $this->size = 100;
        $this->current = 0;
        $this->classes = array_fill(0,$this->nb,'carousel-item');
        $this->classes[0] = 'carousel-item active';
        $this->width = $width;
        $this->height = $height;
    }
    public function render()
    {
        return view('livewire.gallery');
    }
}
