<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function new_form(Request $request) {
        return view(
            'user-app.forms.new-tag',
            ['tags'=>auth()->user()->tags]
        );
    }

    public function create(Request $request) {
        $validated = $request->validate([
            "name" => "required|max::255|unique:tags,name",
        ]);

        //$validated['slug'] = Str::slug($validated["name"]);
        //Tag::create($validated);

        return redirect(route('user-app.bookmarks'));
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

        return view('user-app.bookmarks');
    }

    public function delete($id) {
        $tag = Tag::find($id);
        $tag->delete();
        session()->flash('message', 'Tag has been deleted successfully !');
        return view('user-app.bookmarks');
    }
    */
}
