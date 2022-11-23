<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Tag;
use App\Http\Controllers\Str;
use Illuminate\Http\Request;


class TagController extends Controller
{
    public function new_form(Request $request) {
        return view('user-app.new-tag-form');
    }

    public function create(Request $request) {
        $validated = $request->validate([
            "name" => "required|max::255|unique:tags,name",
        ]);

        $validated["slug"] = Str::slug($validated["name"]);

        Tag::create($validated);

        return redirect(route('user-app.all-bookmarks'));
    }
}
