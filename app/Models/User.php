<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
  protected $fillable = [
      'email', 'name', 'password'
  ];

  protected $hidden = [
    'password', 'remember_token'
  ];

  public function setPasswordAttribute($password)
  {
        $this->attributes['password'] = bcrypt($password);
  }

  public function getJWTIdentifier()
  {
        return $this->getKey();
  }

  public function getJWTCustomClaims()
  {
        return [];
  }
}
