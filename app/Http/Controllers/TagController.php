<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function new_form() {
        return view(
            'user-app.forms.new-tag',
            ['tags'=>Tag::all()]
        );
    }

    public function create(Request $request) {
        $validated = $request->validate([
            "tag_id" => "max:255",
            "name" => "required|max::255|unique:tags,name",
        ]);

        //$validated['slug'] = Str::slug($validated["name"]);
        $validated['user_id'] = auth()->user()->id;
        Tag::create($validated);

        return redirect(route('new-tag'));
    }
    
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
}
