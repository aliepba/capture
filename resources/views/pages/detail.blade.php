@extends('layouts.app')

@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                Album
              </li>
              <li class="breadcrumb-item">
                Details
              </li>
              <li class="breadcrumb-item active">
                {{$items->name}}
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-details">
            <h2>Album Description</h2>
            {!! $items->description !!}
            <section class="gallery-block compact-gallery">
              <div class="container flex-center">
                      <div class="row no-gutters">
                        @if($items->galleries->count() > 0)
                                @foreach($items->galleries as $gallery)
                                    <a href="{{ Storage::url($gallery->image) }}">
                                        <img
                                            src="{{ Storage::url($gallery->image) }}"
                                            class="img-thumbnail ml-3"
                                            width="128"/>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                  @endif
                          
                      </div>
              </div>
            </section>
            {{-- <div class="features row">
              <div class="col-md-4">
                <img
                  src="{{ url('frontend/images/ic_event.png') }}"
                  alt=""
                  class="features-image"
                />
                <div class="description">
                  <h3>Featured Event</h3>
                  <p>{{ $item->featured_event }}</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img
                    src="{{ url('frontend/images/ic_language.png') }}"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Language</h3>
                    <p>{{ $item->language }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img
                    src="{{ url('frontend/images/ic_foods.png') }}"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Foods</h3>
                    <p>{{ $item->foods }}</p>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>  
      </div>
    </div>
  </section>
</main>
@endsection