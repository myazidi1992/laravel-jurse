<?php

namespace App\Http\Controllers;
use App\Models\Keynotespeaker;
use Illuminate\Http\Request;

class KeynotespeakerController extends Controller
{
        public function getall()
    {
        $keynotespeakers = Keynotespeaker::all();
        return view('keynotespeakers', ['keynotespeakers' => $keynotespeakers]);
    }

    public function delete($id)
    {
        $keynotespeaker = Keynotespeaker::find($id);

        if (!$keynotespeaker) {
            return redirect()->route('keynotespeakers')->with('error', 'Keynotespeaker not found.');
        }

        $keynotespeaker->delete();

        return redirect()->route('keynotespeakers')->with('success', 'Keynotespeaker deleted successfully.');
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'website' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        Keynotespeaker::create($validatedData);
    
        return redirect()->route('keynotespeakers')->with('success', 'Keynotespeaker added successfully.');
    }
    
    
    
    
}
