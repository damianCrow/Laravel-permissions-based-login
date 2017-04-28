<?php

namespace App;

use Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Eloquent implements Authenticatable
{
  use AuthenticableTrait;

  public function isAdmin() {

    return $this->admin;
  }
}
