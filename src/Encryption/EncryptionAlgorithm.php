<?php

/*
 * This file is part of the nuldark/aries.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Aries\Encryption;

use Aries\Algorithm;

interface EncryptionAlgorithm extends Algorithm
{
    /**
     * Encrypts the given data.
     *
     * @param string $data
     *  The plaintext data to be encrypted.
     * @param string $cek
     *  The content encryption key.
     * @param string $iv
     *  The initialization vector.
     * @param string $add
     *  The additional authenticated data.
     * @param string|null $tag
     *  The authentication tag.
     *
     * @return string
     *  Returns encrypted data.
     */
    public function encrypt(
        string $data,
        string $cek,
        string $iv,
        string $add,
        ?string &$tag = null
    ): string;

    /**
     * Decrypts the given data.
     *
     * @param string $data
     *  The encrypted data to be decrypted.
     * @param string $cek
     *  The content encryption key.
     * @param string $iv
     *  The initialization vector.
     * @param string $add
     *  The additional authenticated data.
     * @param string|null $tag
     *  The authentication tag.
     *
     * @return string
     *  Returns decrypted data.
     */
    public function decrypt(
        string $data,
        string $cek,
        string $iv,
        string $add,
        ?string $tag = null
    ): string;

    /**
     * Returns the size of the IV.
     *
     * @return int
     */
    public function getIVSize(): int;

    /**
     * Returns the size of the CEK.
     *
     * @return int
     */
    public function getCEKSize(): int;

    /**
     * Gets the cipher algorithm.
     *
     * @return string
     */
    public function getCipherAlgorithm(): string;
}
