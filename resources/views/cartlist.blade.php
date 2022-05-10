@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="treding-wrapper">
            <h4>Result for Products</h4>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="treding-image" src="{{$item->gallery}}">
                      </a>

            </div> 
            <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div> 

        </div> 
        <div class="col-sm-3">
            <button class="btn btn-warning">Remove To Cart</button>
    </div> 
            </div>
            @endforeach
          </div>
     </div>
</div>
@endsection