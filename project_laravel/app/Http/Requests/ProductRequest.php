<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Http\Controllers\ProductController;
class ProductRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtName'     => 'required|unique:products, name',
			'txtPrice'    => 'required|numeric',
			'txtIntro'    => 'required',
			'txtContent'  => 'required',
			'fImages'     => 'required',
			'txtKeywords' => 'required',
			'txtDes'      => 'required',
			'txtParent'   => 'required'
		];
	}
	public function messages()
	{
		return [
			'txtName.required'        => 'Tên không được để trống',
			'txtName.unique'          => 'Trùng tên sản phẩm',
			'txtPrice.required'       => 'Giá không được để trống',
			'txtPrice.numeric'        => 'Giá phải là số',
			'txtIntro.required'       => 'Intro không được để trống',
			'txtContent.required'     => 'Content không được để trống',
			'fImages.required'       => 'Thêm ảnh sản phẩm',
			'fImages.image'          => 'Không phải định dạng ảnh',
			'txtKeywords.required'    => 'Nhập keywords',
			'txtDes.required' => 'Nhập description',
			'txtParent.required'     => 'Chọn category'
		];
	}

}
