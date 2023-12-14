<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resto | {{$title}}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @livewireStyles
  {{-- <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{URL::to('/') }}/app.css" rel="stylesheet">
</head>

<body>

  <!-- Start Top Bar -->
  <div id="topBar" class="top-bar"  style="background-image: url('{{URL::to('/') }}/images/logo/bandeauResto.png'); background-size: cover; ">
    <div class="top-bar-left">
      <ul class="menu" style="width:fit-content">
        <li><img src='{{URL::to('/') }}/images/logo/SuperResto.png' class="w-12 h-12"/></li>
        <li><a href="/">Home</a></li>
        <li><a href="/restaurants">Restaurants</a></li>
        <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
        <!-- <li><a href="/phpliteadmin.php">DBADMIN</a></li> -->
        <div class="top-bar-right">
            @auth
            <ul class="menu">
                @if(Auth::user()->role==='admin')
                <li><a href="/admin/dashboard">{{Auth::user()->name}}</a></li>
                @else
                <li><a href="/dashboard">{{Auth::user()->name}}</a></li>
                @endif
            </ul>
            @endauth

            @guest
                <ul class="menu">
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            @endguest

        </div>
    </div>
  </div>
  <!-- End Top Bar -->

  <article class="grid-container">

    @yield('content')

  </article>



  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  @livewireScripts
</body>
</html>
