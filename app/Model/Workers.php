<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
      'FULLNAME',
        'SEX',
        'BIRTHDAY',
        'PROFESSION',
    ];
}