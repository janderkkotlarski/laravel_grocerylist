<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celery extends Model {
	protected $table = 'celery_listings';

	protected $fillable = ['title', 'celery'];
}