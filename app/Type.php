<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //table declaration
    protected $table = 'type';
    protected $primaryKey = 'id';

    // Relationships
    
    public function expense() {
        return $this->hasMany(Expense::class);
    }
    
    public function typeDetails() {
        return $this->belongsTo(Type::class);
    }
}
