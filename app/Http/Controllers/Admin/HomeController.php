<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Orders;
use App\models\Items;
use App\models\Customers;
use App\models\SubGroup;
use App\models\MainGroup;
use App\models\Organizations;

class HomeController extends Controller
{
    public function index(){

        $orders_count = Orders::all()->count();
        $items_count = Items::all()->count();
        $customers_count = Customers::all()->count();
        $subGroup_count = SubGroup::all()->count();
        $mainGroup_count = MainGroup::all()->count();
        $organizations_count = Organizations::all()->count();

       

        return view('admin.home.index',[
            'orders_count' => $orders_count,
            'items_count' => $items_count,
            'customers_count' => $customers_count,
            'subGroup_count' => $subGroup_count, 
            'mainGroup_count' => $mainGroup_count,
            'organizations_count' => $organizations_count

        ]);
    }
}
