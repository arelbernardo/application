<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    //table declaration
    protected $table = 'category';
    protected $primaryKey = 'id';

    // Relationships
    
    public function expense() {
        return $this->hasMany(Expense::class);
    }

}
