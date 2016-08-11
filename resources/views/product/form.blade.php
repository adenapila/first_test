
@extends('layout.master')
@section('content')

	<p style="color:red;">{{$errors->first('product_name')}}</p>
	<p style="color:red;">{{$errors->first('quantity')}}</p>
	<p style="color:red;">{{$errors->first('price')}}</p>
	
	<form action="{{action('ProductController@save')}}" method="post">
		<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
		Product Name:
		<input type="text" class="form-control" name="product_name"><br>
		Quantity:
		<input type="text" class="form-control" name="quantity"><br>
		Price:
		<input type="text" class="form-control" name="price"><br>
		<input type="submit" class="btn btn-primary" value="Save"><br>
	</form>

@stop()