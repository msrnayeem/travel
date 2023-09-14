@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Home')
@push('styles')
<style>
 @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");

* {
  box-sizing: border-box;
}
.mt-4, .my-4 {
    margin-top: 1.90rem !important;
}
.container {
    margin-left: 0;
  margin: auto;
}
.news-card{
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  
}
.news-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.news-card .card-body {
  display: flex;
  flex-direction: column;
  align-items: start;
  padding: 20px;
  min-height: 250px;
}
.news-card .tag {
  background-color: #ccc;
  color: #fff;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  padding: 2px 10px;
  text-transform: uppercase;
}
.news-card .tag-teal {
  background-color: #92d4e4;
}
.news-card .tag-purple {
  background-color: #3d1d94;
}
.news-card .tag-pink {
  background-color: #c62bcd;
}
.news-card .card-body h4 {
  margin: 10px 0;
}
.news-card .card-body p {
  font-size: 14px;
  margin: 0 0 40px 0;
  font-weight: 500;
  color: rgb(70, 68, 68);
}
.news-card .user {
  display: flex;
  margin-top: auto;
}
.news-card .user img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
  object-fit: cover;
}
.news-card .user-info h5 {
  margin: 0;
}
.news-card .user-info small {
  color: #888785;
}
@media (max-width: 940px) {
  .container {
    margin-top: 70px;
    grid-template-columns: 1fr;
    justify-items: center;
  }
}


</style>
@endpush
@section('content')

<div class="container mt-4 mb-2">
    <div class="row"> 
        @for($i=0;$i<15;$i++)
        <div class="col-md-4 mt-4 ">
            <div class="card news-card">
                <div class="card-header">
                <img src="https://s.aolcdn.com/images/dims?client=fh7w6q744eiognjk&signature=d59d0cf6af1d779a3dca451e0ba259c33bbc6115&image_uri=https%3A%2F%2Fs.aolcdn.com%2Fos%2Fab%2F_cms%2F2019%2F08%2F30142658%2F2020-jeep-wrangler-16.jpg&thumbnail=750%2C422&quality=80" alt="" />
                </div>
                <div class="card-body">
                <span class="tag tag-teal">Technology</span>
                <h4><a href="{{ route('news-details') }}">Why is the Tesla Cybertruck designed the way it is?</a></h4>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur
                    tenetur distinctio neque?
                </p>
                <div class="user">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Outdoors-man-portrait_%28cropped%29.jpg" alt="" />
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