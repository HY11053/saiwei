<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Arctype;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ListArticleController extends Controller
{
    public function CategoryLists(Request $request){
        //判断当前栏目是否存在
        $typeid=Arctype::where('real_path',preg_replace('/page\/\/[0-9]+/','',$request->path()))->value('id')?:abort(404);
        //当前栏目信息缓存
        $thistypeinfo=Cache::remember('thistypeinfos_'.$typeid,  config('app.cachetime')+rand(60,60*24), function() use($typeid){
            return  Arctype::where('id',$typeid)->first();
        });
        if ($thistypeinfo->mid==0){
            return view('frontend.list_article');
        }elseif ($thistypeinfo->mid==1){
            return view('frontend.index_list_article');
        }elseif ($thistypeinfo->mid==2){
            return view('frontend.shebei_list_article');
        }else{
            return view('frontend.ask_list_article');
        }

    }
    public function IndexArticle(){

    }
}
