<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
     * Get the department records associated with the position.
     */
    public function departments()
    {
      return $this->belongsToMany('App\Department', 'department_positions');
    }
}
