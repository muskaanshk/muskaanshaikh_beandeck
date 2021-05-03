<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Orders;
use App\Models\Order_status;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;

class orderController extends Controller
{
    public function Orders(){
        $open_order = Orders::where('Order_Status','!=','Completed')->get();
        return $open_order;
    }

    public function Order_status(){
        $current_order = Order_status::where('current_status','=','PICKUP EXCEPTION')->orWhere('current_status','=','PICKUP QUEUED')->orWhere('current_status','=','PENDING PICKUP')->get();
        return $current_order;
    }
}
