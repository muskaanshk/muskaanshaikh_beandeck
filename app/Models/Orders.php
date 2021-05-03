<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //table name 
    protected $table = 'Orders';

    //primary key
    protected $primaryKey = 'id';
}
