<?php

namespace ClaudiusNascimento\Seo\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model {

    public $table = 'seo';

    public $fillable = [
                        'rel', 'rel_id',
                        'title', 'description', 'keywords', 'robots',
                        'og_title', 'og_description', 'og_type',
                        'og_image', 'og_url', 'og_sitename',
                        'og_fb_admins', 'twitter_card', 'twitter_url',
                        'twitter_title', 'twitter_image', 'twitter_description'
                    ];


    public function getAttr($attr)
    {
        return empty($this->{$attr}) ? config('seo.defaults.' . $attr) : $this->{$attr};
    }

    public function getOgTypeAttribute($value)
    {
        return $value != '' ?: 'website';
    }

    public function getOgImageAttribute($value)
    {

        return preg_replace($this->getChangeDomainPattern(), 'www.veyron.com.br', $value);
    }

    public function getOgUrlAttribute($value)
    {

        return preg_replace($this->getChangeDomainPattern(), 'www.veyron.com.br', $value);
    }

    public function getChangeDomainPattern()
    {
        return '/localhost:8888\/path\/to\/project\/public/m';
    }


}
