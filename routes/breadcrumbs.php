<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home','javascript:history.go(-1)');
    // $trail->push('Gallery', url('/photos'));
    
});

// Home > About
Breadcrumbs::for('Gallery', function ($trail) {
    $trail->parent('home');
    $trail->push('Gallery', url('/photos'));
   
});

Breadcrumbs::for('Users', function ($trail) {
    $trail->parent('home');
    $trail->push('Users');
   
});
