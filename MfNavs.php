<?php

namespace Apps\Fintech\Packages\Mf\Navs;

use Apps\Fintech\Packages\Mf\Navs\Model\AppsFintechMfNavs;
use System\Base\BasePackage;

class MfNavs extends BasePackage
{
    protected $modelToUse = AppsFintechMfNavs::class;

    protected $packageName = 'mfnavs';

    public $mfnavs;

    public function init()
    {
        parent::init();

        $this->ffStore = $this->ff->store($this->ffStoreToUse);
        $this->ffStore->setValidateData(false);

        return $this;
    }

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

    public function getMfNavsByAmfiCode($amfiCode)
    {
        if ($this->config->databasetype === 'db') {
            $conditions =
                [
                    'conditions'    => 'amfiCode = :amfiCode:',
                    'bind'          =>
                        [
                            'amfi_code'  => $amfiCode
                        ]
                ];
        } else {
            $conditions =
                [
                    'conditions'    => [
                        ['amfi_code', '=', $amfiCode]
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