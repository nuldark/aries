<?php

/*
 * This file is part of the nuldark/aries.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Aries\Signature;

use Aries\Algorithm;
use Aries\Common\KeyInterface;

interface SignatureAlgorithm extends Algorithm
{
    /**
     * Generates a signature for the specified plaintext.
     *
     * @param KeyInterface $key
     *  The private key used to sign the plaintext.
     * @param string $plaintext
     *  The plaintext wish to sign.
     *
     * @return string
     *  Returns a calculated signature.
     */
    public function sign(KeyInterface $key, string $plaintext): string;

    /**
     * Verifies a signature for the specified plaintext.
     *
     * @param KeyInterface $key
     *  The private key used to verify the signature.
     * @param string $signature
     *  The signature wish to verify.
     * @param string $plaintext
     *  The plaintext used to generate the signature previously.
     *
     * @return bool
     *  Returns true on success, otherwise false.
     */
    public function verify(KeyInterface $key, string $signature, string $plaintext): bool;

    /**
     * Returns the algorithm hash name.
     *
     * @return string
     *  Returns the algorithm name.
     */
    public function getAlgorithm(): string;
}
