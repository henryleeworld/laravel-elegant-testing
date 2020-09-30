<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(fn () => User::factory()->times(1)->create());

it('has users')->assertDatabaseHas('users', [
    'id' => 1,
]);
