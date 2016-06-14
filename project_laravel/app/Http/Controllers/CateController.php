<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CateRequest;
class CateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index()
	{
		$data =  Category::select('id', 'name', 'paren_id', 'order')->orderBy('id','DESC')->get()->toArray();
		return	view('laravel_project.category.cate_list', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$parent = Category::select('name', 'id', 'paren_id')->get()->toArray();
		return	view('laravel_project.category.cate_add', compact('parent'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CateRequest $request)
	{
		$cate = new Category;
		$cate->name = $request->txtCateName;
		$cate->alias = changeTitle($request->txtCateName);
		$cate->order = $request->txtOrder;
		$cate->keywords = $request->txtKeywords;
		$cate->description = $request->txtDes;
		$cate->paren_id = $request->txtParent;
		$cate->save();
		return redirect()->route('admin.category.index')->with(['sesson_complet' => 'INSERT THÀNH CÔNG NHÉ']);
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
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = Category::findOrFail($id)->toArray();
		$parent = Category::select('id', 'name', 'paren_id')->get()->toArray();
		return	view('laravel_project.category.cate_edit', compact('data', 'parent'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CateRequest $request, $id)
	{
		$data = Category::findOrFail($id);
		$data->name = $request->txtCateName;
		$data->alias = changeTitle($request->txtCateName);
		$data->order = $request->txtOrder;
		$data->keywords = $request->txtKeywords;
		$data->description = $request->txtDes;
		$data->paren_id = $request->txtParent;
		$data->save();
		return redirect()->route('admin.category.index')->with(['sesson_update'=> 'Sửa thành công']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$parentCount = Category::where('paren_id', $id)->count();
		if ($parentCount == 0){
			$data = Category::findOrFail($id);
			$data->delete();
			return redirect()->route('admin.category.index')->with(['sesson_del'=> 'Xóa thành công']);
		}else{
			echo "<script type = text/javascript> alert ('Không thể xóa');
			window.location = '";
			echo route('admin.category.index');
			echo "'
			</script>";
		}

	}

}
