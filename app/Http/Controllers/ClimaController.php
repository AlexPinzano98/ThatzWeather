<?php

namespace App\Http\Controllers;

use App\Models\Clima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function buscarTemperaturas(Request $request)
    {
        $codigoPostal=$request->input('codpos');

        // Para consultar las próximas temperaturas necesitamos saber la lat y long
        // Buscamos en API weather estos datos mediante el código postal y los guardamos
        //http://api.openweathermap.org/data/2.5/weather?zip=08901,es&units=metric&appid=b144968b1a451e15df6d25a9d93a4357
        $data = file_get_contents("http://api.openweathermap.org/data/2.5/weather?zip=".$codigoPostal.",es&units=metric&appid=b144968b1a451e15df6d25a9d93a4357");
        $place = json_decode($data, true);

        // print_r($place);
        $lugar = $place['name'];
        $lat = $place['coord']['lat'];
        $lon = $place['coord']['lon'];
        // Ahora consultamos las temperaturas (la API devuelve la actual, las próximas 48 horas (0-47) y los próximos 7 dias(0-7))
       // https://api.openweathermap.org/data/2.5/onecall?lat=41.4301&lon=2.1925&exclude=minutely&units=metric&appid=b144968b1a451e15df6d25a9d93a4357
        $dato = file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=".$lat."&lon=".$lon."&exclude=minutely&units=metric&lang=es&appid=b144968b1a451e15df6d25a9d93a4357");
        $temps = json_decode($dato, true);

        // print_r($temps);

        // Una vez obtenidos estos datos los enviamos a la vista
        // print_r($el);
        return view('datos',compact('temps'),compact('codigoPostal'));
    }

    public function buscarTemperaturasResults(Request $request)
    {
        $codigoPostal=$request->input('codpos');

        // Para consultar las próximas temperaturas necesitamos saber la lat y long
        // Buscamos en API weather estos datos mediante el código postal y los guardamos
        //http://api.openweathermap.org/data/2.5/weather?zip=08901,es&units=metric&appid=b144968b1a451e15df6d25a9d93a4357
        $data = file_get_contents("http://api.openweathermap.org/data/2.5/weather?zip=".$codigoPostal.",es&units=metric&appid=b144968b1a451e15df6d25a9d93a4357");
        $place = json_decode($data, true);

        // print_r($place);
        $lugar = $place['name'];
        $lat = $place['coord']['lat'];
        $lon = $place['coord']['lon'];
        // Ahora consultamos las temperaturas (la API devuelve la actual, las próximas 48 horas (0-47) y los próximos 7 dias(0-7))
       // https://api.openweathermap.org/data/2.5/onecall?lat=41.4301&lon=2.1925&exclude=minutely&units=metric&appid=b144968b1a451e15df6d25a9d93a4357
        $dato = file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=".$lat."&lon=".$lon."&exclude=minutely&units=metric&lang=es&appid=b144968b1a451e15df6d25a9d93a4357");
        $temps = json_decode($dato, true);

        // print_r($temps);

        // Una vez obtenidos estos datos los enviamos a la vista
        // print_r($el);
        return redirect('datos',compact('temps'),compact('codigoPostal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clima  $clima
     * @return \Illuminate\Http\Response
     */
    public function show(Clima $clima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clima  $clima
     * @return \Illuminate\Http\Response
     */
    public function edit(Clima $clima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clima  $clima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clima $clima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clima  $clima
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clima $clima)
    {
        //
    }
}
