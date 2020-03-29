<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        
      
        $product=Product::select('*')->get();
        
       $Nuts =Product::select('*')
           ->where('category_id',1)
           ->get()
       ;
       $Oils =Product::select('*')
            ->where('category_id',2)
            ->get();
       ;
 

        return view('public.index',['Nuts'=>$Nuts],['Oils'=>$Oils]);
    }
    public function product(Request $request,$id){

        $product = Product::findOrfail($id); 

        return view('public.product',['product'=>$product]);
    }






    public function about(){
        return view('public.about');
    }




    public function kitchen(){
        return view('public.kitchen');
    }
    public function household(){
        return view('public.household');
    }
    public function faqs(){
        return view('public.faqs');
    }
    public function icons(){
        return view('public.icons');
    }
    public function typography(){
        return view('public.typography');
    }
    public function contact(){
        return view('public.contact');
    }
}
