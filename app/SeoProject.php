<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class SeoProject extends Model
{
    protected $table = 'seo_projects';

    protected $fillable = ['name', 'site'];

    public function pages()
    {
        return $this->hasMany(SeoPage::class, 'project_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Carbon($value))->format('d-m-Y H:i:s');
    }
}
