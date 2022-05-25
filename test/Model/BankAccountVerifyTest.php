<?php
/**
 * BankAccountVerifyTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use OpenAPI\Client\Model\BankAccountVerify;
use PHPUnit\Framework\TestCase;

/**
 * BankAccountVerifyTest Class Doc Comment
 *
 * @category    Class
 * @description BankAccountVerify
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class BankAccountVerifyTest extends TestCase
{
    /**
     * Test attribute "amounts"
     * @group bank_account
     * @group unit
     * @group model
     */
    public function testPropertyAmounts()
    {
        $this->markTestIncomplete('Bug: DXP-959');

        $amounts = [1, 2];

        // Procedural
        $bank = new BankAccountVerify();
        $bank->setAmounts($amounts);
        $this->assertEquals($bank->getAmounts(), $amounts);

        // Construction
        $bank = new BankAccountVerify(["amounts" => $amounts]);
        $this->assertEquals($bank->getAmounts(), $amounts);

        // Array Access
        $bank = new BankAccountVerify();
        $bank["amounts"] = $amounts;
        $this->assertEquals($bank->getAmounts(), $amounts);
    }
}