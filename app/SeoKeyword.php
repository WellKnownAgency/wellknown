<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoKeyword extends Model
{
    protected $table = 'seo_keywords';

    protected $fillable = ['phrase', 'page_id'];

    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo(SeoPage::class, 'page_id');
    }
}
