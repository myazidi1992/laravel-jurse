<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getall()
       {
           $videos = Video::all();
           return view('videos', ['videos' => $videos]);
       }
       public function delete($id)
       {
           $video = video::find($id);
   
           if (!$video) {
               return redirect()->route('videos')->with('error', 'video not found.');
           }
   
           $video->delete();
   
           return redirect()->route('videos')->with('success', 'video deleted successfully.');
       }

       public function add(Request $request)
       {
           $validatedData = $request->validate([
               'vpath' => 'required|string|max:255',
               'title' => 'required|string|max:255',
               'order' => 'nullable|integer|max:255',
           ]);
       
           video::create($validatedData);
       
           return redirect()->route('videos')->with('success', 'video added successfully.');
       }
   }
