<?php

namespace KadokWeb\PathConverter;

/**
 * Convert file paths.
 *
 * Please report bugs on https://github.com/kadokweb/path-converter/issues
 *
 * @author Doka Silva <pathconverter@mullie.eu>
 * @copyright Copyright (c) 2015, Doka Silva. All rights reserved
 * @license MIT License
 */
interface ConverterInterface
{
    /**
     * Convert file paths.
     *
     * @param string $path The path to be converted
     *
     * @return string The new path
     */
    public function convert($path);
}
