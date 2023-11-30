<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Book;



class bookController extends Controller
{
    public function index(): View
    {
        //get posts
        $books = Book::all();

        //render view with posts
        return view('books.index', compact('books'));
    }

    public function create(): View
    {
        return view('books.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */

    public function store(Request $request): RedirectResponse
    {
        //validate form
        // $this->validate($request, [
        //     'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'title'     => 'required|min:5',
        //     'content'   => 'required|min:10'
        // ]);

        //upload image
        $cover = $request->file('cover');
        $cover->storeAs('public/books', $cover->hashName());

        //create post
        Book::create([
            'cover'         => $cover->hashName(),
            'title'         => $request->title,
            'author'        => $request->author,
            'description'   => $request->description,
            'publisher'     => $request->publisher,
            'published'     => $request->published,
            'pages'         => $request->pages,
            'isbn'          => $request->isbn,
            'stock'         => $request->stock
        ]);

        //redirect to index
        return redirect()->route('books.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
