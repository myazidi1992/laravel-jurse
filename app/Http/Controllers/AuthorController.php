<?php
namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Countrie; 
use App\Models\Specialsession;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAll()
    {
        $authors = Author::all();
        $countries = Countrie::all(); 
        $specialsessions = Specialsession::all();

        return view('authors', ['authors' => $authors, 'countries' => $countries, 'specialsessions' => $specialsessions]);
    }

    public function delete($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return redirect()->route('authors')->with('error', 'Author not found.');
        }

        $author->delete();

        return redirect()->route('authors')->with('success', 'Author deleted successfully.');
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'organism' => 'required|string|max:255',
            'countrie_id' => 'required|exists:countries,id',
            'specialsession_id' => 'required|exists:specialsessions,id',
        ]);

        $author = new Author([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'organism' => $validatedData['organism'],
        ]);

        $countrie = Countrie::find($validatedData['countrie_id']);
        $specialsession = Specialsession::find($validatedData['specialsession_id']);

        $author->countrie()->associate($countrie);
        $author->specialsession()->associate($specialsession);

        $author->save();

        return redirect()->route('authors')->with('success', 'Author added successfully.');
    }
}
