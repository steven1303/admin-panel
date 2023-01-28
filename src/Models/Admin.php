<?php

namespace Steven1303\AdminPanel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
  use HasFactory;

  protected $fillable = [
    'username',
    'email',
    'role_id',
    'alias',
  ];
}