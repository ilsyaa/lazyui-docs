<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/select/users', function (Request $request) {
    $search = $request->search;

    $user = \App\Models\User::query()
        ->where('name', 'like', '%' . $search . '%')
        ->limit(10)
        ->get();

    return array_map(function ($user) {
        return [
            'value' => $user['id'],
            'label' => $user['name'],
            'icon' => '',
            'description' => '',
            'disabled' => false
        ];
    }, $user->toArray());
});

Route::get('/select/description', function (Request $request) {
    $search = $request->search;

    $roles = [
        [
            'value' => 'admin',
            'label' => 'Admin',
            'description' => 'Admin access',
        ],
        [
            'value' => 'user',
            'label' => 'User',
            'description' => 'User access',
        ]
    ];

    if ($search) {
        $roles = array_filter($roles, function ($role) use ($search) {
            return str()->contains(strtolower($role['label']), strtolower($search));
        });
        $roles = array_values($roles);
    }

    return $roles;
});

Route::get('/select/icons', function (Request $request) {
    $search = $request->search;

    $roles = [
        [
            'value' => 'like',
            'label' => 'Like',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M351.1 89.4c5.2-26-11.7-51.3-37.7-56.5s-51.3 11.7-56.5 37.7L254.6 82c-6.6 33.2-24.8 63-51.2 84.2l-7.4 5.9c-22.8 18.2-36 45.8-36 75V272v48 38.3c0 32.1 16 62.1 42.7 79.9l38.5 25.7c15.8 10.5 34.3 16.1 53.3 16.1H392c26.5 0 48-21.5 48-48c0-3.6-.4-7-1.1-10.4c19.2-6.3 33.1-24.3 33.1-45.6c0-9.1-2.5-17.6-6.9-24.9c22.2-4.2 38.9-23.7 38.9-47.1c0-15.1-7-28.6-17.9-37.4c15.4-8 25.9-24.1 25.9-42.6c0-26.5-21.5-48-48-48H320c13.7-23.1 23.5-48.5 28.8-75.2l2.3-11.4z"/><path fill="currentColor" class="fa-primary" d="M0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224z"/></svg>',
        ],
        [
            'value' => 'heart',
            'label' => 'Heart',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/><path fill="currentColor" class="fa-primary" d=""/></svg>',
        ]
    ];

    if ($search) {
        $roles = array_filter($roles, function ($role) use ($search) {
            return str()->contains(strtolower($role['label']), strtolower($search));
        });
        $roles = array_values($roles);
    }

    return $roles;
});

Route::get('/select/img', function (Request $request) {
    $search = $request->search;

    $roles = [
        [
            'value' => 'id',
            'label' => 'Indonesia',
            'icon' => '<img class="rounded-full aspect-[1/1]" src="https://raw.githubusercontent.com/Yummygum/flagpack-core/21d7c2904af91ccde7b930b50ee342c5f169a964/svg/l/ID.svg" alt="flag">',
        ],
        [
            'value' => 'jp',
            'label' => 'Japan',
            'icon' => '<img class="rounded-full aspect-[1/1]" src="https://raw.githubusercontent.com/Yummygum/flagpack-core/21d7c2904af91ccde7b930b50ee342c5f169a964/svg/l/JP.svg" alt="flag">',
        ],
        [
            'value' => 'RU',
            'label' => 'Russia',
            'icon' => '<img class="rounded-full aspect-[1/1]" src="https://raw.githubusercontent.com/Yummygum/flagpack-core/21d7c2904af91ccde7b930b50ee342c5f169a964/svg/l/RU.svg" alt="flag">',
        ],
    ];

    if ($search) {
        $roles = array_filter($roles, function ($role) use ($search) {
            return str()->contains(strtolower($role['label']), strtolower($search));
        });
        $roles = array_values($roles);
    }

    return $roles;
});

Route::get('/select/icons', function (Request $request) {
    $search = $request->search;

    $roles = [
        [
            'value' => 'like',
            'label' => 'Like',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M351.1 89.4c5.2-26-11.7-51.3-37.7-56.5s-51.3 11.7-56.5 37.7L254.6 82c-6.6 33.2-24.8 63-51.2 84.2l-7.4 5.9c-22.8 18.2-36 45.8-36 75V272v48 38.3c0 32.1 16 62.1 42.7 79.9l38.5 25.7c15.8 10.5 34.3 16.1 53.3 16.1H392c26.5 0 48-21.5 48-48c0-3.6-.4-7-1.1-10.4c19.2-6.3 33.1-24.3 33.1-45.6c0-9.1-2.5-17.6-6.9-24.9c22.2-4.2 38.9-23.7 38.9-47.1c0-15.1-7-28.6-17.9-37.4c15.4-8 25.9-24.1 25.9-42.6c0-26.5-21.5-48-48-48H320c13.7-23.1 23.5-48.5 28.8-75.2l2.3-11.4z"/><path fill="currentColor" class="fa-primary" d="M0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224z"/></svg>',
        ],
        [
            'value' => 'heart',
            'label' => 'Heart',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/><path fill="currentColor" class="fa-primary" d=""/></svg>',
        ]
    ];

    if ($search) {
        $roles = array_filter($roles, function ($role) use ($search) {
            return str()->contains(strtolower($role['label']), strtolower($search));
        });
        $roles = array_values($roles);
    }

    return $roles;
});
