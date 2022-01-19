<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Items;
use App\Models\MainGroup;
use App\Models\SubGroup;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Items = Items::paginate(10);

        //return view('admin.items.index',[ 'Items' => DB::table('items')->paginate(5) ]);
        return view('admin.items.index',[ 'Items' => $Items ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $MaingGroup = MainGroup::orderBy('title','desc')->get();
        $SubGroup = SubGroup::orderBy('title','desc')->get();

        return view('admin.items.create', [
            'MainGroup' => $MaingGroup,
            'SubGroup' => $SubGroup,
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Item = new Items();

        $Item->item = $request->item;
        $Item->description = $request->description;
        $Item->maingroup_id = $request->maingroup_id;
        $Item->maingroup_1c = $request->maingroup_1c;

        $Item->subgroup_1c = $request->subgroup_1c;
        $Item->subgroup_id = $request->subgroup_id;
        $Item->item = $request->item;

        $Item->price = $request->price;
        $Item->pur_price = $request->pur_price;
        $Item->old_price = $request->old_price;

        $Item->top_product = $request->top_product;
        $Item->remains = $request->remains;
        $Item->code1c = $request->code1c;
        $Item->vendor = $request->vendor;

        $Item->save();

        return redirect()->back()->withSuccess('New Item saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $Item)
    {
        //dd($Item);
        $MaingGroup = MainGroup::all();
        $SubGroup = SubGroup::all();

        return view('admin.items.edit', [ 
            'Items' => $Item,
            'SubGroup' => $SubGroup,  
            'MainGroup' => $MaingGroup 
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $Item)
    {
       
        $Item->item = $request->item;
        $Item->description = $request->description;
        $Item->maingroup_id = $request->maingroup_id;
        $Item->maingroup_1c = $request->maingroup_1c;

        $Item->subgroup_1c = $request->subgroup_1c;
        $Item->subgroup_id = $request->subgroup_id;
        $Item->item = $request->item;

        $Item->price = $request->price;
        $Item->pur_price = $request->pur_price;
        $Item->old_price = $request->old_price;

        $Item->top_product = $request->top_product;
        $Item->remains = $request->remains;
        $Item->code1c = $request->code1c;
        $Item->vendor = $request->vendor;

        $Item->save();

        return redirect()->back()->withSuccess('Item edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $Item)
    {
        $Item->delete();

        return redirect()->back()->withSuccess('Item deleted successfully!');
    }

    
    
}
