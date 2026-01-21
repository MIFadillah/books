<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller {
    public function index() {
        return Book::all();
    }

    public function store(Request $request) {
        return Book::create($request->all());
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update($request->all());
        return $book;
    }

    public function destroy($id) {
        Book::destroy($id);
        return response()->json(['message'=>'Deleted']);
    }
}

