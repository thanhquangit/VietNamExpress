<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\Advertisement;
class HomeController extends Controller
{
	function __construct()
	{
		$category = Category::all();
		view()->share('category',$category);
	}
	public function Index(){
		$news = News::orderBy('id','desc')->take(10)->get();
		$news_view = News::orderBy('qtyView','desc')->take(9)->get();
		$advertisement = Advertisement::where('position',1)->take(3)->get();
		$adverbottom = Advertisement::where('position',2)->get();
   		return view('page.home',compact('news','news_view','advertisement','adverbottom'));
		
   } 
}
