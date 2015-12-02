<?php

namespace TesteLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
	'name',
	'responsable',
	'email',
	'phone',
	'address',
	'obs'
	
	
	];
}
