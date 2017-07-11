<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDetails extends Model
{
    //table declaration
    protected $table = 'type_details';
    protected $primaryKey = 'id';

    // Relationships

    public function type() {
        return $this->hasMany(Type::class);
    }

}
