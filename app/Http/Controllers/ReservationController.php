<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::all();
        //var_dump ($reservation);  
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
        /*$reserva = new Reservation();
        $reserva->name=$request->nombre;
        $reserva->surname=$request->apellido;
        $reserva->email=$request->email;
        $reserva->telephone=$request->telefono;
        $reserva->postalCode=$request->codigoPostal;
        $reserva->checkinDate=$request->fechaEntrada;
        $reserva->checkoutDate=$request->fechaSalida;
        $reserva->numberPeople=$request->numeroPersonas;
        $reserva->numberPets=$request->numeroMascotas;
        $reserva->breakfast=$request->desayuno;
        $reserva->lunch=$request->comida;
        $reserva->dinner=$request->cena;
        $reserva->dataProtection=$request->LGPD;
        $reserva->language=$request->idioma;*/   
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
