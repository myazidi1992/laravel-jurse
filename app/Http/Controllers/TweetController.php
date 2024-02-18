<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function getall()
       {
           $tweets = Tweet::all();
           return view('tweets', ['tweets' => $tweets]);
       }
       public function delete($id)
       {
           $tweet = tweet::find($id);
   
           if (!$tweet) {
               return redirect()->route('tweets')->with('error', 'tweet not found.');
           }
   
           $tweet->delete();
   
           return redirect()->route('tweets')->with('success', 'tweet deleted successfully.');
       }

       public function add(Request $request)
       {
           $validatedData = $request->validate([
               'link' => 'required|string|max:255',
               'datetweet' => 'required|date|max:255',
           ]);
       
           tweet::create($validatedData);
       
           return redirect()->route('tweets')->with('success', 'tweet added successfully.');
       }
       
   }
