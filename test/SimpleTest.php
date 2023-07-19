<?php

/**
 * SimpleTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Sportmonks
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SportMonks
 *
 * Surpass the competition with superior sports data
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Sportmonks\Test\Api;

use \Sportmonks\Configuration;
use \Sportmonks\ApiException;
use \Sportmonks\ObjectSerializer;
use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * test initialization of clinet
     */
    public function testClient()
    {
        $sportmonks = new \Sportmonks\Client(
            version: "VERSION",
            sport: "SPORT",
            apiKey: "AUTHORIZATION",
        );
    }
}
