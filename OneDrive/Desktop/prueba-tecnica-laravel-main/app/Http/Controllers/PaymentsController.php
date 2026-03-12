<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payment::paginate(10);
        return view('payments.list', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(StorePaymentRequest $request)
    {
        try {
            Payment::create([
                'description' => $request->description,
                'price'       => $request->price,
            ]);

            return redirect()->route('payments')->with('alert-success', 'Pago creado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('payments-create')->with('alert-error', 'Ocurrió un error al crear el pago.');
        }
    }

    public function edit($id)
    {
        try {
            $payment = Payment::findOrFail($id);
        } catch (ModelNotFoundException) {
            return redirect()->route('payments')->with('alert-error', 'El pago no existe o fue eliminado.');
        }

        return view('payments.edit', compact('payment'));
    }

    public function update(UpdatePaymentRequest $request, $id)
    {
        try {
            $payment = Payment::findOrFail($id);
            $payment->update([
                'description' => $request->description,
                'price'       => $request->price,
            ]);

            return redirect()->route('payments')->with('alert-success', 'Pago actualizado correctamente.');
        } catch (ModelNotFoundException) {
            return redirect()->route('payments')->with('alert-error', 'El pago no existe o fue eliminado.');
        } catch (\Exception $e) {
            return redirect()->route('payments-edit', $id)->with('alert-error', 'Ocurrió un error al actualizar el pago.');
        }
    }

    public function destroy($id)
    {
        try {
            $payment = Payment::findOrFail($id);
            $payment->delete();

            return redirect()->route('payments')->with('alert-success', 'Pago eliminado correctamente.');
        } catch (ModelNotFoundException) {
            return redirect()->route('payments')->with('alert-error', 'El pago no existe o fue eliminado.');
        }
    }
}
