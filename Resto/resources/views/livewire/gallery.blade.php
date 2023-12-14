<div style="width:fit-content">
<!-- Carousel wrapper -->
<div
  id="carouselWrapper"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
  style=" width: {{$width}}px; height:{{$height}}px; background-color: rgb(197, 232, 241);"
>
  <!-- Inner -->
  <div class="carousel-inner">

    @for($i=0; $i < count($images); $i++)
   <div class='{{$classes[$i]}}'>
    <!-- Single item -->
        <img
        src="{{URL::to('/') }}/images/galerie/{{ $images[$i]['name']}}"
        style="border: 1 px solid black; width: {{$width}}px; height:{{$height}}px"
        alt="l'image est introuvable">
    </div>
    @endfor

  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    wire:click="previous"
    data-mdb-target="#carouselWrapper"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    wire:click="next"
    data-mdb-target="#carouselWrapper"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
</div>
