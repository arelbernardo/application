<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //table declaration
    protected $table = 'module';
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];
    
    //relationships

    public function users() {
        return $this->belongsToMany(User::class)->using(ModuleUser::class);
    }
    
}
