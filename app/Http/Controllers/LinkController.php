<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Tag;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function new_form(Request $request)
    {
        return view(
            'user-app.forms.new-link', 
            ["directories" => auth()->user()->directories,]
        );
    }

    public function create(Request $request) {
        //dd($request);
        $validated = $request->validate([
            "name" => "required|max:255",
            "description" => "max:1000",
            "uri" => "required|max:255|unique:links,uri",
            "directory_id" => "max:255",
            "tag" => "max:255",
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
        ]);

        return redirect(route('new-link'));
    }

    public function edit(Link $link) {

        $link = Link::findOrFail($link->id);

        return view(
            'user-app.forms.edit-link',
            [
                'link' => $link,
            ]
        );
    }

    public function update(Request $request, Link $link) {
        $validated = $request->validate([
            "name" => "required|max:255|unique:directories,name",
            "link_id" => "max:255",
        ]);

        $link->update($validated);

        return view('user-app.bookmarks');
    }

    public function delete($id) {
        $link = Link::find($id);
        $link->delete();
        session()->flash('message', 'Link has been deleted successfully!');
        return view('user-app.bookmarks');
        // return redirect()->back();
    }

    /*
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->get()->firstOrFail();
        $related_products = $product
            ->category
            ->products
            ->where('id', '!=', $product->id)
            ->shuffle()
            ->take(3);
        return view('public.single-product', [
            "product" => $product,
            "related_products" => $related_products,
        ]);
    }

    public function list(Request $request)
    {
        return view('admin.product-list', [
            "products" => Product::all(),
        ]);
    }

    public function add_to_cart($id)
    {
        $cart = get_cart();

        $cart->products()->attach($id, ["units" => 1]);

        $cart->total_price += Product::find($id)->price;
        $cart->save();

        return redirect(route('store'));
    }
    */
}
