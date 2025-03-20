<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celery extends Model {
	// Laravel tries to guess the name of the table, thus it needs some help
	protected $table = 'celery_listings';
}