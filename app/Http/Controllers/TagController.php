<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function new_form(Request $request) {
        return view(
            'user-app.new-tag-form',
            ['tags'=>auth()->user()->tags]
        );
    }

    public function create(Request $request) {
        $validated = $request->validate([
            "name" => "required|max::255|unique:tags,name",
        ]);

        //$validated['slug'] = Str::slug($validated["name"]);

        //Tag::create($validated);

        return redirect(route('user-app.all-bookmarks'));
    }

    /*
    public function edit(Tag $tag) {

        $tag = Tag::findOrFail($tag->id);

        return view(
            'user-app.forms.edit-link',
            [
                'tag' => $tag,
            ]
        );
    }

    public function update(Request $request, Tag $tag) {
        $validated = $request->validate([
            "name" => "required|max:255|unique:directories,name",
            "tag_id" => "max:255",
        ]);

        $tag->update($validated);

        return view('user-app.all-bookmarks');
    }

    public function delete(Tag $tag) {
        $tag->delete();

        return view('user-app.all-bookmarks');
    }
    */
}
