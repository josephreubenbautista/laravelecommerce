<form action="/items" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group row">
		<label for="name" class="col-3">Name:</label>
		<input required type="text" class="form-control col-8" id="name" name="name">
	</div>
	<div class="form-group row">
		<label for="description" class="col-3">Description:</label>
		<textarea class="form-control col-8" rows="5" id="description" name="description"></textarea>
	</div>
	<div class="form-group row">
		<label for="price" class="col-3">Price:</label>
		<input required type="number" min="1" class="form-control col-8" id="price" name="price">
	</div>
	<div class="form-group row">
		<label for="image" class="col-3">Image:</label>
		<input required type="file" class="form-control col-8" id="image" name="image">
	</div>
	<div class="form-group row">
		<label for="categories" class="col-3">Category:</label>
		<select required class="form-control col-8" id="category" name="category_id">
			@foreach(App\Category::all() as $category) 
				<option value="{{$category->id}}">{{$category->name}}</option>
			@endforeach
		</select>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>