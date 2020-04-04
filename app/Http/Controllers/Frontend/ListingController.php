<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index(){
        
      
        // $product=Product::select('*')->get();
        $Nuts =Product::select('*')->where('category_id',1)->orderBy('created_at', 'desc')->paginate(3);
        $Oils =Product::select('*')->where('category_id',2)->orderBy('created_at', 'desc')->paginate(3);
        $Pasta =Product::select('*')->where('category_id',3)->orderBy('created_at', 'desc')->paginate(3);
       $offers =Product::select('*')->orderBy('created_at', 'desc')->paginate(8);
    //    $Oils =Product::select('*')
    //         ->where('category_id',2)
    //         ->get();
    //    ;

 

        // return view('public.index',['offers'=>$offers],['product'=>$product]);
        return view('public.index')
        ->with(['offers'=>$offers])
        ->with(['Nuts'=>$Nuts])
        ->with(['Oils'=>$Oils])
        ->with(['Pasta'=>$Pasta]);
    }

    public function product(Request $request,$id){

        $product = Product::findOrfail($id); 

        return view('public.product',['products'=>$product]);
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
    public function insertdata(){
       
        $category = Category::select('*')->get();



        return view('public.insertdata',['category'=>$category]);
    }
    public function store(Request $request){
    //    $data           = $request->only(['name', 'price', 'description','new_image','category_id']);
    //    dd($data);
       $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' =>  'required|integer|exists:categories,id',
        ]);
     
        $user_id   = Auth::user()->id;
        $data = $request->all();
        
     
        if($request->file('new_image')){
            $imageName = $request->file('new_image')->getClientOriginalName();

            request()->new_image->move(public_path('upload'), $imageName);

            $data['image']=$imageName;
         
        }
        $data['user_id'] = $user_id;
        
        $product       = Product::create($data);
        if ($product) {

            return redirect(route('app.index'));
        }
        
   
    }
}
