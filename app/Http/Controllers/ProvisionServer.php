<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvisionServer extends Controller
{
    
    public function ki(){
        echo "ki hoiche?";
    }


    public function koi(){
        echo "ki koi geli?";
    }

    public function kire(){
        echo "kire bujli?";
    }

    public function dashboard(){
        return view('admin.admin');
    }

    public function dashboard_test(){
        return view('admin.admin_test');
    }

}
