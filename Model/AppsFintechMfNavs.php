<?php

namespace Apps\Fintech\Packages\Mf\Navs\Model;

use System\Base\BaseModel;

class AppsFintechMfNavs extends BaseModel
{
    public $id;

    public $isin;

    public $last_updated;

    public $latest_nav;

    public $scheme_code;

    public $navs;

    public $type;
}