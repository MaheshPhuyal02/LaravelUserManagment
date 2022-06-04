<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormModel extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "id";

    public function setNameAttribute($value){
        $this->attributes["name"] = ucwords($value);
    }
}
