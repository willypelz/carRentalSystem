<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = ['car_owner_name', 'plate_number', 'color', 'side_window_no', 'chassis_no', 'make_of_vehicle', 'model', 'dealer_name'];
}
