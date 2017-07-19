<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaryPage extends Model
{
    /**
     * Get the simple page for the diary page.
     */
    public function simplePage()
    {
        return $this->morphToMany('App\PageInfo', 'linkable');
    }
}
