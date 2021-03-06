<?php
/**
 * @copyright  Copyright (C) 2018 GrandMasterX. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace grandmasterx\encryptdectypt\interfaces;

/**
 * Interface CryptInterface
 */
interface CryptInterface
{
    /**
     * encrypt
     *
     * @param string $string
     * @param string $key
     * @param string $iv
     *
     * @return  string
     */
    public function encrypt($string, $key = null, $iv = null);

    /**
     * decrypt
     *
     * @param string $string
     * @param string $key
     * @param string $iv
     *
     * @return  string
     */
    public function decrypt($string, $key = null, $iv = null);

    /**
     * match
     *
     * @param string $string
     * @param string $encrypted
     * @param string $key
     * @param string $iv
     *
     * @return  boolean
     */
    public function verify($string, $encrypted, $key = null, $iv = null);
}
