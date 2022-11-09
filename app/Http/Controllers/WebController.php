<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Tag;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function create(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "name" => "required|max:255|unique:webs,name",
            "description" => "",
            "link" => "required|max:255",
            "directory" => "max:255",
            "tag" => "max:255",
            "type" => "string|max:255"
        ]);

        $tagName = $validated['tag'];
        $tag = Tag::where('name', '=', $tagName) -> first();

        if ($tag == null) {
            $tag = Tag::create(['name'=>$tagName]);
        }
        $validated['id_tag'] = $tag->id;

        //

        Web::create([
            "link" => $validated['link'],
            "id_directory" => $validated['id_directory'],
            "id_tag" => $validated['id_tag'],
            "type" => $validated['type'],
        ]);

        return redirect(route('/front-page'));
    }
}
