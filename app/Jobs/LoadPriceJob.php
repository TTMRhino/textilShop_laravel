<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use App\Models\Items;

class LoadPriceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $path;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo"начало обработки \n";
        $xml = simplexml_load_file(Storage::path($this->path));
        echo"загрузили XML \n";

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

        echo"удаляем файл  $this->path \n";               
        Storage::deleteDirectory('filePrice');
    }
}
