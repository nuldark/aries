<?php

/*
 * This file is part of the nuldark/aries.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Aries;

interface Algorithm
{
    /**
     * Gets the algorithm name.
     *
     * @return string
     *  Returns the algorithm name.
     */
    public function name(): string;
}
