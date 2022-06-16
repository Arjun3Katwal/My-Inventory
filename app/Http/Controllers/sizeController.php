<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\size;

class sizeController extends Controller
{
    public function create()
    {
        return view('Sizes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required|min:2|max:50|unique:sizes',
        ]);
        size::create([
            'size' => $request->size,
           
        ]);

         return back()->with('success', 'You have successfully updated a post!');

    }

    public function index()
    {

        $sizes = size::OrderBy('created_at', 'DESC')->get();
        $i = 1;
        return view('Sizes.index', compact('sizes', 'i'));
    }

    public function edit($id)
    {
        $size = size::findOrFail($id);
        return view('Sizes.edit', compact('size'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'size' => 'required',
            
        ]);

        $sizes = size::find($id);
        $sizes->size = $request->size;

        $sizes->save();

        return redirect()->route('viewSize')->with([
            'successful_message' => 'updated successfully'
        ]);
    }

    public function delete($id)
    {
        size::find($id)->delete();
        return redirect()->route('viewSize')->with([
            'successful_message' => 'Deleted successfully'
        ]);
    }
}
