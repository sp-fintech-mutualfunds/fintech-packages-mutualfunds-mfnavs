<?php

namespace Apps\Fintech\Packages\Mf\Navs;

use Apps\Fintech\Packages\Mf\Navs\Model\AppsFintechMfNavs;
use System\Base\BasePackage;

class MfNavs extends BasePackage
{
    protected $modelToUse = AppsFintechMfNavs::class;

    protected $packageName = 'mfnavs';

    public $mfnavs;

    public function getMfNavsByIsin($isin)
    {
        if ($this->config->databasetype === 'db') {
            $conditions =
                [
                    'conditions'    => 'isin = :isin:',
                    'bind'          =>
                        [
                            'isin'  => $isin
                        ]
                ];
        } else {
            $conditions =
                [
                    'conditions'    => [
                        ['isin', '=', $isin]
                    ]
                ];
        }

        $mfnavs = $this->getByParams($conditions);

        if ($mfnavs && count($mfnavs) > 0) {
            return $mfnavs[0];
        }

        return false;
    }

    public function addMfNavs($data)
    {
        //
    }

    public function updateMfNavs($data)
    {
        //
    }

    public function removeMfNavs($data)
    {
        //
    }
}