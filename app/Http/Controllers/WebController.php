<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Tag;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function new_form(Request $request)
    {
        return view('admin.new-product-form', [
        ]);
    }

    public function create(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "name" => "required|max:255|unique:webs,name",
            "description" => "",
            "link" => "required|max:255",
            "directory-id" => "max:255",
            "tag" => "max:255",
            "type" => "string|max:255"
        ]);

        $tagName = $validated['tag'];
        $tag = Tag::where('name', '=', $tagName) -> first();

        if ($tag == null) {
            $tag = Tag::create(['name'=>$tagName]);
        }
        $validated['id_tag'] = $tag->id;

        Web::create([
            "name" => $validated['name'],
            "link" => $validated['link'],
            "directory_id" => $validated['directory-id'],
            "id_tag" => $validated['id_tag'],
            "type" => $validated['type'],
        ]);

        return redirect(route('front-page'));
    }

}
