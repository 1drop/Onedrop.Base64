<?php
declare(strict_types=1);
namespace Onedrop\Base64\Eel\Helper;

/*
 * Copyright notice
 *
 * (c) 2018 Onedrop <service@1drop.de>
 *
 * All rights reserved
 */

use Neos\Eel\ProtectedContextAwareInterface;

class Base64Helper implements ProtectedContextAwareInterface
{
    /**
     * Encode the incoming string to base64
     *
     * @param string $string
     *
     * @return string
     */
    public function encode(string $string): string
    {
        return base64_encode($string);
    }

    /**
     * Decode the incoming base64 to string
     *
     * @param string $string
     *
     * @return string
     */
    public function decode(string $string): string
    {
        return base64_decode($string);
    }

    /**
     * @param string $methodName
     *
     * @return bool
     */
    public function allowsCallOfMethod($methodName): bool
    {
        return true;
    }
}
