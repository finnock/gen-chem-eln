<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Sample extends Model
{
   protected $connection = 'mongodb';
}