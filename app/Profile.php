<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = [
      'username', 'profile_pic', 'account_id', 'category_id'
  ];
}
