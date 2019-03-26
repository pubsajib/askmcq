<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Question extends Model {
    public function user() {
    	return $this->belongsTo(User::class);
    }
    public function answers() {
    	return $this->hasMany(Answer::class);
    }
    public function discussions() {
    	return $this->hasMany(Discussion::class);
    }
    public function reports() {
    	return $this->hasMany(Report::class);
    }
    public function getCreatedAtAttribute($value) {
    	return date('d/m/Y', strtotime($value));
    }
}