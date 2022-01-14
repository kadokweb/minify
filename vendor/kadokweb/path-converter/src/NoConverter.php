<?php

namespace KadokWeb\PathConverter;

/**
 * Don't convert paths.
 *
 * Please report bugs on https://github.com/kadokweb/path-converter/issues
 *
 * @author Doka Silva <pathconverter@mullie.eu>
 * @copyright Copyright (c) 2015, Doka Silva. All rights reserved
 * @license MIT License
 */
class NoConverter implements ConverterInterface
{
    /**
     * {@inheritdoc}
     */
    public function convert($path)
    {
        return $path;
    }
}
