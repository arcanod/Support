<?php namespace Arcanedev\Support\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

/**
 * Class TestCase
 * @package Arcanedev\Support\Tests
 */
abstract class TestCase extends BaseTestCase
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }
}
