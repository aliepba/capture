@extends('layouts.app')

@section('content')
<header class="text-center">
    <h3>By The Albums</h3>
<div class="container">
    <section class="gallery-block compact-gallery">
        <div class="container flex-center">
                <div class="row no-gutters">
                    @forelse ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 item zoom-on-hover">
                        {{-- <a class="lightbox" href="{{$item->galleries->count() ? Storage::url($item->first()->image)}}"> --}}
                            <img class="img-fluid image" src="{{$item->galleries->count() ? Storage::url($item->galleries->first()->image) : ' '}}"  alt="" style="" class="img-thumbnail" />
                            <span class="description">
                                <span class="description-heading">{{$item->name}}</span>
                                <span class="description-body">{{$item->locations->name}}</span>
                                <span class="description-body"><a href="{{ route('detail', $item->slug) }}" class="btn btn-block btn-details mt-2">See</a></span>
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