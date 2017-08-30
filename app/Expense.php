<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //table declaration
    protected $table = 'expense';
    protected $primaryKey = 'id';

    // Relationships

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
    
    public function typeDetails() {
        return $this->belongsTo(TypeDetails::class);
    }

}
