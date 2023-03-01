<?php
/* ===========================================================================
 * Copyright (c) 2022-2023 Zindex Software
 * Author : Rong Gui
 * Licensed under the MIT License
 * =========================================================================== */

namespace Guirong\PhpClosure;

/**
 * Serialize
 *
 * @param mixed $data
 * @return string
 */
function serialize($data)
{
    return ClosureSerialize::serialize($data);
}

/**
 * Unserialize
 *
 * @param string $data
 * @param array|null $options
 * @return mixed
 */
function unserialize($data, array $options = null)
{
    return ClosureSerialize::unserialize($data, $options);
}
