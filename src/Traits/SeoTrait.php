<?php

namespace ClaudiusNascimento\Seo\Traits;

use ClaudiusNascimento\Seo\Models\Seo;

trait SeoTrait {

    public function generateSeo()
    {
        $model_relation = $this->_getSeoRelation();

        $keyName = $this->getKeyName();

        $seo = Seo::whereRel($model_relation)->whereRelId($this->{$keyName})->first();

        $model_id = $this->{$keyName};

        return view('seo::form', compact(['seo', 'model_relation', 'model_id']));
    }

    public function seo()
    {
        return $this->hasOne(\ClaudiusNascimento\Seo\Models\Seo::class, 'rel_id')->whereRel($this->_getSeoRelation());
    }

    protected function _getSeoRelation()
    {

        if(method_exists($this, 'getSeoRelation')) {
            return $this->getSeoRelation();
        }

        if(property_exists($this, 'seo_relation')) {
            return $this->seo_relation;
        }

        return \Str::kebab(class_basename($this));

    }

    public function generateSeoTags()
    {

        if(!$this->seo) return view('seo::default')->render();

        $defaults = (object)config('seo.defaults');

        return view('seo::seo')->withSeo($this->seo)->withDefaults($defaults)->render();
    }

}
