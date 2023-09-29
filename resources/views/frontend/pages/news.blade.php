@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush
@section('content')

    <div class="container mt-4 mb-2">
        <div class="row">
            @for ($i = 0; $i < 15; $i++)
                <div class="col-md-4 mt-4 ">
                    <div class="card news-card">
                        <div class="card-header">
                            <img src="https://s.aolcdn.com/images/dims?client=fh7w6q744eiognjk&signature=d59d0cf6af1d779a3dca451e0ba259c33bbc6115&image_uri=https%3A%2F%2Fs.aolcdn.com%2Fos%2Fab%2F_cms%2F2019%2F08%2F30142658%2F2020-jeep-wrangler-16.jpg&thumbnail=750%2C422&quality=80"
                                alt="" />
                        </div>
                        <div class="card-body">
                            <span class="tag tag-teal">Technology</span>
                            <h4><a href="{{ route('news.show', 1) }}">Why is the Tesla Cybertruck designed the way it
                                    is?</a></h4>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur
                                tenetur distinctio neque?
                            </p>
                            <div class="user">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Outdoors-man-portrait_%28cropped%29.jpg"
                                    alt="" />
                                <div class="user-info">
                                    <h5>Jerome Walton</h5>
                                    <small>2h ago</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endfor
        </div>
    </div>


@endsection
@push('scripts')
@endpush
