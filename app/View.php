<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class View extends Model {
	protected $table = 'profile_views';
	protected $fillable = ['user_id', 'viewer_id'];
	public function users() {
        return $this->belongsTo(User::class);
    }
}