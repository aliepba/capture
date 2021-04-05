@extends('layouts.app')

@section('content')
<header class="text-center">
    <h3>Most Rated</h3>
</header>
<div class="container">
    <section class="gallery-block compact-gallery">
        <div class="container flex-center">
                <div class="row no-gutters">
                    @forelse ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 item zoom-on-hover">
                        <a class="lightbox" href="{{Storage::url($item->image)}}" style="text-decoration:none">
                            <img class="img-fluid image" src="{{Storage::url($item->image)}}"  alt="" style="" class="img-thumbnail" />
                            <span class="albums">
                                <span class="description-body">{{$item->albums->name}}</span>
                            </span>
                        </a>
                    </div>
                    @empty
                        <div class="text-center">
                            <i class="fa fa-spinner"</i>  
                                Data Empty  
                        </div>
                    @endforelse
                </div>
        </div>
    </section>
</div>
@endsection
