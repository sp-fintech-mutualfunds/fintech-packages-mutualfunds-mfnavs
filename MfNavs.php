<?php

namespace Apps\Fintech\Packages\Mf\Navs;

use System\Base\BasePackage;

class MfNavs extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'mfnavs';

    public $mfnavs;

    public function getMfNavsById($id)
    {
        $mfnavs = $this->getById($id);

        if ($mfnavs) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addMfNavs($data)
    {
        //
    }

    public function updateMfNavs($data)
    {
        $mfnavs = $this->getById($id);

        if ($mfnavs) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeMfNavs($data)
    {
        $mfnavs = $this->getById($id);

        if ($mfnavs) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}