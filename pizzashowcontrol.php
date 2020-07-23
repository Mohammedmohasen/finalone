<?php

namespace App\Http\Controllers;
use Cobaltgrid\Aviation\Weather;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class pizzashowcontrol extends Controller
{

    public function home()
    {
        $users = DB::select('select *from usertable');
        return view('pizzahome', ['users' => $users]);
    }
    public function order()
    {
        $users = DB::select('select *from usertable');
        return view('order', ['users' => $users]);
    }

    public function saveorder()
    {

        $totalprice = 0;
        $bill = '';
        $users = DB::select('select *from usertable');
        foreach ($users ?? '' as $user) {

            if (isset($_POST[$user->nameuser])) {
                $totalprice += $user->phone;
                $bill .= $user->nameuser . ',';
            }
        }
        echo $totalprice;
        echo $bill;
        $pizza = array('id' => 1, 'nameuser' => $_POST['location'], 'phone' => $totalprice, 'money' => $_POST['phonenumber'], 'statues' => 1, 'passworduser' => $bill);
        DB::table('usertable')->insert($pizza);
        return view('login');
    }

    public function checklogin(Request $request)
    {
        if ($_POST['name'] == 'mohammed' && $_POST['email'] == 'm@gmail') {
            return view('history');
        } else {
            return $this->home();
        }

    }
    public function login()
    {
        return view('login');
    }
    public function history()
    {
        return view('history');
    }
    public function hello()
    {return view('pizzahome');}
    public function insert()
    {
        $pizza = array('id' => 1, 'nameuser' => $_POST['pizzaname'], 'phone' => $_POST['pricepizza'], 'money' => 1, 'statues' => 1, 'passworduser' => $_POST['insertdoc']);
        DB::table('usertable')->insert($pizza);
        return view('login');
    }
    public function insertpage()
    {
        return view('insertpizza');
    }

}
