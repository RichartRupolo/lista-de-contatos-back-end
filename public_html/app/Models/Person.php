<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'tb_person';
    protected $primaryKey = 'id';

    public static function create($data){
        return 'created';

    }

    public static function get(int $id){
        return 'getted';
    }

  
}
