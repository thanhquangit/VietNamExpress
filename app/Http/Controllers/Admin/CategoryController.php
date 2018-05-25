<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    public function getListCategory(){
    	$category = Category::all();
    	return view('admin.category.list', compact('category'));
    }
    public function getAddCategory(){
    	return view('admin.category.add');
    }
    public function postAddCategory(Request $req){
    	$this->validate($req,
    		[
    			'name'=>'required',
    			'stt'=>'required'
    		],
    		[
    			'name.required'=>'Name is not Empty',
    			'stt.required'=>'Stt is not Empty'
    		]);
    	$category = new Category;
    	$category->name = $req->name;
    	$category->slug = changeTitle($req->name);
    	$category->stt = $req->stt;
    	$category->hide = $req->hide;
    	$category->save();
    	return redirect('admin/category/add')->with('notify','Add Category is successfully');
    }
    public function getDeleteCategory($id){
    	$category = Category::find($id);
    	$category->delete();
    	return redirect('admin/category/list')->with('notify','Delete Category is successfully');
    }
    public function getEditCategory($id){
    	$category = Category::find($id);
    	return view('admin.category.edit',compact('category'));
    }
    public function postEditCategory(Request $req, $id){
    	$this->validate($req,
    		[
    			'name'=>'required',
    			'stt'=>'required'
    		],
    		[
    			'name.required'=>'Name is not Empty',
    			'stt.required'=>'Stt is not Empty'
    		]);
    	$category = Category::find($id);
    	$category->name = $req->name;
    	$category->slug = changeTitle($req->name);
    	$category->stt = $req->stt;
    	$category->hide = $req->hide;
    	$category->save();
    	return redirect('admin/category/edit/'.$id)->with('notify','Edit Category is successfully');
    }
}
