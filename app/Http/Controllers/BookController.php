<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $books = Book::all();

        // return view('books.index', compact('books'));

        return view('books.index', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create', [
            'authors' => Author::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $authors = Author::find(request('authors'));

        // $book = Book::create(request(['name', 'isbn', 'description']));

        $book = Book::create([
            'name' => request('name'),
            'isbn' => request('isbn'),
            'description' => request('description'),
        ]);

        $book->authors()->attach($authors);

        // dd($request->all());

        // dd(request('authors'));

        // dd($authors->toArray());


        // dd($request->all());

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        $authors = Author::all();

        return view('books.edit', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $book = Book::find($id); // 1st step: [Find Existing Book ID]

        $authors = $book->authors; // 2nd step: [Find Existing Authors]

        $book->authors()->detach($authors); // 3rd step: [Detach Existing Authors]

        $book->update(request(['name', 'isbn', 'description'])); // 4th step: [Update new book data]

        $authors = Author::find(request()->input('authors')); // 5th step: [Find new Authors]

        $book->authors()->attach($authors); // 6th step: [Attach new Authors]

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
