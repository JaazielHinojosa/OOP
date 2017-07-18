<?php

namespace Styde;

class Person
{
    protected $name;

    protected static $database = 'mysql';
    public $table = 'people';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function save()
    {
        echo "<p>Saving {$this->name} in the table "
            . $this->table . "</p>";
    }
}

$jaaziel = new Person('Jaaziel');
$jaaziel->table = 'personas'; //es mejor cambiar con un setter que entrando a la propiedad
$jaaziel->save();

//Person::$table = 'personas';

$daniel = new Person('Daniel');
$daniel->save();

echo "<p>{$jaaziel->name()}</p>";

echo "<p>{$daniel->name()}</p>";
