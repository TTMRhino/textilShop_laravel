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
        //
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
    public function edit(items $Item)
    {
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
    public function update(Request $request, Items $Items)
    {
        $Items->item = $request->item;
        $Items->description = $request->description;
        $Items->maingroup_id = $request->maingroup_id;
        $Items->maingroup_1c = $request->maingroup_1c;

        $Items->subgroup_1c = $request->subgroup_1c;
        $Items->subgroup_id = $request->subgroup_id;
        $Items->item = $request->item;

        $Items->price = $request->price;
        $Items->pur_price = $request->pur_price;
        $Items->old_price = $request->old_price;

        $Items->top_product = $request->top_product;
        $Items->remains = $request->remains;
        $Items->code1c = $request->code1c;

        $Items->save();

        return redirect()->back()->withSuccess('Item edit successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(items $items)
    {
        //
    }

    //Загрузка номенклатуры  
    public function uploadItems(Request $req)
    {
       
        dd($req);
        return view('admin.upload.items');
    }

    public function fileItems(Request $req)
    {
        
        $xml = simplexml_load_file($req->file('fileItems')->getPathname());
            //dd($xml);

            //Main groups
                foreach ($xml->Классификатор->Группы->Группа as $Group){
                    $findMainGroup = null;
                    $mainGroupId = null;
                    //$findMainGroup = Category::findOne(['code1c' => $Group->Ид]);
                    $findMainGroup = MainGroup::where('code1c', $Group->Ид)->first();

                
                
                    //если findMainGroup null => группы не существет. Создаем и записываем новую группу
                    if(is_null($findMainGroup)){
                    //  debug($Group->Наименование,true);
                        $main_group = new MainGroup;
                        $main_group->title = $Group->Наименование;
                        $main_group->code1c = $Group->Ид;
                        $main_group->save();

                        $mainGroupId = $main_group->id;
                        $mainGroup1c =  $main_group->code1c;
                    }else{                
                        $mainGroupId = $findMainGroup->id;
                        $mainGroup1c = $findMainGroup->code1c;
                    }   
                }

             
             //Sub groups            
             if(isset($Group->Группы->Группа)){

                foreach ($Group->Группы->Группа as $key=>$Group){
                    $findSubGroup = null;
                    $findSubGroup = SubGroup::where('code1c' , $Group->Ид)->first();
    
                    //если findSubGroup null => группы не существет. Создаем и записываем новую группу
                    if(is_null($findSubGroup)){
    
                        $sub_group = new SubGroup;
                        $sub_group->title = $Group->Наименование;
                        $sub_group->code1c = $Group->Ид;
                        $sub_group->maingroup_id = $mainGroupId;
                        $sub_group->maingroup_1c = $mainGroup1c;                       
                        $sub_group->save();
                    }                    
                }

             }


                //Items

                foreach ($xml->Каталог->Товары->Товар as $key=>$item){
                    $findItem = null;
                    $findItem = Items::where('code1c', $item->Ид)->first();

                    

                    if(is_null($findItem)){

                        $main_groupID = MainGroup::where('code1c', $item->Группы->Ид)->first();
                        
                        $sub_groupID = SubGroup::where('code1c', $item->Группы->Ид)->first();

                        $new_item = new Items;
                        $new_item->item= $item->Наименование;
                        $new_item->code1c = $item->Ид;

                        $new_item->maingroup_id =  $main_groupID ? $main_groupID->id: '';
                        $new_item->subgroup_id = $sub_groupID ? $sub_groupID->id: '';

                        $new_item->maingroup_1c = $main_groupID ? $main_groupID->code1c : '';
                        $new_item->subgroup_1c = $sub_groupID ? $sub_groupID->code1c :'';

                        $new_item->description = $item->Описание;                
                        $new_item->price = null;
                        $new_item->remains = null;

                        $patern = "/^[\x21-\x7E]{3}/i";
                        $string = $item->ЗначенияРеквизитов->ЗначениеРеквизита->Значение;
                        

                        $new_item->vendor =   "l".strval(intval(preg_replace($patern, '', $string)));
                        $new_item->save();
                    }

                        
                }

        return redirect('admin_panel/Items/uploadItems')->withSuccess('Main Group uploded successfully!');
        
    }

    //Загрузка цен 
    public function uploadPrice()
    {
        return view('admin.upload.price');
    }
}
