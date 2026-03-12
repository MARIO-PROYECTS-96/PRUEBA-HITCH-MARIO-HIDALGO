<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.list', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
        ]);

        try {
            Payment::create([
                'description' => $request->description,
                'price' => $request->price,
            ]);

            return redirect()->route('payments')->with('alert-success', 'Pago creado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('payments-create')->with('alert-error', 'Ocurrió un error al crear el pago.');
        }
    }

    public function edit($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payments')->with('alert-error', 'Pago no encontrado.');
        }

        return view('payments.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
        ]);

        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payments')->with('alert-error', 'Pago no encontrado.');
        }

        try {
            $payment->update([
                'description' => $request->description,
                'price' => $request->price,
            ]);

            return redirect()->route('payments')->with('alert-success', 'Pago actualizado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('payments-edit', $id)->with('alert-error', 'Ocurrió un error al actualizar el pago.');
        }
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return redirect()->route('payments')->with('alert-error', 'Pago no encontrado.');
        }

        $payment->delete();

        return redirect()->route('payments')->with('alert-success', 'Pago eliminado correctamente.');
    }
}
