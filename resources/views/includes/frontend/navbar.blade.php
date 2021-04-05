<div class="container">
    <nav class="row navbar   navbar-expand-lg navbar-light bg-white mb-5">
        <a href="#" class="navbar-brand">
            <img src="frontend/images/capture.png" alt="logo capture" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2"><a href="{{route('home')}}" class="nav-link active">Home</a></li>
                <li class="nav-item mx-md-2"><a href="{{route('album')}}" class="nav-link">Albums</a></li>
                <li class="nav-item mx-md-2"><a href="{{route('about')}}" class="nav-link">About</a></li>
                {{-- {{-- <li class="nav-item mx-md-2"><a href="" class="nav-link">Contact</a></li> --}}
            </ul>
        </div>
    </nav>
</div>