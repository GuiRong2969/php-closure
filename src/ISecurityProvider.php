<?php
/* ===========================================================================
 * Copyright (c) 2022-2023 Zindex Software
 * Author : Rong Gui
 * Licensed under the MIT License
 * =========================================================================== */

namespace Guirong\PhpClosure;

interface ISecurityProvider
{
    /**
     * Sign serialized closure
     * @param string $closure
     * @return array
     */
    public function sign($closure);

    /**
     * Verify signature
     * @param array $data
     * @return bool
     */
    public function verify(array $data);
}