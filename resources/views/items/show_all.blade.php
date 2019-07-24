@extends('template')

@section('title', 'Catalog')

@section('content')
<button type="button" id="sidebarCollapse" class="btn btn-info">
	<i class="fas fa-align-left"></i>
	<span>Filter By Category</span>
</button>
<!-- Button to Open the Modal -->
<button id="itemFormToggle" type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemForm">
	Add New Item
</button>
<hr>
<div class="row">
	@foreach($items as $item)
	<div class="card-container col-4">
		<div class="card text-center">
			<img class="card-img-top mx-auto" src="{{$item->image}}" alt="Card image">
			<div class="card-body" data-id="{{$item->id}}" data-name="{{$item->name}}">
				<h4 class="card-title">{{$item->name}}</h4>
				<p class="card-text">{{$item->description}}</p>
				<button class="btn btn-primary editItemBtn" data-toggle="modal" data-target="#itemForm">Edit</button>
				<button class="btn btn-danger deleteItemBtn" data-toggle="modal" data-target="#confirmationModal">Delete</button>
				<input type="number" min="1" name="quantity">
				<button data-id="{{$item->id}}" class="add-to-cart btn btn-success">Add To Cart</button>
			</div>
		</div>
	</div>
	@endforeach
</div>

<!-- The Modal -->
<div class="modal" id="itemForm">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 id="modal-title" class="modal-title">Add Item</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div id="modal-body" class="modal-body">
				@include('partials.add_item_form')
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<!-- Confirmation Modal -->
<div class="modal" id="confirmationModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 id="delete-modal-title" class="modal-title">Delete</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div id="delete-modal-body" class="modal-body text-center">

			</div>

			<!-- Modal footer -->
			<div id="delete-modal-footer" class="modal-footer justify-content-center">
				<a href="#" class="btn btn-danger">Delete</a>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>
@endsection
