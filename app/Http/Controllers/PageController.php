<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getall()
       {
           $pages = Page::all();
           return view('pages', ['pages' => $pages]);
       }
       public function delete($id)
       {
           $page = page::find($id);
   
           if (!$page) {
               return redirect()->route('pages')->with('error', 'page not found.');
           }
   
           $page->delete();
   
           return redirect()->route('pages')->with('success', 'page deleted successfully.');
       }


       public function add(Request $request)
       {
           $validatedData = $request->validate([
               'name' => 'required|string|max:255',
           ]);
       
           page::create($validatedData);
       
           return redirect()->route('pages')->with('success', 'page added successfully.');
       }
   
   }
