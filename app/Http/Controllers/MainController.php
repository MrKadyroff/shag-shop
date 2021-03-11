<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
    	return view('index');
    } 
    public function about(){
    	return view('about');
    }
    public function categoryies(){
    	$categoryies = Category::get(); 
    	return view('categoryies',compact('categoryies'));
    }

    public function category($code) {
    	$category = Category::where('code',$code)->first();
    	// dd($CategoryObject);
    	return view('category',compact('category'));
    	
    }
    public function product($product = null){
    	return view('product' , ['product' => $product]);
    }
    

}
