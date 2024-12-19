<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DataPatchCreatorPageBuilder
 * @author      Jakub Winkler <jwinkler@qoliber.com
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Qoliber_DataPatchCreatorPageBuilder',
    __DIR__
);
