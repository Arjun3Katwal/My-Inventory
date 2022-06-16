<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
class brandController extends Controller
{

    public function create()
    {
        return view('Brand.create');
    }

    public function view()
    {

        $brand = brand::OrderBy('created_at', 'DESC')->get();
        return view('Brand.brand', compact('brand'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50|unique:brands',
        ]);
        brand::create([
            'name' => $request->name,
        ]);

         return back()->with('success', 'You have successfully updated a post!');

    }

    public function edit($id)
    {
        $bro = brand::findOrFail($id);
        return view('brand.edit', compact('bro'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $brand = brand::find($id);
        $brand->name = $request->name;

        $brand->save();

        return redirect()->route('viewBrand')->with([
            'successful_message' => 'updated successfully'
        ]);
    }

    public function delete($id)
    {
        brand::find($id)->delete();
        return redirect()->route('viewBrand')->with([
            'successful_message' => 'Deleted successfully'
        ]);
    }
}
