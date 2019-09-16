<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class SessionController extends Controller
{
    public function getsession()
    {
        session()->put('Khoahoc', 'Laravel');
        $value = Session::get('Khoahoc');
        echo $value;
        echo "<br>";
        Session::forget('Khoahoc');
            if (Session::has('Khoahoc')){
                echo "Đã có khóa học laravel";
            }
        echo "<br>";
        session()->flash('alert','binh luan thanh cong');
        $valueflash = Session::get('alert');
        echo $valueflash;
    }
    public function getsessionalert()
    {
        $valueflash = Session::get('alert');
        echo $valueflash;
    }
}

