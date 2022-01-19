<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainGroup;
use App\Models\SubGroup;
use App\Models\Items;

class UploadController extends Controller
{

    public function index()
    {
        return view('admin.upload.index');
    }

    //Загрузка цен  
    public function uploadPrice()
    {
        return view('admin.upload.price');
    }



    //Загрузка номенклатуры  !!! удалить?
    public function uploadItems(Request $req)
    {       
        return view('admin.upload.items');
    }

    //обработка даных цен
    public function filePrice(Request $req)
    {
       
        $xml = simplexml_load_file($req->file('filePrice')->getPathname());
        
        foreach ($xml->ПакетПредложений->Предложения->Предложение as $item){
            
           //8f38fd0b-8d5a-11e7-8f42-50465d54779c - это тип(Ид) розничной цены в прайсе
           //ИдТипаЦены
           $price = null;
            //отбираем только розничную цену в списке цен (их по прйсу 3 типа)
            foreach($item->Цены->Цена as $typePrice){
                if($typePrice->ИдТипаЦены == '8f38fd0b-8d5a-11e7-8f42-50465d54779c'){
                    $price =  $typePrice->ЦенаЗаЕдиницу;
                    
                }
            }
          

            
            $findItem = Items::where('code1c', $item->Ид)->first();
          

             //ИдКлассификатора - это main_group товара (прекреп)
            if(!is_null($findItem)){                                   
               $findItem->price = $price;                   
               $findItem->save();               
               
               //$this->countMessage= 55;
            }

           
                   
        }
       // $this->countMessage= 55;
        //return $this->countMessage;   
        return redirect('admin_panel/upload/price')->withSuccess('Price uploded successfully!');
     
    }
    
    //обработка даных номенклатуры
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

        return redirect('admin_panel/upload')->withSuccess('Items uploded successfully!');
        
    }

}
