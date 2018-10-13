<?php

namespace taller_servicio;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'manufacturer_id'];
}
