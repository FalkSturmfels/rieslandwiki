<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageInfo extends Model
{
    /**
     * Get the normal page that are assigned this simple page.
     */
    public function normalPage()
    {
        return $this->morphedByMany('App\NormalPage', 'linkable');
    }

    /**
     * Get the diary page that are assigned this simple page.
     */
    public function diaryPage()
    {
        return $this->morphedByMany('App\DiaryPage', 'linkable');
    }

    /**
     * Get all menu links that are assigned this simple page.
     */
    public function menuLinks()
    {
        return $this->morphedByMany('App\Model\Core\Menu\MenuLink', 'linkable');
    }
}
