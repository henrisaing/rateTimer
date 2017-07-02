<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Table extends Model
{
  protected $fillable = [
    'name', 'status', 'button'
  ];

  public function User(){
    return $this->belongsTo(User::class);
  }
}
