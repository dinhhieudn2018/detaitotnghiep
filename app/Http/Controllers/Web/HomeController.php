<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $smartphones = Category::with(['productsByParent' => function($q){
            $q->orderBy('sales','desc')->take(10);
        }])->findOrFail(1);
        $ipad = Category::with(['productsByParent' => function($q){
            $q->orderBy('sales','desc')->take(10);
        }])->findOrFail(2);
        $watch = Category::with(['productsByParent' => function($q){
            $q->orderBy('sales','desc')->take(10);
        }])->findOrFail(3);
        // $accessories = Category::with(['productsByParent' => function($q){
        //     $q->orderBy('sales','desc')->take(10);
        // }])->findOrFail(4);
        $accessories = Product::where('category_id',30)->get();
        $products = [
            $smartphones->productsByParent,
            $ipad->productsByParent,
            $watch->productsByParent
            // $accessories->productsByParent
        ];
        $recently = Product::orderByRaw("RAND()")->limit(3)->get();
        $news = Product::with('imageDetail')->limit(3)->get();
        $new_products = Product::all()->sortByDesc('sales')->take(3);
        $tintuc = DB::table('news')->get();
        return view('pages.home',compact(['products','news', 'new_products','recently','accessories','tintuc']));
    }
  
    public function search(Request $request){
        $key = $request->key;
        $offset = $request->offset;
        $offset = !empty($offset) ? $offset + 1  : 0 ;
        $total = Product::where('name', 'like', '%' . $key . '%')->count();
        $result = Product::where('name', 'like', '%' . $key . '%')
                           ->orderBy('created_at','desc')
                           ->offset($offset)
                           ->take(5)
                           ->get();
        $view = view('pages.layouts.search',compact('result'))->render();
        return response()->json(['view' => $view,'total' => $total], 200);
    }   

    public function doitra(){
        return view('pages.doitra');
    }
    public function tintuc($id){
        $chitiet_news = DB::table('news')->where('id',$id)->first();
       
        return view('pages.news',compact('chitiet_news'));
    }

}
