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

use phpreboot\util\BaseObject as Object;

class BaseObjectTest  extends \PHPUnit_Framework_TestCase
{
    /** @var Object */
    private $object;

    public function testBaseObjectCanBeCreated()
    {
        $this->assertInstanceOf('phpreboot\util\BaseObject',
            $this->object,
            "BaseObject instance could not be created.");
    }

    public function testBaseObjectCanBeCloned()
    {
        $this->assertEquals($this->object,
            $this->object->getClone(),
            "Cloned object is not same as original.");
    }

    public function testBaseObjectCanBeCpmoared()
    {
        $object = new Object();
        $this->assertTrue($this->object->equals($object));
    }

    public function setup()
    {
        $this->object = new Object();
    }

    public function tearDown()
    {
        $this->object = null;
    }
}