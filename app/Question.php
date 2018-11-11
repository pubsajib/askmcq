<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Question extends Model {
    public function user() {
    	return $this->belongsTo(User::class);
    }
    public function getCreatedAtAttribute($value) {
    	return date('d/m/Y', strtotime($value));
    }
}