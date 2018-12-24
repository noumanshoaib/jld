<?php

namespace App\Http\Controllers;
use App\article;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class articleController extends Controller
{
    public function article_view()
    {
        $id = Auth::user()->id;
        $a  = article::where('user_id',$id)->get();
        return view("article_list",compact('a'));
    }

    public function create_article_view()
    {

        return view("create_article");
    }

    public function create_article(Request $request)
    {
        $a  = new article();
        $a->user_id = Auth::user()->id;
        $a->title = $request->input("title");
        $a->description = $request->input("description");

        $a->save();

        return redirect("article");
    }

    public function delete_article($id)
    {
        article::find($id)->delete();

        return redirect("article");
    }

    public function update_article_view($id)
    {
        $a = article::find($id);
        return view("update_article",compact("id","a"));
    }

    public function update_article_post(Request $request,$id)
    {
       
        $a  = article::find($id);
        $a->user_id = Auth::user()->id;
        $a->title = $request->input("title");
        $a->description = $request->input("description");

        $a->save();

        return redirect("article");
    }
}
