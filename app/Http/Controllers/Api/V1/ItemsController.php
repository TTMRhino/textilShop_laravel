<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemsResource;
use Illuminate\Http\Request;
use App\Models\Items;


class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       

        $sort = $request->sort ? $request->sort : 'item';
        $sortType = $request->sortType ? $request->sortType : 'ASC';

        if( !empty($request->search)){
            //dd($request->search);
            $sort ='item';
            $sortType = $request->sortType ? $request->sortType : 'ASC';

            $query = Items::query()->where('item','LIKE',"%$request->search%")->getQuery();
            //$query = $query->toQuery();
            //$query = Items::query()->orderBy($sort, $sortType);

            //dd($query);
            return $query->paginate(10);
        }
        //dd($request->sort);
      /*  if( empty($request->search)){
            $query = Items::query();

            $sort = $request->sort ? $request->sort : 'item';
            $sortType = $request->sortType ? $request->sortType : 'ASC';    
    
            $query->orderBy($sort, $sortType);    
          
            return $query->paginate(10);
        }else{           
                $query = Items::where( 'item','LIKE',"%$request->search%")->getQuery();           
                
            }    */
            $query = Items::query()->orderBy($sort, $sortType);  
            

            return $query->paginate(10);         
        
       
    }

    public function getItemByMGroup(Request $request){
       
        $sort = $request->sort ? $request->sort : 'item';
        $sortType = $request->sortType ? $request->sortType : 'ASC';

        $query = Items::where( 'maingroup_id',$request->id)->getQuery();
        $query->orderBy($sort, $sortType);

        return $query->paginate(10);
    }

    public function getItemBySGroup(Request $request){
       
        $sort = $request->sort ? $request->sort : 'item';
        $sortType = $request->sortType ? $request->sortType : 'ASC';

        $query = Items::where( 'subgroup_id',$request->id)->getQuery();
        $query->orderBy($sort, $sortType);

        return $query->paginate(10);
    }

    public function item(Request $request){
       // dd($id);
        return Items::where('id',$request->id)->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        return new ItemsResource( Items::findorFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
