<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Report extends Model {
    public function question() {
    	return $this->belognsTo(Question::class);
    }
}
