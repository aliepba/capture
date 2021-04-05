@extends('layouts.app')

@section('content')
<header class="text-center mt-3">
    <h3>About</h3>
    {{-- <div class="container mt-3">
        <ul class="nav justify-content-center sub-nav">
            <li class="nav-item mx-md-2"><a href="#" class="nav-link active">All</a></li>
            <li class="nav-item mx-md-2"><a href="#" class="nav-link">Nature</a></li>
            <li class="nav-item mx-md-2"><a href="#" class="nav-link">Fashion</a></li>
        </ul>
    </div> --}}
</header>
<div class="container">
    <section class="gallery-block compact-gallery">
        <div class="container flex-center">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{url('frontend/images/abt.jpg')}}" alt="About Image" style="width:400px;" />
                    </div>
                    <div class="col-lg-6">
                        <h4>Photos of me</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae turpis in ex maximus gravida et et nulla. Quisque gravida ultrices turpis at condimentum. Suspendisse in libero nisl. Praesent vulputate nibh sit amet diam pharetra finibus. Maecenas feugiat consequat arcu, rutrum mattis augue sodales nec. Mauris lectus est, porta nec placerat gravida, iaculis in lectus. In hac habitasse platea dictumst. Praesent lobortis velit ac leo aliquet tristique. Donec lobortis vel dolor non tincidunt.</p>
                        <p>Instagram : @_inemeidela</p>
                        <p>
                    </div>
                </div>
        </div>
    </section>
</div>
<div class="container-fluid">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('frontend/images/c1.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('frontend/images/c2.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{url('frontend/images/c3.jpg')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>
@endsection