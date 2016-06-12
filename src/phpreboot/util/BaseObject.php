<?php
/**
 * This file is part of the PHPReboot/Stopwatch package.
 *
 * Copyright (c) 2016 PHP Reboot, Kapil Sharma <kapil@kapilsharma.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpreboot\util;

/**
 * Class BaseObject
 *
 * BaseObject, as the name suggest is the parent class of all the classes
 * in phpreboot\util package. This class provide few wrapper/utility functions,
 * that are expected in all the classes.
 *
 * @package phpreboot\util
 */
class BaseObject {
    /**
     * Make a clone of self.
     *
     * @return BaseObject
     */
    public function getClone()
    {
        return clone $this;
    }

    /**
     * Check if supplied parameter is equal to self.
     *
     * @param BaseObject $object
     * @return bool
     */
    public function equals(BaseObject $object)
    {
        return $this == $object;
    }
}