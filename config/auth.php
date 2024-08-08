<?php

return [

    // ... existing code ...

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'klien' => [
            'driver' => 'session',
            'provider' => 'kliens',
        ],

        'mahasiswa' => [
            'driver' => 'session',
            'provider' => 'mahasiswas',
        ],

        // ... existing code ...
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'kliens' => [
            'driver' => 'eloquent',
            'model' => App\Models\Klien::class,
        ],

        'mahasiswas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Mahasiswa::class,
        ],

        // ... existing code ...
    ],

    // ... existing code ...

];