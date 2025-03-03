<?php

namespace Apps\Fintech\Packages\Mf\Navs\Model;

use Apps\Fintech\Packages\Mf\Schemes\Model\AppsFintechMfSchemes;
use System\Base\BaseModel;

class AppsFintechMfNavs extends BaseModel
{
    protected $modelRelations = [];

    public $id;

    public $amfi_code;

    public $last_updated;

    public $latest_nav;

    public $diff;

    public $diff_percent;

    public $trajectory;

    public $navs;

    public $navs_chunks;

    public function initialize()
    {
        $this->modelRelations['scheme']['relationObj'] = $this->belongsTo(
            'amfi_code',
            AppsFintechMfSchemes::class,
            'amfi_code',
            [
                'alias'         => 'scheme'
            ]
        );

        parent::initialize();
    }

    public function getModelRelations()
    {
        if (count($this->modelRelations) === 0) {
            $this->initialize();
        }

        return $this->modelRelations;
    }
}