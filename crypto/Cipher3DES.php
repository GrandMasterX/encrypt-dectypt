<?php
/**
 * Part of GrandMasterX project.
 *
 * @copyright  Copyright (C) 2018 GrandMasterX. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace grandmasterx\encryptdectypt\crypto;

use grandmasterx\encryptdectypt\abstracts\AbstractMcryptCipher;

/**
 * The Cipher3DES class.
 *
 * @deprecated  PHP7 already deprecated mcrypt extension
 */
class Cipher3DES extends AbstractMcryptCipher
{
    /**
     * @var    integer  The mcrypt cipher constant.
     * @see    http://www.php.net/manual/en/mcrypt.ciphers.php
     * @since  2.0
     */
    protected $type = MCRYPT_3DES;

    /**
     * @var    integer  The mcrypt block cipher mode.
     * @see    http://www.php.net/manual/en/mcrypt.constants.php
     * @since  2.0
     */
    protected $mode = MCRYPT_MODE_CBC;
}
