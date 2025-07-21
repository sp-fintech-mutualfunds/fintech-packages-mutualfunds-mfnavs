<?php

namespace Apps\Fintech\Packages\Mf\Navs\Model;

use System\Base\BaseModel;

class AppsFintechMfNavs extends BaseModel
{
    public $id;

    public $last_updated;

    public $latest_nav;

    public $diff;

    public $diff_percent;

    public $trajectory;

    public $navs;

    public $navs_chunks;
}