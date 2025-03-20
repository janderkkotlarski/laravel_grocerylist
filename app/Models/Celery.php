<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Celery {
	public static function all(): array {
			return [
					[
							'id' => 1,
							'title' => 'Clown',
							'opinion' => '50 turns'
					],
					[
							'id' => 2,
							'title' => 'Jester',
							'opinion' => 'eaten'
					],
					[
							'id' => 3,
							'title' => 'Trickster',
							'opinion' => 'imagine'
					]
			];
	}

	public static function find(int $id): array {
		$celery = Arr::first(static::all(), fn($celery) => $celery['id'] == $id);

		if (!$celery) {
			abort(404);
		}

		return $celery;

	}
}