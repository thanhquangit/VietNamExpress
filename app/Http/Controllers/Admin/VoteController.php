<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vote;
class VoteController extends Controller
{
    public function getListVote(){
    	$vote= Vote::all();
    	return view('admin.vote.list', compact('vote'));
    }
    public function getAddVote(){
    	return view('admin.vote.add');
    }
    public function postAddVote(Request $req){
    	$this->validate($req,
    		[
    			'content'=>'required'
    		],
    		[
    			'content.required'=>'Content is not Empty'
    		]);
    	$vote = new Vote;
    	$vote->content = $req->content;
    	$vote->save();
    	return redirect('admin/vote/add')->with('notify','Add Vote is successfully');
    }
    public function getEditVote($id){
    	$vote = Vote::find($id);
    	return view('admin.vote.edit',compact('vote'));
    }
   public function postEditVote(Request $req, $id){
    	$this->validate($req,
    		[
    			'content'=>'required'
    		],
    		[
    			'content.required'=>'Content is not Empty'
    		]);
    	$vote =  Vote::find($id);
    	$vote->content = $req->content;
    	$vote->save();
    	return redirect('admin/vote/edit/'.$id)->with('notify','Edit Vote is successfully');
    }
    public function getDeleteVote($id){
    	$vote = Vote::find($id);
    	$vote->delete();
    	return redirect('admin/vote/list')->with('notify','Delete Vote is successfully');
    }
}
