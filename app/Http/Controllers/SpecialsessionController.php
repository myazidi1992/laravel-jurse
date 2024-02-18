<?php

namespace App\Http\Controllers;
use App\Models\Specialsession;
use Illuminate\Http\Request;

class SpecialsessionController extends Controller
{
    public function getall()
       {
           $specialsessions = Specialsession::all();
           return view('specialsessions', ['specialsessions' => $specialsessions]);
       }
       public function delete($id)
       {
           $specialsession = specialsession::find($id);
   
           if (!$specialsession) {
               return redirect()->route('specialsessions')->with('error', 'specialsession not found.');
           }
   
           $specialsession->delete();
   
           return redirect()->route('specialsessions')->with('success', 'specialsession deleted successfully.');
       }


       public function add(Request $request)
       {
           $validatedData = $request->validate([
               'title' => 'required|string|max:255',
               'order' => 'required|integer|max:255',
               'description' => 'required|string|max:255',
           ]);
       
           specialsession::create($validatedData);
       
           return redirect()->route('specialsessions')->with('success', 'specialsession added successfully.');
       }
   }
