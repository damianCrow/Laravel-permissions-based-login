<?php

namespace App;

use Eloquent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Eloquent implements Authenticatable, CanResetPassword
{
  use AuthenticableTrait, CanResetPasswordContract, Notifiable;

  public function isAdmin() {

    return $this->admin;
  }
}
