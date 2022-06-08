<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function home(){
        return view("home");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*Book::create($request->all());*/

        $request->validate([
           'name' => 'required|min:10',
           'type' => 'required',
            'photo' => 'required',
            'language' => 'required',
            'summary' => 'required|min:10',
            'about' => 'required|min:150',
        ]);

        Book::create([
            "name" => $request->name,
            "type" => $request->type,
            "photo" => $request->photo,
            "language" => $request->language,
            "summary" => $request->summary,
            "about"  => $request->about
        ]);


        return  redirect()->route('index');
    }
/*name: "Books",
type: "horor",
photo: "img1.png",
about:*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('show',compact('book'));
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
        return view('edit',compact('book'));
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
        $book = Book::find($id);
        $book->name = $request->name;
        $book->type = $request->type;
        $book->photo= $request->photo;
        $book->language = $request->language;
        $book->summary=$request->summary;
        $book->about = $request->about;
        $book->update();

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('index');
    }
}
