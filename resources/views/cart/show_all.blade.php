@extends('template')

@section('title', 'My Cart')

@section('content')
	<style type="text/css">
		img {
			width: 100px;
			float: left;
			margin-right: 15px; 
		}
		.cart-item {
			margin-top: 25px;
		}
		.cart-item:after {
			content: "";
			display: table;
			clear: both;
		}
	</style>

	@if(count($cart_items)==0)
		<h1>No Items in Cart</h1>
	@else
		@foreach($cart_items as $item)
			{{$item->name}} {{$item->quantity}} <br>
		@endforeach
	@endif
	<a href="/cart/checkout" class="btn btn-success">Checkout</a>
@endsection