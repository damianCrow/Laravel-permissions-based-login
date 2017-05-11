<?php

namespace App;

use Eloquent;
use App\Content;
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

  public function isAllowedAccess($folderName) {

    $contentFolder = Content::where('name', '=', $folderName) -> get();

    if(count($contentFolder) > 0) {
    	
    	foreach(json_decode($this->groups) as $group) {

        $accessGroups = json_decode($contentFolder[0] -> access_groups);

        for($i = 0; $i < count($accessGroups); $i++) {

          if($accessGroups[$i] === $group) {

            return true;
          }
         
          if($accessGroups[$i] !== $group && $i === count($accessGroups)) {

            return false;
          }
        }
      }
    }
    else {

    	return false;
    }
  }

  public function canAccessRoute($routeAccessGroupesArray) {

    foreach(json_decode($this->groups) as $key => $group) {

      if(in_array($group, $routeAccessGroupesArray)) {

        return true;
      }
      else {

        if($key === count(json_decode($this->groups))) {

          return false;
        }
      }
    }
  }
}
