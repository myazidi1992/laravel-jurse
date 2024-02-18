<?php

namespace App\Http\Controllers;
use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function getall()
       {
           $organizers = Organizer::all();
           return view('organizers', ['organizers' => $organizers]);
       }
       public function delete($id)
       {
           $organizer = organizer::find($id);
   
           if (!$organizer) {
               return redirect()->route('organizers')->with('error', 'organizer not found.');
           }
   
           $organizer->delete();
   
           return redirect()->route('organizers')->with('success', 'organizer deleted successfully.');
       }

       public function add(Request $request)
       {
           $validatedData = $request->validate([
               'src' => 'required|string|max:255',
               'alt' => 'required|string|max:255',
               'order' => 'nullable|integer|max:255',
           ]);
       
           organizer::create($validatedData);
       
           return redirect()->route('organizers')->with('success', 'organizer added successfully.');
       }
   }
