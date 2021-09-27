<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Auth;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items=Item::all();
         return view('create',compact('items'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $items=Item::all();
         return view('index',compact('items'));
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required|unique:items|max:255',
            
        ]);
        $item=Item::create([
            'item_name'=>$request->item_name,
            'user_id' => 1
        ]);
        return redirect()->route('item.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    // public function edit(Item $item)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request,  $id)
     {
        $update=Item::find($id)->update([
            'item_name'=>$request->item_name,
            'user_id'=>1
        ]);
        return redirect()->route('item.view');

    //     //
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
    public function edit($id){
        $items=Item::find($id);
        return view('updateitem',compact('items'));
    }
    public function delete(){
        $delete=Item::find($id)->forceDelete();
        return redirect()->route('item.view');
    }

    // public function update(Request,$request,$id){
//         $update=Item::find($id)->update([
//             'item_name'=>$request->item_name,
//             'user_id'=>1,
//         ]);
//         return redirect()->route('item.view');
//  }
}
