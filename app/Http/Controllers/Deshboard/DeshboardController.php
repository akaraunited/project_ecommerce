<?php

namespace App\Http\Controllers\Deshboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeshboardController extends Controller
{

    public function index(){
        return view('deshboard.index');
    }
    public function insert(){
       
        $category = Category::select('*')->get();



        return view('deshboard.listing.create',['category'=>$category]);
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
