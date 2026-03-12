<?php

namespace Tests\Feature;

use App\Models\Payment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PaymentsTest extends TestCase
{
    use RefreshDatabase;

    public function test_listado_de_pagos_retorna_200(): void
    {
        $response = $this->get(route('payments'));

        $response->assertStatus(200);
    }

    public function test_vista_crear_pago_retorna_200(): void
    {
        $response = $this->get(route('payments-create'));

        $response->assertStatus(200);
    }

    public function test_store_crea_pago_y_redirige(): void
    {
        $response = $this->post(route('payments-store'), [
            'description' => 'Pago de prueba',
            'price'       => 50000,
        ]);

        $response->assertRedirect(route('payments'));
        $this->assertDatabaseHas('payments', [
            'description' => 'Pago de prueba',
            'price'       => 50000,
        ]);
    }

    public function test_store_valida_campos_requeridos(): void
    {
        $response = $this->post(route('payments-store'), []);

        $response->assertSessionHasErrors(['description', 'price']);
    }

    public function test_store_valida_precio_negativo(): void
    {
        $response = $this->post(route('payments-store'), [
            'description' => 'Test',
            'price'       => -100,
        ]);

        $response->assertSessionHasErrors(['price']);
    }

    public function test_vista_editar_pago_retorna_200(): void
    {
        $payment = Payment::factory()->create();

        $response = $this->get(route('payments-edit', $payment->id));

        $response->assertStatus(200);
    }

    public function test_editar_pago_inexistente_redirige_con_error(): void
    {
        $response = $this->get(route('payments-edit', 9999));

        $response->assertRedirect(route('payments'));
        $response->assertSessionHas('alert-error');
    }

    public function test_update_actualiza_pago_y_redirige(): void
    {
        $payment = Payment::factory()->create();

        $response = $this->put(route('payments-update', $payment->id), [
            'description' => 'Descripción actualizada',
            'price'       => 99000,
        ]);

        $response->assertRedirect(route('payments'));
        $this->assertDatabaseHas('payments', [
            'id'          => $payment->id,
            'description' => 'Descripción actualizada',
            'price'       => 99000,
        ]);
    }

    public function test_destroy_elimina_pago_y_redirige(): void
    {
        $payment = Payment::factory()->create();

        $response = $this->delete(route('payments-destroy', $payment->id));

        $response->assertRedirect(route('payments'));
        $this->assertDatabaseMissing('payments', ['id' => $payment->id]);
    }

    public function test_destroy_pago_inexistente_redirige_con_error(): void
    {
        $response = $this->delete(route('payments-destroy', 9999));

        $response->assertRedirect(route('payments'));
        $response->assertSessionHas('alert-error');
    }
}
