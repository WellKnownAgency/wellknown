<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $table = 'seo_pages';

    public $timestamps = false;

    /*public function project()
    {
        return $this->belongsTo(SeoProject::class, 'page_id');
    }*/

    public function keywords()
    {
        return $this->hasMany(SeoKeyword::class, 'page_id');
    }
}
