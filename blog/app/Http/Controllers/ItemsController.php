<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\DB;

use App\Item;

use Auth;

class ItemsController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}


	public function index(){
		//$list = Item::all();
        $list =Item::paginate(3);
		return view('items.index',['items'=>$list]);
        //return response()->json($list);

	}

    public function create(){
    	return view('items.createitems');
    }

    public function store(Request $request){

    	$Item = new Item();

    	$Item->title = $request->input('title');
    	$Item->description = $request->input('description');

    	if($request->hasFile('photo'))
    	{
    		$Item->photo=$request->photo->store('image');
    	}
    	
		$Item->save();
		return redirect('items');

    }
}
