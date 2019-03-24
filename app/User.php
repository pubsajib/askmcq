<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\MailResetPasswordToken;
class User extends Authenticatable implements MustVerifyEmail{
    use Notifiable;
    protected $fillable = ['userLogin', 'name', 'email', 'password', ];
    protected $hidden = ['password', 'remember_token', ];
    public function questions() {
        return $this->hasMany(Question::class)->latest();
        // return $this->hasMany(Question::class)->paginate(5);
    }
    public function savedQuestions() {
        return $this->hasMany(Question::class)->where('type', 'saved')->latest();
    }
    public function submitedQuestions() {
        return $this->hasMany(Question::class)->where('type', 'submited')->latest();
    }
    public function followers() {
        return $this->belongsToMany(User::class, 'followers', 'leader_id', 'follower_id')->withTimestamps();
    }
    public function followings() {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'leader_id')->withTimestamps();
    }
    public function views(){
        return $this->hasMany(Profileview::class, 'user_id');
    }
    public function monthlyViews(){
        $date = \Carbon\Carbon::today()->subDays(30);
        return $this->hasMany(Profileview::class, 'user_id')->whereDate('created_at', '>=', $date);
    }
    public function roles() {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    public function hasRole($role) {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
    public function hasAnyRole($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) return true;
            }
        } else {
            if ($this->hasRole($roles)) return true;
        }
        return false;
    }
    public function sendPasswordResetNotification($token) {
        $this->notify(new MailResetPasswordToken($token));
    }
}