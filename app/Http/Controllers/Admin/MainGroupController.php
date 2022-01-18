<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainGroup;
use Illuminate\Http\Request;

class MainGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       //$MainGroup = MainGroup::orderBy('title','desc')->get();       
       $MainGroup = MainGroup::paginate(10);

        return view('admin.mainGroup.index',[ 'MainGroup' => $MainGroup ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mainGroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_MainGroup = new MainGroup();

        $new_MainGroup->title = $request->title;
        $new_MainGroup->description = $request->description;
        $new_MainGroup->key_words = $request->key_words;
        $new_MainGroup->code1c = $request->code1c;
        $new_MainGroup->save();

        return redirect()->back()->withSuccess('Main Group saved successfully!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainGroup  $mainGroup
     * @return \Illuminate\Http\Response
     */
    public function show(MainGroup $mainGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainGroup  $mainGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(MainGroup $MainGroup)
    {
        
        return view('admin.mainGroup.edit',[ 'MainGroup' => $MainGroup ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainGroup  $mainGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainGroup $MainGroup)
    {        
        $MainGroup->title = $request->title;
        $MainGroup->description = $request->description;
        $MainGroup->key_words = $request->key_words;
        $MainGroup->code1c = $request->code1c;

        $MainGroup->save();

        return redirect()->back()->withSuccess('Main Group edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainGroup  $mainGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainGroup $MainGroup)
    {
        $MainGroup->delete();

        return redirect()->back()->withSuccess('Main Group deleted successfully!');
    }
}
