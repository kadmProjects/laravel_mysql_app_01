<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = new Movies();
        $movies = $movies->all();
        // $movies = Movies::all();

        return view('home.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movies();
        $movie->title = $request->movie_name;
        $movie->director = $request->director;
        $movie->main_actor = $request->main_actor;
        $movie->production_company = $request->company;
        $movie->released_date = $request->released_date;
        $movie->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movies::findOrFail($id);
        return view('home.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movies::findOrFail($id);
        return view('home.edit', ['movie' => $movie]);
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
        $movie = Movies::findOrFail($id);
        $movie->title = $request->movie_name;
        $movie->director = $request->director;
        $movie->main_actor = $request->main_actor;
        $movie->production_company = $request->company;
        $movie->released_date = $request->released_date;
        $movie->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $movie = Movies::findOrFail($id);
        // $movie->delete();
        Movies::findOrFail($id)->delete();
        return redirect('/');
    }
}
