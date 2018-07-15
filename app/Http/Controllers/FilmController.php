<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films=DB::table('films')
                ->join('countries', 'films.country_id', '=', 'countries.id')
                ->select('films.id as id', 'films.name as name', 'films.description as description', 'films.ticket_price as ticket_price', 'films.release_date as release_date', 'countries.name as country_name')
                ->get();
        return view('films', compact('films'));
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $films=DB::table('films')
                ->join('countries', 'films.country_id', '=', 'countries.id')
                ->select('films.id as id', 'films.name as name', 'films.description as description', 'films.ticket_price as ticket_price', 'films.release_date as release_date', 'countries.name as country_name')
                ->get();
        return view('list', compact('films'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = \App\Country::pluck('name', 'id')->toArray();
        return view('create', compact('countries'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $film= new \App\Film;
        $film->name=$request->get('name');
        $film->description=$request->get('description');
        $film->ticket_price=$request->get('ticket_price');
        $date=date_create($request->get('release_date'));
        // $format = date_format($date,"Y-m-d");
        $film->release_date = date_format($date,"Y-m-d");
        $film->country_id = $request->get('country_id');
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/storage/images/', $name);
            $film->photo=$name;
        }
        $film->save();
        
        return redirect('films/list')->with('success', 'Film has been added');
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
        //
        $film = \App\Film::find($id);
        $countries = \App\Country::pluck('name', 'id')->toArray();
        return view('edit',compact('film','countries','id'));
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
        //
        $film= \App\Film::find($id);
        $film->name=$request->get('name');
        $film->description=$request->get('description');
        $film->ticket_price=$request->get('ticket_price');
        $date=date_create($request->get('release_date'));
        // $format = date_format($date,"Y-m-d");
        $film->release_date = date_format($date,"Y-m-d");
        $film->country_id = $request->get('country_id');
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/storage/images/', $name);
            $film->photo=$name;
        }
        $film->save();
        return redirect('films/list')->with('success', 'Film has been updated');
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
