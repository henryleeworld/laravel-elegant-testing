<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(fn () => factory(User::class)->create());

it('has users')->assertDatabaseHas('users', [
    'id' => 1,
]);
