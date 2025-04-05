<?php

use App\Livewire\ProductCreate;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ProductCreate::class)
        ->assertStatus(200);
});
