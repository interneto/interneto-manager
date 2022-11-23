<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    /*
    public function new_form(Request $request)
    {
        return view('admin.new-product-form', [
        ]);
    }
    */

    public function store(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "user_id" => "max:255",
            "name" => "required|max:255|unique:directories,name",
            "directory_id" => "max:255",
        ]);

        Directory::create($validated);

        return redirect(route('all-bookmarks'));
    }

    public function create() {
        return view('user-app.forms.new-directory', ['directories'=>auth()->user()->directories]);
    }
}
