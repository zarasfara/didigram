<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});


// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Новости', route('blog'));
});

//  Это для конкретной новости типа blog > article

Breadcrumbs::for('article', function ($trail, $article) {
    $trail->parent('blog');
    $trail->push($article->name, route('article', $article->id));
});
