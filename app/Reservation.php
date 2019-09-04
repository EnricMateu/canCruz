<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
 protected $fillable= ['name', 'surname', 'email', 'telephone',
  'postalCode', 'checkinDate', 'checkoutDate','numberPeople', 
  'numberPets', 'breakfast', 'lunch', 'dinner','comments', 'language', 
  'dataProtection'];
}
