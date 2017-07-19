<?php

namespace App\Model\Core\Menu;

use Illuminate\Database\Eloquent\Model;

class MenuLink extends Model
{
    /**
     * Get all of the tags for the post.
     */
    public function simplePage()
    {
        return $this->morphToMany('App\PageInfo', 'linkable');
    }
}
