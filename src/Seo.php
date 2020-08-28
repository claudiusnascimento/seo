<?php

namespace ClaudiusNascimento\Seo;

class Seo
{

    private $model = null;


    private $defaults;

    /**
     *   Title page (google)
     */
    private $title = '';

    /**
     *  Description page (google)
     */
    private $description = '';

    /**
     *  Keywords page (google)
     */
    private $keywords = '';

    /**
     *
     */
    private $robots = '';

    /**
     *
     */
    private $og_title = '';

    /**
     *
     */
    private $og_description = '';

    /**
     *
     */
    private $og_type = '';

    /**
     *
     */
    private $og_image = '';

    /**
     *
     */
    private $og_url = '';

    /**
     *
     */
    private $og_sitename = '';

    /**
     *
     */
    private $og_fb_admins = '';

    /**
     *
     */
    private $twitter_card = '';

    /**
     *
     */
    private $twitter_url = '';

    /**
     *
     */
    private $twitter_title = '';

    /**
     *
     */
    private $twitter_image = '';

    /**
     *
     */
    private $twitter_description = '';



    public function __construct()
    {
        $this->defaults = config('seo.defaults', []);
    }

    public function setModel($obj)
    {
        $this->model = $obj;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    protected function getTitle()
    {
        return $this->getAttr('title', config('app.name', ''));
    }

    protected function getDescription()
    {
        return $this->getAttr('description');
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    protected function getRobots()
    {
        return $this->getAttr('robots');
    }

    public function setRobots()
    {
        $this->robots = $robots;
    }

    protected function getOgUrl()
    {
        return $this->getAttr('og_url');
    }

    public function setOgUrl()
    {
        $this->og_url = $og_url;
    }

    protected function getOgTitle()
    {
        return $this->getAttr('og_title', config('app.name', ''));
    }

    public function setOgTitle()
    {
        $this->og_title = $og_title;
    }

    protected function getOgDescription()
    {
        return $this->getAttr('og_description');
    }

    public function setOgDescription()
    {
        $this->og_description = $og_description;
    }

    protected function getOgSiteName()
    {
        return $this->getAttr('og_sitename');
    }

    public function setOgSiteName()
    {
        $this->og_sitename = $og_sitename;
    }

    protected function getOgType()
    {
        return $this->getAttr('og_type');
    }

    public function setOgType()
    {
        $this->og_type = $og_type;
    }

    protected function getOgImage()
    {
        return $this->getAttr('og_image');
    }

    public function setOgImage()
    {
        $this->og_image = $og_image;
    }

    protected function getOgFbAdmins()
    {
        return $this->getAttr('og_fb_admins');
    }

    public function setOgFbAdmins()
    {
        $this->og_fb_admins = $og_fb_admins;
    }

    public function generate($google = true, $facebook = true, $twitter = true)
    {
        $seoHtml = '';

        if($google) {
            $seoHtml .= '<title>' . $this->getTitle() . '</title>' . "\n";
            $seoHtml .= '<meta name="description" content="'.$this->getDescription().'" />' . "\n";
            $seoHtml .= '<meta name="Robots" content="'.$this->getRobots().'" />' . "\n";
        }

        if($facebook) {
            $seoHtml .= '<meta property="og:url" content="'.$this->getOgUrl().'" />' . "\n";
            $seoHtml .= '<meta property="og:title" content="'.$this->getOgTitle().'" />' . "\n";
            $seoHtml .= '<meta property="og:description" content="'.$this->getOgDescription().'" />' . "\n";
            $seoHtml .= '<meta property="og:site_name" content="'.$this->getOgSiteName().'" />' . "\n";
            $seoHtml .= '<meta property="og:type" content="'.$this->getOgType().'" />' . "\n";
            $seoHtml .= '<meta property="og:image" content="'.$this->getOgImage().'" />' . "\n";
            $seoHtml .= '<meta property="og:og_fb_admins" content="'.$this->getOgFbAdmins().'" />' . "\n";
        }

        if($twitter) {

            $seoHtml .= '<meta name="twitter:card" content="summary" />' . "\n";
            // MUST BE IMPLEMENTED
        }

        return $seoHtml;
    }

    private function getAttr($name, $default = '')
    {
        if(!empty(trim($this->{$name}))) {
            return $this->{$name};
        }

        if($this->model) {
            $attr = optional($this->model->seo)->{$name};
            if(!empty(trim($attr))) {
                return $attr;
            }
        }

        if(!empty(trim($this->defaults[$name]))) {
            return $this->defaults[$name];
        }

        return $default;
    }


}
