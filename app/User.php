<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Softdeletes;

class User extends Authenticatable
{
    use Notifiable;
    use Softdeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'super_user', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the role records associated with the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_roles')->withTimestamps();
    }

    /**
     * Get the immediate supervisor record associated with the user.
     */
    public function immediateSupervisor()
    {
        return $this->belongsTo('App\User', 'immediate_supervisor_id');
    }

    /**
     * Get the department record associated with the user.
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    /**
     * Get the department record associated with the user.
     */
    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
