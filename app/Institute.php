<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
class Institute extends Model
{
      public function user() {
           return $this->hasOne(User::class);
      }
}