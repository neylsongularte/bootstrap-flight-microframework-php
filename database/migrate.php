<?php

$fileDatabase = __DIR__ . '/database.sqlite';
exec('touch ' . $fileDatabase); // create file
exec('> ' . $fileDatabase); // clean database

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/bootEloquent.php');

use Illuminate\Database\Capsule\Manager as Capsule;

// tables
Capsule::schema()->create('pessoas', function($table)
{
    $table->increments('id');
    $table->string('nome');
    $table->timestamps();
});
