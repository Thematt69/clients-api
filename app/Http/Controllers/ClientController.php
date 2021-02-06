<?php

namespace App\Http\Controllers;

use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Client::all();
    }

    /**
     * Display the specified resource.
     *
     * @param String $find
     * @return \Illuminate\Http\Response
     */
    public function show(String $find)
    {
        $clients = Client::where('first', 'LIKE', '%' . $find . '%')
            ->orWhere('last', 'LIKE', '%' . $find . '%')
            ->orWhere('street', 'LIKE', '%' . $find . '%')
            ->orWhere('city', 'LIKE', '%' . $find . '%')
            ->orWhere('zip', 'LIKE', '%' . $find . '%')
            ->get();
            
        if ($clients->count() > 0) {
            return $clients;
        } else {
            return response()->json([], 200);
        }
    }
}
