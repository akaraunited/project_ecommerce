<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        return view('public.index');
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
