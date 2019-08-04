<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\ItemRequest;

use App\service\ItemService;

use App\Item;

use Auth;



class ItemsController extends Controller
{
	public function __construct(ItemService $ItemService)
    {
		$this->middleware('auth');
		$this->ItemService = $ItemService;
	}


	public function index()
    {
		$list =Item::paginate(10);
		return response()->json($list);
	}


    public function create()
    {
    	return view('items.createitems');
    }


    public function store(ItemRequest $request)
    {
		$this->ItemService->createItem($request);
		return redirect('listeItem');
    }
}
