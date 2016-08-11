<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class ProductController extends Controller {

	public function index()
	{
		$data = DB::table('product') -> get();
		return view('product.index') -> with ('data', $data);
	}

	public function form()
	{
		return view('product.form');
	}

	public function save(Request $request)
	{
		$post = $request->all();
		$v= \Validator::make($request->all(),
			[
				'product_name' => 'required',
				'quantity' => 'required',
				'price' => 'required',
			]
		);
		if($v->fails())
		{
			return redirect()->back()->withErrors($v->errors()); 
		}
		else //masukin data
		{
			$data = array(
					'product_name' => $post['product_name'],
					'quantity' => $post['quantity'],
					'price' => $post['price'],
				);
			$ch = DB::table('product')->insert($data);
			if($ch > 0)
			{
				return redirect('productindex');
			}
		}
	}

}
