<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductoTest extends TestCase
{
    // Test para crear un producto
    public function test_crear_producto(): void
    {
    $response = $this->post('/api/v1/productos', [
    'nombre' => 'producto 1',
    'descripcion' => 'descripcion 1',
    'precio' => 100,
    'stock' => 10,
    'categoria_id' => 1,
    ]);
    $response->assertStatus(201);
 }
}
