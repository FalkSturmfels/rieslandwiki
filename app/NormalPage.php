<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NormalPage extends Model
{
    /**
     * Get the simple page for the normal page.
     */
    public function simplePage()
    {
        return $this->morphToMany('App\PageInfo', 'linkable');
    }
}
