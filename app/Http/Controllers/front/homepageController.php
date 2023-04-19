<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Category;
use App\Models\Article;

class homepageController extends Controller
{
    public function index () {
        $data["articles"] = Article::orderBy("created_at","DESC")->get();
        $data["categories"] = Category::query()->get();
        return view("front.homepage",$data);
    }

    public function single ($category,$slug) {
        $categorys = Category::where("slug",$category)->first() ?? abort(404);
        $article = Article::where("slug",$slug)->where("category_id",$categorys->id)->first() ?? abort(404);
        $article->increment('hit');
        if(isset($article) && $article) {
            $data["article"] = $article;
        }
        $data["categories"] = Category::query()->get();
        return view("front.single", $data);
    }
}
