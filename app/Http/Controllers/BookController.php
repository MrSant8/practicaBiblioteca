<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
     $books = Book::all();
     return view('book.index', ['books' => $books]);
    }
    
    public function show($isbn)
    {

        $book = Book::where('isbn', $isbn)->first();
        if ($book == null) {
            return redirect()->route('books.index');
        }
        return view('book.show', ['book' => $book]);
    }

    public function create()
    {
        return view('book.create');

    }
    
    public function store(Request $request){

        $book = new Book();
        $book->isbn = $request->input('isbn');
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->publish_date = $request->input('publish_date');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->save();
        
        return redirect()->route('books.show', ['isbn' => $book->isbn]);
    
    }
    

    public function edit($isbn) {
        $book = Book::where('isbn', $isbn)->firstOrFail();
        return view('book.edit', compact('book'));
    }
    

    
        public function update(Request $request, $id){

            $book = Book::find($id);
        
            if (!$book) {
            return redirect()->back()->withErrors(['El libro no existe.']);
            }
        
            $book->isbn = $request->isbn;
            $book->author = $request->author;
            $book->publish_date = $request->publish_date;
            $book->description = $request->description;
            $book->price = $request->price;
        
            $book->save();
        
            return redirect()->route('books.index');
        
        }

       
        public function destroy($id)
        {
            $book = Book::find($id);
            if (!$book) {
                return redirect()->back()->with('error', 'El libro no existe');
            }
            $book->delete();
            return redirect()->route('books.index')->with('success', 'Libro eliminado con éxito');
        }
       
       
       


    }
    
    
    


