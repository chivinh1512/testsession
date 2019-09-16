<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Session;

class ShoppingCartController extends Controller
{
    public function getcart($id){
        $data = Product::find($id);
        $cart = session()->get('cart');
        $cart = [
            $data['id']=> [
                "name" => $data['name'],
                "price" =>$data['price'] ,
            ]
        ];
        Session::push('cart', $cart);
        return redirect()->back()->with('success','Đã thêm vào giỏ hàng');
    }
    public function delcart(){
        Session::forget('cart');
        return redirect()->back()->with('deleted','Đã xóa giỏ hàng');
    }
}
