<?php

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    type: ComponentRegistrar::MODULE,
    componentName: 'NTTData_Test',
    path: __DIR__);