<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct()
{
    $this->middleware('auth')->except(['create']);
}

    public function index()
    {
        $reservation = Reservation::all();
        
        return view('Reservation/reservation', ['reservation' => $reservation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reservation::create($request->all()); 
        return redirect('reservation/create');
        }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $id)
    {
        $reservation = Reservation::find($id);
      //  $client=$reservation->find($id);

        //$users = $reservation->intersect(Reservation::whereIn('email', $email)->get());
        return view('Reservation/reservation', ['reservation' => $reservation]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('Reservation.edit', ['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
            $reservation->update($request->all());
            $reservation->setBreakfastNull($request->breakfast);
            $reservation->setLunchNull($request->lunch);
            $reservation->setDinnerNull($request->dinner);
            $reservation->setValidatedNull($request->validated);
            return redirect('reservation');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect('reservation');
    }
}
