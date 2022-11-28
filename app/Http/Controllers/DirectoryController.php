<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function new_form() {
        return view(
            'user-app.forms.new-directory', 
            ['directories'=>auth()->user()->directories]
        );
    }

    public function create(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "name" => "required|max:255|unique:directories,name",
            "directory_id" => "max:255",
        ]);

        $validated['user_id'] = auth()->user()->id;

        Directory::create($validated);

        return redirect(route('bookmarks'));
    }

    public function edit(Directory $directory) {

        $directory = Directory::findOrFail($directory->id);

        return view(
            'user-app.forms.edit-link',
            [
                'directory' => $directory,
            ]
        );
    }

    public function update(Request $request, Directory $directory) {
        $validated = $request->validate([
            "name" => "required|max:255|unique:directories,name",
            "directory_id" => "max:255",
        ]);

        $directory->update($validated);

        return view('user-app.bookmarks');
    }

    public function delete(Directory $directory) {
        $directory->delete();

        return view('user-app.bookmarks');
    }
}
