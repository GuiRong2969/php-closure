<?php
/* ===========================================================================
 * Copyright (c) 2022-2023 Zindex Software
 * Author : Rong Gui
 * Licensed under the MIT License
 * =========================================================================== */

namespace Guirong\PhpClosure;

/**
 * Closure Serialize class
 * @internal
 */
class ClosureSerialize
{
    /**
     * Serialize
     *
     * @param mixed $data
     * @return string
     */
    public static function serialize($data)
    {
        SerializableClosure::enterContext();
        SerializableClosure::wrapClosures($data);
        $data = \serialize($data);
        SerializableClosure::exitContext();
        return $data;
    }

    /**
     * Unserialize
     *
     * @param string $data
     * @param array|null $options
     * @return mixed
     */
    public static function unserialize($data, array $options = null)
    {
        SerializableClosure::enterContext();
        $data = ($options === null || \PHP_MAJOR_VERSION < 7)
            ? \unserialize($data)
            : \unserialize($data, $options);
        SerializableClosure::unwrapClosures($data);
        SerializableClosure::exitContext();
        return $data;
    }
}
