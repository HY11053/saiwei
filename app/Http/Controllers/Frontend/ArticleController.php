<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Http\Controllers\Controller;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function Article(){
      $articles=Archive::orderBy('id','desc')->get(['body','id']);
        foreach ($articles as $article) {
            preg_match_all("/src=[\"|'|\s]([^\"|^\'|^\s]*?)/isU",$article->body,$img_array);
            $img_arrays = array_unique($img_array[1]);
            foreach ($img_arrays as $img_array) {
                Storage::append('imgurl.txt',$img_array);
            }
      }
    }
}
