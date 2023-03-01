<?php
/* ===========================================================================
 * Copyright (c) 2022-2023 Zindex Software
 * Author : Rong Gui
 * Licensed under the MIT License
 * =========================================================================== */

namespace Guirong\PhpClosure;

class SecurityProvider implements ISecurityProvider
{
    /** @var  string */
    protected $secret;

    /**
     * SecurityProvider constructor.
     * @param string $secret
     */
    public function __construct($secret)
    {
        $this->secret = $secret;
    }

    /**
     * @inheritdoc
     */
    public function sign($closure)
    {
        return array(
            'closure' => $closure,
            'hash' => base64_encode(hash_hmac('sha256', $closure, $this->secret, true)),
        );
    }

    /**
     * @inheritdoc
     */
    public function verify(array $data)
    {
        return base64_encode(hash_hmac('sha256', $data['closure'], $this->secret, true)) === $data['hash'];
    }
}