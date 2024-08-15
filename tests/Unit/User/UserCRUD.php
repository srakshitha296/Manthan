<?php

use App\Models\User;

test('a user can be created', function () {
    $user = User::create([
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'password' => bcrypt('password'),
        'phone' => '1234567890',
        'image' => 'path/to/image.png',
        'role' => 'student',
        'address' => '123 Main St',
    ]);

    expect($user)->toBeInstanceOf(User::class);
    expect($user->name)->toBe('John Doe');
    expect($user->email)->toBe('johndoe@example.com');
});

test('a user can be read from the database', function () {
    $user = User::factory()->create();

    $foundUser = User::find($user->id);

    expect($foundUser->id)->toBe($user->id);
    expect($foundUser->name)->toBe($user->name);
});

test('a user can be updated', function () {
    $user = User::factory()->create();

    $user->update(['name' => 'Jane Doe']);

    $updatedUser = User::find($user->id);

    expect($updatedUser->name)->toBe('Jane Doe');
});

test('a user can be deleted', function () {
    $user = User::factory()->create();

    $user->delete();

    expect(User::find($user->id))->toBeNull();
});
