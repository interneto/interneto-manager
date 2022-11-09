<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Tag;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function create(Request $request) {
        $validated = $request->validate([
            "name" => "required|max:255|unique:name",
            "link" => "required|max:255|unique:link",
            "category" => "max:255",
            "tag" => "max:255",
            "type" => "string"
        ]);

        $tagName = $validated['tag'];
        $tag = Tag::where('name', '=', $tagName) -> first();

        if ($tag == null) {
            $tag = Tag::create(['name'=>$tagName]);
        }
        $validated['id_tag'] = $tag->id;

        Web::create($validated);

        return redirect(route('/front-page'));
    }
}
