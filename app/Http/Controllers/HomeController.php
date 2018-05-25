<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\Type;
use App\Advertisement;
class HomeController extends Controller
{
	function __construct()
	{
		$news = News::orderBy('id','desc')->take(10)->get();
		$news_view = News::orderBy('qtyView','desc')->take(9)->get();
		$advertisement = Advertisement::where('position',1)->take(3)->get();
		$adverbottom = Advertisement::where('position',2)->get();
		$category = Category::all();
		view()->share('category',$category);
		view()->share('news',$news);
		view()->share('news_view',$news_view);
		view()->share('advertisement',$advertisement);
		view()->share('adverbottom',$adverbottom);
	}
	public function Index(){
		
   		return view('page.home');
   	}
   	public function getNewsByType($id){
   		$type = Type::find($id);
   		$news_type = News::where('type_id',$id)->orderByDesc('id')->paginate(13);
   		return view('page.news_by_type',compact('news_type','type'));
   	} 
   	public function getDetailNews($id){
   		$detail = News::find($id);
   		return view('page.detail',compact('detail'));
   	}
   	public function postSearch(Request $req){
    	$key = $req->key;
    	$news_search = News::where('title','like',"%$key%")->orWhere('summary','like',"%$key%")->paginate(10);
    	return view('page.search',compact('key','news_search'));
    }
}
