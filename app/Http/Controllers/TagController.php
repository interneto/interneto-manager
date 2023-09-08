<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use App\Models\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function new_form() {
        $directories = Directory::all();
        return view(
            'user-app.forms.new-tag',
            ['tags' => Tag::all(), 'directories' => $directories]
        );
    }
    

    public function create(Request $request) {
        $validated = $request->validate([
            // id autoincremental
            "name" => "required|max:255|unique:tags,name",
        ]);        

        //$validated['slug'] = Str::slug($validated["name"]);
        $validated['id'] = auth()->user()->id;
        
        Tag::create($validated);

        return redirect(route('new-tag'));
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
            "id" => "nullable|integer|exists:tags,id",
            "name" => "required|max:255|unique:tags,name",
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
