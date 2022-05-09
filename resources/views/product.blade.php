@extends('master')
@section("content")
<div class="custom-product">
       
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            @foreach ($product as $item)
            <div class="item {{$item['id']==1?'active':''}}">   
                  <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}">
                    <div class="carousel-caption slider-text">
                      <h3>{{$item['name']}}</h3>
                      <p>{{$item['description']}}</p>
                  </a>
              </div>
            </div>
            @endforeach
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

<div class="treding-wrapper">
    <h3>Trending Product</h3>
        @foreach ($product as $item)
            <div class="treding-item"> 
              <a href="detail/{{$item['id']}}">  
              <img class="treding-image" src="{{$item['gallery']}}">
              <div class="">
                <h3>{{$item['name']}}</h3>
              </div>
              </a>
            </div>
        @endforeach

</div>
</div></div>
@endsection