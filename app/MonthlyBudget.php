<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyBudget extends Model
{
    //table declaration
    protected $table = 'monthly_budget';
    protected $primaryKey = 'id';
    
    // Relationships
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function expense() {
        return $this->hasOne(Expense::class);
    }
}
