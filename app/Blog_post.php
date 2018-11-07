<?php
//Model
namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
{
    //
    public function user(\App\User::find($id))
    {
      return $this->belongsTo('User');
    }
}
