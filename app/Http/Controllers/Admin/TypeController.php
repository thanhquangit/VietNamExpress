<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use App\Category;
class TypeController extends Controller
{
	function __construct(){
		$category = Category::all();
		view()->share('category',$category);
	}
    public function getListType(){
    	$type= Type::all();
    	return view('admin.type.list', compact('type'));
    }
    public function getAddtype(){
    	return view('admin.type.add');
    }
    public function postAddType(Request $req){
    	$this->validate($req,
    		[
    			'name'=>'required',
    			'stt'=>'required',
    			'category'=>'required'
    		],
    		[
				'name.required'=>'Name is not Empty',
    			'stt.required'=>'Stt is not Empty',
    			'category.required'=>'Category is not Empty'
    		]);
    	$type = new Type;
    	$type->name = $req->name;
    	$type->slug = changeTitle($req->name);
    	$type->stt = $req->stt;
    	$type->hide = $req->hide;
    	$type->category_id = $req->category;
    	$type->save();
    	return redirect('admin/type/add')->with('notify','Add Type is successfully');
    }
    public function getEditType($id){
    	$type = Type::find($id);
    	return view('admin.type.edit',compact('type'));
    }
    public function postEditType(Request $req, $id){
    	$this->validate($req,
    		[
    			'name'=>'required',
    			'stt'=>'required',
    			'category'=>'required'
    		],
    		[
				'name.required'=>'Name is not Empty',
    			'stt.required'=>'Stt is not Empty',
    			'category.required'=>'Category is not Empty'
    		]);
    	$type =  Type::find($id);
    	$type->name = $req->name;
    	$type->slug = changeTitle($req->name);
    	$type->stt = $req->stt;
    	$type->hide = $req->hide;
    	$type->category_id = $req->category;
    	$type->save();
    	return redirect('admin/type/edit/'.$id)->with('notify','Edit Type is successfully');
    }
    public function getDeleteType($id){
    	$type = Type::find($id);
    	$type->delete();
    	return redirect('admin/type/list')->with('notify','Delete type is successfully');
    }
}
