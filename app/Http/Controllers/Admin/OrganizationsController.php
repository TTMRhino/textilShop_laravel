<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organizations;
use Illuminate\Http\Request;
use App\Models\User;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // if(empty($request->search)){
            $Organizations =  Organizations::paginate(10);

            return view('admin.organizations.index',[ 'Organizations' => $Organizations  ]);
       // }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Users = User::orderBy('name','desc')->get();
        return view('admin.organizations.create',
        [
            'Users' => $Users,
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
        $Organization = new Organizations();

        $Organization->name = $request->name;
        $Organization->user_id = $request->user_id;
        $Organization->inn = $request->inn;
        $Organization->ogrn = $request->ogrn;

        $Organization->kpp = $request->kpp;
        $Organization->adres_registr = $request->adres_registr;
        $Organization->pay_account = $request->pay_account;

        $Organization->kor_account = $request->kor_account;
        $Organization->bik_bank = $request->bik_bank;
        $Organization->bank_name = $request->bank_name;

        $Organization->discount = $request->discount;        

        $Organization->save();

        return redirect()->back()->withSuccess('New Organization saved successfully!');
    }

    public function search(Request $request){

        $Organizations = Organizations::where('name','LIKE', "%{$request->search}%")->
        orWhere('user_id', 'LIKE', "%{$request->search}%")->
        orWhere('inn', 'LIKE', "%{$request->search}%")->
        orWhere('ogrn', 'LIKE', "%{$request->search}%")->
        orWhere('kpp', 'LIKE', "%{$request->search}%")->
        orWhere('adres_registr', 'LIKE', "%{$request->search}%")->
        paginate(10);
       
       return view('admin.organizations.index',[ 'Organizations' => $Organizations  ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organizations  $organizations
     * @return \Illuminate\Http\Response
     */
    public function show(Organizations $organizations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organizations  $organizations
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizations $Organization)
    {

        $Users = User::all();
        return view('admin.organizations.edit',[
            'Organization' => $Organization,
            'Users' => $Users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organizations  $organizations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizations $Organization)
    {
        $Organization->name = $request->name;
        $Organization->user_id = $request->user_id;
        $Organization->inn = $request->inn;
        $Organization->ogrn = $request->ogrn;

        $Organization->kpp = $request->kpp;
        $Organization->adres_registr = $request->adres_registr;
        $Organization->pay_account = $request->pay_account;

        $Organization->kor_account = $request->kor_account;
        $Organization->bik_bank = $request->bik_bank;
        $Organization->bank_name = $request->bank_name;

        $Organization->discount = $request->discount;        

        $Organization->save();

        return redirect()->back()->withSuccess('Organization edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizations  $organizations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizations $Organization)
    {
        $Organization->delete();

        return redirect()->back()->withSuccess('Organization deleted successfully!');
    }
}
