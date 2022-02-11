<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Empleado extends Model
{

    use HasUUID;
    protected $table = 'Empleado';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
}
