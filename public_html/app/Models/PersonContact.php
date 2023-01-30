<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonContact extends Model
{
    use HasFactory;
    protected $table = 'tb_person_contact';
    protected $primaryKey = 'id';
}
