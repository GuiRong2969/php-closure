<?php
/* ===========================================================================
 * Copyright (c) 2022-2023 Zindex Software
 * Author : Rong Gui
 * Licensed under the MIT License
 * =========================================================================== */

namespace Guirong\PhpClosure;

/**
 * Closure context class
 * @internal
 */
class ClosureContext
{
    /**
     * @var ClosureScope Closures scope
     */
    public $scope;

    /**
     * @var integer
     */
    public $locks;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->scope = new ClosureScope();
        $this->locks = 0;
    }
}