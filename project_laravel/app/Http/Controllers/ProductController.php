<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('laravel_project.product.product_list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$parent = Category::select('id', 'name', 'paren_id')->get()->toArray();
		// dd($parent);
		return view('laravel_project.product.product_add', compact('parent'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{ 
		$data              = new Product;
		$fileImage         = $request->file('fImages')->getOriginalName();
		$data->name        = $request->txtName;
		$data->alias       = changeTitle($request->txtName);
		$data->price       = $request->txtPrice;
		$data->intro       = $request->txtIntro;
		$data->content     = $request->txtContent;
		$data->image       = $fileImage;
		$data->keywords    = $request->txtKeywords;
		$data->description = $request->txtDes;
		$data->user_id     = 1;
		$data->cate_id     = $request->txtParent;
		$request->file('fImages')->move('resources/upload/', $fileImage);

		dd($data);
		$data->save();
		
		return redirect()->route('admin.product.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

		dd($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('laravel_project.product.product_edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
