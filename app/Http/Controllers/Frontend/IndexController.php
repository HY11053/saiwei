<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $newslists=Archive::where('typeid',11)->orderBy('id','desc')->take(7)->get();
        $meitinewslists=Archive::where('typeid',10)->orderBy('id','desc')->take(7)->get();
        $jmnews=Archive::whereIn('typeid',Arctype::where('reid',35)->pluck('id'))->orderBy('id','desc')->take(7)->get();
        $touzinews=Archive::where('typeid',49)->orderBy('id','desc')->take(7)->get();
        return view('frontend.index',compact('newslists','meitinewslists','jmnews','touzinews'));
    }
}
