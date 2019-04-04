<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uploaded_car extends Model
{
    //
    protected $fillable = [   'user_id' , 'car_id', 'plate_number', 'rent_price', 'location'];
}
