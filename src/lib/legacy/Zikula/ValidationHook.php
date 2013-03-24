<?php
/**
 * Copyright 2010 Zikula Foundation
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 * @subpackage HookManager
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

use Zikula\Component\HookDispatcher\Hook;
use Zikula\Core\Hook\ValidationProviders;
use Zikula\Core\Hook\ValidationResponse;

/**
 * Content validation hook.
 */
class Zikula_ValidationHook extends Hook
{
    /**
     * @var ValidationProviders
     */
    private $validators;

    /**
     * @param ValidationProviders $validators
     */
    public function __construct($name, ValidationProviders $validators)
    {
        $this->setName($name);
        $this->validators = $validators;
    }

    /**
     * Sets the validation response.
     *
     * @param $name
     * @param ValidationResponse $response
     */
    public function setValidator($name, ValidationResponse $response)
    {
        $this->validators->set($name, $response);
    }

    /**
     * Gets validation providers
     *
     * @return ValidationProviders
     */
    public function getValidators()
    {
        return $this->validators;
    }
}