<?php

namespace NTTData\Practice\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
    )
    {
        parent::__construct($context);
    }

    public function getStoreConfig()
    {
        return true;
    }

    public function getStringTranslate()
    {        
        return __("Now it is %1, I am learning translations", $this->getCurrentTime());
    }

    public function getCurrentTime()
    {
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $horaActual = date('H:i:s');
        return $horaActual;
    }
}
