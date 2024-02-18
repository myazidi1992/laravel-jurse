<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Page;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function getAll()
    {
        $links = Link::all();
        $pages = Page::all(); 

        return view('links', ['links' => $links, 'pages' => $pages]);
    }

    public function delete($id)
    {
        $link = Link::find($id);

        if (!$link) {
            return redirect()->route('links')->with('error', 'Link not found.');
        }

        $link->delete();

        return redirect()->route('links')->with('success', 'Link deleted successfully.');
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'url' => 'required|url',
            'page_id' => 'required|exists:pages,id',
        ]);

        $link = new Link([
            'url' => $validatedData['url'],
        ]);

        $page = Page::find($validatedData['page_id']);
        $link->page()->associate($page);

        $link->save();

        return redirect()->route('links')->with('success', 'Link added successfully.');
    }
}
