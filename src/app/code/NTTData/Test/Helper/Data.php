<?php

namespace NTTData\Test\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    public function getStoreConfig()
    {
        return true;
    }
}
