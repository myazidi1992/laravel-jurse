<?php

namespace App\Http\Controllers;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function getall()
       {
           $sponsors = Sponsor::all();
           return view('sponsors', ['sponsors' => $sponsors]);
       }
       public function delete($id)
       {
           $sponsor = sponsor::find($id);
   
           if (!$sponsor) {
               return redirect()->route('sponsors')->with('error', 'sponsor not found.');
           }
   
           $sponsor->delete();
   
           return redirect()->route('sponsors')->with('success', 'sponsor deleted successfully.');
       }
 

       public function add(Request $request)
       {
           $validatedData = $request->validate([
               'alt' => 'required|string|max:255',
               'src' => 'required|string|max:255',
               'order' => 'nullable|integer|max:255',
           ]);
       
           sponsor::create($validatedData);
       
           return redirect()->route('sponsors')->with('success', 'sponsor added successfully.');
       }
   }
