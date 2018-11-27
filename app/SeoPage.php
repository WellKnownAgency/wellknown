<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $table = 'seo_pages';

    protected $fillable = ['url_path', 'project_id'];

    public $timestamps = false;

    public function keywords()
    {
        return $this->hasMany(SeoKeyword::class, 'page_id');
    }

    public function project()
    {
        return $this->belongsTo(SeoProject::class, 'project_id');
    }
}
