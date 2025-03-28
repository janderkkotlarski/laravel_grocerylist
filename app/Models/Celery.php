<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Celery extends Model {
	use HasFactory;

	protected $table = 'celery_listings';

	protected $fillable = ['title', 'celery'];

	public function employer() {
		return $this->belongsTo(Employer::class);
	}

	public function tags() {
		return $this->belongsToMany(Tag::class, foreignPivotKey: "celery_listing_id");
	}

	public function jags() {
		return $this->belongsToMany(Jag::class, foreignPivotKey: "celery_listing_id");
	}
}