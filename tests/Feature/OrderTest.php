<?php

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('can create an order', function () {
    $order = \App\Models\Order::factory()->create();
    expect($order->count())->toBe(1);
});
