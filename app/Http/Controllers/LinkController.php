<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Tag;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /*
    public function new_form(Request $request)
    {
        return view('admin.new-link-form', [
        ]);
    }
    */

    public function create(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "name" => "required|max:255",
            "description" => "max:1000",
            "uri" => "required|max:255|unique:links,uri",
            "directory_id" => "max:255",
            "tag" => "max:255",
            //"type" => "string|max:255",
            //"rating" => "int",
        ]);

        $tagName = $validated['tag'];
        $tag = Tag::where('name', '=', $tagName) -> first();

        if ($tag == null) {
            $tag = Tag::create(['name'=>$tagName]);
        }
        $validated['tag_id'] = $tag->id;

        Link::create([
            "name" => $validated['name'],
            "uri" => $validated['uri'],
            "directory_id" => $validated['directory_id'],
            "tag_id" => $validated['tag_id'],
            //"type" => $validated['type'],
        ]);

        return redirect(route('new-link'));
    }
}
