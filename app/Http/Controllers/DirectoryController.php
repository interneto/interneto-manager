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

    public function create(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "user-id" => "max:255",
            "name" => "required|max:255|unique:links,name",
            "directory-id" => "max:255",
        ]);

        Directory::create([
            "user_id" => $validated['user-id'],
            "name" => $validated['name'],
            "directory_id" => $validated['directory-id'],
        ]);

        return redirect(route('front-page'));
    }
}
