@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}">
        
        </div>
        
        <div class="col-sm-6">
            <a href="/">Go Back </a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: RM {{$product['price']}}</h3>
            <h3>Details: {{$product['description']}}</h3>
            <h3>Category: {{$product['category']}}</h3>
            <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button class="btn btn-warning">Add To Cart</button>
                    <button class="btn btn-success">Buy Now</button>
                </form>
            
            <br><br>
        </div>
    
    </div>


</div>
@endsection