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
    public function questions() {
        return $this->hasMany(Question::class)->latest();
    }
}