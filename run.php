<?php
require(__DIR__ . '/database/bootEloquent.php');

Flight::set('flight.views.path', __DIR__ . '/views');

// routes
Flight::route('/', function() {
    Flight::render('hello.php', ['pessoas' => Pessoa::all()]);
});

Flight::route('POST /pessoas', function() {
    $pessoa = new Pessoa();
    $pessoa->nome = Flight::request()->data['nome'];
    $pessoa->save();

    Flight::redirect('/');
});


Flight::start();
