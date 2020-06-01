<?php

namespace Tests\Feature;

it('has welcome page')
    ->get('/')
    ->assertStatus(200);
