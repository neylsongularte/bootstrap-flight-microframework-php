<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'sqlite',
    'database'  => __DIR__ . '/database.sqlite',
    'prefix'    => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

// models
class Pessoa extends Model {
    protected $table = 'pessoas';
};
