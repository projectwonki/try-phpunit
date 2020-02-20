<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    public $name;
    public $skin_color;
    public $has_seed;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
