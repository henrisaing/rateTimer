<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Table extends Model
{
  protected $fillable = [
    'name', 'status', 'button'
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public static function hasTables(){
    $hasTables = false;

    if(Auth::check()):
      if(count(Auth::user()->tables()->get()) > 2):
        $hasTables = true;
      endif;
    endif;

    return $hasTables;
  }
}
