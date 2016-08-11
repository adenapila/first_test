
@extends('layout.master')
@section('content')
	<a href="<?php echo 'productform'?>">Input Form</a>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Quantity</th>
			<th>Product Price</th>
			<th>Action</th>
		</thead>

		<tbody>
			<?php
				foreach ($data as $row) {
					?>
						<tr>
							<td><?php echo $row -> id; ?></td>
							<td><?php echo $row -> product_name; ?></td>
							<td><?php echo $row -> quantity; ?></td>
							<td><?php echo $row -> price; ?></td>
							<td>
								<a href="<?php echo 'ProductEdit/'. $row -> id?>">Edit</a> |
								<a href="<?php echo 'ProductDelete/'. $row -> id?>">Delete</a>
							</td>
						</tr>
					<?php
				}
				?>
		</tbody>

	</table>

@stop()