<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Discussion extends Model {
	public function question() {
		return $this->blongsTo(Question::class);
	}
}
