<?php

namespace Gwd\SeoMeta\Traits;

trait SeoSitemapTrait
{
    abstract public function getSitemapItemUrl(): String;

    public function getSitemapItemLastModified(){
        if(isset($this->updated_at) || isset($this->created_at)) {
            return isset($this->updated_at) ? $this->updated_at->format('Y-m-d\TH:i:sP') : $this->created_at->format('Y-m-d\TH:i:sP');
        }
        return null;
    }

    abstract public static function getSitemapItems();
}
