<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'lastName', 'firstName', 'middleName', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // Relationships

    public function modules() {
        return $this->belongsToMany(Module::class)->using(ModuleUser::class);
    }

    public function expenses() {
        return $this->hasMany(Expense::class);
    }

    public function monthlyBudget() {
        return $this->hasMany(MonthlyBudget::class);
    }
}
