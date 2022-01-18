<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubGroup;
use App\Models\MainGroup;
use Illuminate\Http\Request;

class SubGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$SubGroup = SubGroup::all();
        $SubGroup = SubGroup::paginate(10);

        return view('admin.subGroup.index',[ 'SubGroup' => $SubGroup ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $MaingGroup = MainGroup::orderBy('title','desc')->get();
        return view('admin.subGroup.create', ['MainGroup' => $MaingGroup ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_SubGroup = new SubGroup();

        $new_SubGroup->title = $request->title;
        $new_SubGroup->maingroup_id = $request->maingroup_id;
        $new_SubGroup->maingroup_1c = $request->maingroup_1c;
        $new_SubGroup->code1c = $request->code1c;
        $new_SubGroup->save();

        return redirect()->back()->withSuccess('Sub Group saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function show(SubGroup $subGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(SubGroup $SubGroup)
    {
        $MaingGroup = MainGroup::all();

       
        return view('admin.subGroup.edit',[ 
            'SubGroup' => $SubGroup,  
            'MainGroup' => $MaingGroup 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubGroup $SubGroup)
    {
        $SubGroup->title = $request->title;
        $SubGroup->maingroup_id = $request->maingroup_id;
        $SubGroup->maingroup_1c = $request->maingroup_1c;
        $SubGroup->code1c = $request->code1c;
        $SubGroup->save();

        return redirect()->back()->withSuccess('Sub Group edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubGroup  $subGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubGroup $SubGroup)
    {
        $SubGroup->delete();

        return redirect()->back()->withSuccess('Sub Group deleted successfully!');
    }
}
