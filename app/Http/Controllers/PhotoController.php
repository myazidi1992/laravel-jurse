<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function getall()
       {
           $photos = Photo::all();
           return view('photos', ['photos' => $photos]);
       }
       public function delete($id)
       {
           $photo = photo::find($id);
   
           if (!$photo) {
               return redirect()->route('photos')->with('error', 'photo not found.');
           }
   
           $photo->delete();
   
           return redirect()->route('photos')->with('success', 'photo deleted successfully.');
       }


       public function add(Request $request)
       {
           $validatedData = $request->validate([
               'vpath' => 'required|string|max:255',
               'alt' => 'required|string|max:255',
               'title' => 'required|string|max:255',
               'order' => 'nullable|integer|max:255',
           ]);
       
           photo::create($validatedData);
       
           return redirect()->route('photos')->with('success', 'photo added successfully.');
       }
   }
