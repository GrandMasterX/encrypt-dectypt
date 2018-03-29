<?php
/**
 * Part of GrandMasterX project.
 *
 * @copyright  Copyright (C) 2018 GrandMasterX.
 * @license    GNU General Public License version 2 or later.
 */

namespace grandmasterx\encryptdectypt\interfaces;

/**
 * Interface HashInterface
 */
interface HasherInterface
{
    /**
     * create
     *
     * @param string $text
     *
     * @return  string
     */
    public function create($text);

    /**
     * Verify the password.
     *
     * @param   string $text The plain text.
     * @param   string $hash The hashed text.
     *
     * @return  boolean  Verify success or not.
     */
    public function verify($text, $hash);
}
