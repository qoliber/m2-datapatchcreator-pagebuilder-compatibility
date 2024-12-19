<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DataPatchCreatorPageBuilder
 * @author      Jakub Winkler <jwinkler@qoliber.com
 */

namespace Qoliber\DataPatchCreatorPageBuilder\Plugin\PageBuilder\Filter;

use Magento\Framework\App\Request\Http;
use Magento\PageBuilder\Model\Filter\Template as FilterTemplate;

class Template
{
    /** @var string  */
    public const MAIN_MODULE = "Qoliber_DataPatchCreator";

    /** @var Http  */
    protected $request;

    public function __construct(
        Http $request
    ) {
        $this->request = $request;
    }

    public function aroundFilter(
        FilterTemplate $subject,
        callable       $proceed,
        string         $result
    ): string {
        $moduleName = $this->request->getControllerModule();
        if (!$moduleName === self::MAIN_MODULE) {
            return $proceed();
        }

        return $result;
    }
}
