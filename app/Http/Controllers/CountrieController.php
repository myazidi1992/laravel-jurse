<?php

namespace App\Http\Controllers;
use App\Models\Countrie;
use Illuminate\Http\Request;

class CountrieController extends Controller
{
    public function getall()
    {
        $countries = Countrie::all();
        return view('countries', ['countries' => $countries]);
    }
    public function delete($id)
    {
        $countrie = countrie::find($id);

        if (!$countrie) {
            return redirect()->route('countries')->with('error', 'countrie not found.');
        }

        $countrie->delete();

        return redirect()->route('countries')->with('success', 'countrie deleted successfully.');
    }
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        countrie::create($validatedData);
    
        return redirect()->route('countries')->with('success', 'countrie added successfully.');
    }

}
