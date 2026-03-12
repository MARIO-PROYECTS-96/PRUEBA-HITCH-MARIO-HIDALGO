<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BonusController extends Controller
{
    public function index()
    {
        try {
            $response = Http::timeout(10)->get('https://jsonplaceholder.typicode.com/users');

            if ($response->failed()) {
                return view('payments.bonus', ['users' => []])
                    ->with('alert-error', 'No se pudo obtener los datos de la API externa.');
            }

            $users = $response->json();
        } catch (\Exception $e) {
            return view('payments.bonus', ['users' => []])
                ->with('alert-error', 'Error al conectar con la API externa.');
        }

        return view('payments.bonus', compact('users'));
    }
}
