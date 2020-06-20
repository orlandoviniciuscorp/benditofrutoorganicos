<?php

use App\Shop\OrderStatuses\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    public function run()
    {
        factory(OrderStatus::class)->create([
            'name' => 'Pago',
            'color' => 'green'
        ]);

        factory(OrderStatus::class)->create([
            'name' => 'Pendente',
            'color' => 'yellow'
        ]);

        factory(OrderStatus::class)->create([
            'name' => 'Erro',
            'color' => 'red'
        ]);

        factory(OrderStatus::class)->create([
            'name' => 'Em Entrega',
            'color' => 'blue'
        ]);

        factory(OrderStatus::class)->create([
            'name' => 'Pedido Feito',
            'color' => 'violet'
        ]);
    }
}