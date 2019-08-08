<?php

namespace App\service;

use App\Http\Requests\ItemRequest;
use App\Item;
use Illuminate\Http\UploadedFile;

class ItemService {

    public function createItem(ItemRequest $request)
    {
        $Item = new Item();	
		$Item->title = $request->input('title');
        $Item->description = $request->input('description');
        
    	if($request->hasFile('photo')) {
    		$Item->photo=$request->photo->store('image');
    	}
    	
		$Item->save();
		session()->flash('success','the article has been saved');

    }
}