    <div class="rating">
        @for($i=0;$i<5;$i++)
        <input type=hidden wire:model.prevent="rating" name="rating" id="starInput">
            @if($starCode[$i]==0)<button wire:click.prevent="setRating({{$i+1}})" class="fa fa-star-o" style="color: gold"></button>
            @else <button wire:click.prevent="setRating({{$i+1}})" class="fa fa-star" style="color: gold"></button>
            @endif
        @endfor
    </div>
