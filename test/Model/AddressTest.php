<?php
/**
 * AddressTest
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

use OpenAPI\Client\Model\Address;
use OpenAPI\Client\Model\CountryExtendedExpanded;
use PHPUnit\Framework\TestCase;

/**
 * AddressTest Class Doc Comment
 *
 * @category    Class
 * @description Address
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AddressTest extends TestCase
{
    /**
     * Test attribute "id"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyId()
    {
        // Procedural
        $address = new Address();
        $address->setId("adr_fake");
        $this->assertEquals($address->getId(), "adr_fake");

        // Construction
        $address = new Address(["id" => "adr_fake2"]);
        $this->assertEquals($address->getId(), "adr_fake2");

        // Array Access
        $address = new Address();
        $address["id"] = "adr_fake3";
        $this->assertEquals($address->getId(), "adr_fake3");
    }

    /**
     * Test attribute "id"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyIdException()
    {
        // Procedural
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setId("NOPE");
    }

    /**
     * Test attribute "description"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyDescription()
    {
        // Procedural
        $address = new Address();
        $address->setDescription("fake");
        $this->assertEquals($address->getDescription(), "fake");

        // Construction
        $address = new Address(["description" => "fake2"]);
        $this->assertEquals($address->getDescription(), "fake2");

        // Array Access
        $address = new Address();
        $address["description"] = "fake3";
        $this->assertEquals($address->getDescription(), "fake3");
    }

    /**
     * Test attribute "description"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyDescriptionException()
    {
        // Procedural
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setDescription(str_repeat("N", 300));
    }

    /**
     * Test attribute "name"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyName()
    {
        // Procedural
        $address = new Address();
        $address->setName("fake");
        $this->assertEquals($address->getName(), "fake");

        // Construction
        $address = new Address(["name" => "fake2"]);
        $this->assertEquals($address->getName(), "fake2");

        // Array Access
        $address = new Address();
        $address["name"] = "fake3";
        $this->assertEquals($address->getName(), "fake3");
    }

    /**
     * Test attribute "name"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyNameException()
    {
        // Procedural
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setName(str_repeat("N", 100));
    }

    /**
     * Test attribute "company"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyCompany()
    {
        // Procedural
        $address = new Address();
        $address->setCompany("fake");
        $this->assertEquals($address->getCompany(), "fake");

        // Construction
        $address = new Address(["company" => "fake2"]);
        $this->assertEquals($address->getCompany(), "fake2");

        // Array Access
        $address = new Address();
        $address["company"] = "fake3";
        $this->assertEquals($address->getCompany(), "fake3");
    }

    /**
     * Test attribute "company"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyCompanyException()
    {
        // Procedural
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setCompany(str_repeat("N", 100));
    }

    /**
     * Test attribute "phone"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyPhone()
    {
        // Procedural
        $address = new Address();
        $address->setPhone("fake");
        $this->assertEquals($address->getPhone(), "fake");

        // Construction
        $address = new Address(["phone" => "fake2"]);
        $this->assertEquals($address->getPhone(), "fake2");

        // Array Access
        $address = new Address();
        $address["phone"] = "fake3";
        $this->assertEquals($address->getPhone(), "fake3");
    }

    /**
     * Test attribute "phone"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyPhoneException()
    {
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setPhone(str_repeat("N", 100));
    }

    /**
     * Test attribute "email"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyEmail()
    {
        // Procedural
        $address = new Address();
        $address->setEmail("fake@email.com");
        $this->assertEquals($address->getEmail(), "fake@email.com");

        // Construction
        $address = new Address(["email" => "fake2@email.com"]);
        $this->assertEquals($address->getEmail(), "fake2@email.com");

        // Array Access
        $address = new Address();
        $address["email"] = "fake3@email.com";
        $this->assertEquals($address->getEmail(), "fake3@email.com");
    }

    /**
     * Test attribute "email"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyEmailException()
    {
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setEmail(str_repeat("N", 200));
    }

    /**
     * Test attribute "metadata"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyMetadata()
    {
        // Procedural
        $address = new Address();
        $address->setMetadata(["campaign" => "fake"]);
        $this->assertEquals($address->getMetadata()["campaign"], "fake");

        // Construction
        $address = new Address(["metadata" => ["campaign" => "fake2"]]);
        $this->assertEquals($address->getMetadata()["campaign"], "fake2");

        // Array Access
        $address = new Address();
        $address["metadata"] = ["campaign" => "fake3"];
        $this->assertEquals($address->getMetadata()["campaign"], "fake3");
    }

    /**
     * Test attribute "address_line1"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressLine1()
    {
        // Procedural
        $address = new Address();
        $address->setAddressLine1("fake");
        $this->assertEquals($address->getAddressLine1(), "fake");

        // Construction
        $address = new Address(["address_line1" => "fake2"]);
        $this->assertEquals($address->getAddressLine1(), "fake2");

        // Array Access
        $address = new Address();
        $address["address_line1"] = "fake3";
        $this->assertEquals($address->getAddressLine1(), "fake3");
    }

    /**
     * Test attribute "address_line1"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressLine1Exception()
    {
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setAddressLine1(str_repeat("N", 65));
    }

    /**
     * Test attribute "address_line2"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressLine2()
    {
        // Procedural
        $address = new Address();
        $address->setAddressLine2("fake");
        $this->assertEquals($address->getAddressLine2(), "fake");

        // Construction
        $address = new Address(["address_line2" => "fake2"]);
        $this->assertEquals($address->getAddressLine2(), "fake2");

        // Array Access
        $address = new Address();
        $address["address_line2"] = "fake3";
        $this->assertEquals($address->getAddressLine2(), "fake3");
    }

    /**
     * Test attribute "address_line2"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressLine2Exception()
    {
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setAddressLine2(str_repeat("N", 65));
    }

    /**
     * Test attribute "address_city"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressCity()
    {
        // Procedural
        $address = new Address();
        $address->setAddressCity("fake");
        $this->assertEquals($address->getAddressCity(), "fake");

        // Construction
        $address = new Address(["address_city" => "fake2"]);
        $this->assertEquals($address->getAddressCity(), "fake2");

        // Array Access
        $address = new Address();
        $address["address_city"] = "fake3";
        $this->assertEquals($address->getAddressCity(), "fake3");
    }

    /**
     * Test attribute "address_city"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressCityException()
    {
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setAddressCity(str_repeat("N", 300));
    }

    /**
     * Test attribute "address_state"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressState()
    {
        // Procedural
        $address = new Address();
        $address->setAddressState("CA");
        $this->assertEquals($address->getAddressState(), "CA");

        // Construction
        $address = new Address(["address_state" => "NY"]);
        $this->assertEquals($address->getAddressState(), "NY");

        // Array Access
        $address = new Address();
        $address["address_state"] = "NJ";
        $this->assertEquals($address->getAddressState(), "NJ");
    }

    /**
     * Test attribute "address_state"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressStateException()
    {
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setAddressState(str_repeat("N", 5));
    }

    /**
     * Test attribute "address_zip"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressZip()
    {
        // Procedural
        $address = new Address();
        $address->setAddressZip("00000");
        $this->assertEquals($address->getAddressZip(), "00000");

        // Construction
        $address = new Address(["address_zip" => "11111"]);
        $this->assertEquals($address->getAddressZip(), "11111");

        // Array Access
        $address = new Address();
        $address["address_zip"] = "22222";
        $this->assertEquals($address->getAddressZip(), "22222");
    }

    /**
     * Test attribute "address_zip"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressZipException()
    {
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setAddressZip("abscd");
    }

    /**
     * Test attribute "address_country"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyAddressCountry()
    {
        // Procedural
        $address = new Address();
        $address->setAddressCountry(CountryExtendedExpanded::UNITED_STATES);
        $this->assertEquals($address->getAddressCountry(), CountryExtendedExpanded::UNITED_STATES);

        // Construction
        $address = new Address(["address_country" => CountryExtendedExpanded::UNITED_KINGDOM]);
        $this->assertEquals($address->getAddressCountry(), CountryExtendedExpanded::UNITED_KINGDOM);

        // Array Access
        $address = new Address();
        $address["address_country"] = CountryExtendedExpanded::FRANCE;
        $this->assertEquals($address->getAddressCountry(), CountryExtendedExpanded::FRANCE);
    }

    /**
     * Test attribute "recipient_moved"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyRecipientMoved()
    {
        // Procedural
        $address = new Address();
        $address->setRecipientMoved(true);
        $this->assertEquals($address->getRecipientMoved(), true);

        // Construction
        $address = new Address(["recipient_moved" => false]);
        $this->assertEquals($address->getRecipientMoved(), false);

        // Array Access
        $address = new Address();
        $address["recipient_moved"] = true;
        $this->assertEquals($address->getRecipientMoved(), true);
    }

    /** **** **** **** **** **** **/
    /** Generic Model Properties **/
    /** **** **** **** **** **** **/

    /**
     * Test attribute "object"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyObject()
    {
        // Procedural
        $address = new Address();
        $address->setObject("address");
        $this->assertEquals($address->getObject(), "address");

        // Construction
        $address = new Address(["object" => "address"]);
        $this->assertEquals($address->getObject(), "address");

        // Array Access
        $address = new Address();
        $address["object"] = "address";
        $this->assertEquals($address->getObject(), "address");
    }

    /**
     * Test attribute "object"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyObjectException()
    {
        // Procedural
        $address = new Address();
        $this->expectException(\InvalidArgumentException::class);
        $address->setObject("NOPE");
    }

    /**
     * Test attribute "date_created"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyDateCreated()
    {
        // Procedural
        $address = new Address();
        $address->setDateCreated(new \DateTime('2000-01-01'));
        $this->assertEquals($address->getDateCreated(), new \DateTime('2000-01-01'));

        // Construction
        $address = new Address(["date_created" => new \DateTime('2000-01-01')]);
        $this->assertEquals($address->getDateCreated(), new \DateTime('2000-01-01'));

        // Array Access
        $address = new Address();
        $address["date_created"] = new \DateTime('2000-01-01');
        $this->assertEquals($address->getDateCreated(), new \DateTime('2000-01-01'));
    }

    /**
     * Test attribute "date_modified"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyDateModified()
    {
        // Procedural
        $address = new Address();
        $address->setDateModified(new \DateTime('2000-01-01'));
        $this->assertEquals($address->getDateModified(), new \DateTime('2000-01-01'));

        // Construction
        $address = new Address(["date_modified" => new \DateTime('2000-01-01')]);
        $this->assertEquals($address->getDateModified(), new \DateTime('2000-01-01'));

        // Array Access
        $address = new Address();
        $address["date_modified"] = new \DateTime('2000-01-01');
        $this->assertEquals($address->getDateModified(), new \DateTime('2000-01-01'));
    }

    /**
     * Test attribute "deleted"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyDeleted()
    {
        // Procedural
        $address = new Address();
        $address->setDeleted(true);
        $this->assertEquals($address->getDeleted(), true);

        // Construction
        $address = new Address(["deleted" => false]);
        $this->assertEquals($address->getDeleted(), false);

        // Array Access
        $address = new Address();
        $address["deleted"] = true;
        $this->assertEquals($address->getDeleted(), true);
    }

    /** **** **** **** **** **** **/
    /**  Generic Model Helpers   **/
    /** **** **** **** **** **** **/

    /**
     * Test attribute "ModelName"
     * @group address
     * @group unit
     * @group model
     */
    public function testPropertyModelName()
    {
        $address = new Address();
        $this->assertEquals($address->getModelName(), "address");
    }

    /**
     * Test attribute "ListInvalidProperties"
     * @group address
     * @group unit
     * @group model
     */
    public function testValidProperties()
    {
        $address = new Address();
        $address["id"] = "NOPE";
        $address["description"] = str_repeat("N", 300);
        $address["name"] = str_repeat("N", 50);
        $address["company"] = str_repeat("N", 50);
        $address["phone"] = str_repeat("N", 50);
        $address["email"] = str_repeat("N", 150);
        $address["address_line1"] = str_repeat("N", 70);
        $address["address_line2"] = str_repeat("N", 70);
        $address["address_city"] = str_repeat("N", 225);
        $address["address_state"] = "12";
        $address["address_zip"] = "XYZ";

        $invalidPros = $address->listInvalidProperties();
        $this->assertEquals(count($invalidPros), 11);
        $this->assertEquals($address->valid(), false);
    }

    /**
     * Tests for alternative property accessors
     * @group address
     * @group unit
     * @group model
     */
    public function testGenericProperties()
    {
        $list = new Address();
        $list->offsetSet('object', 'address');
        $this->assertEquals($list->offsetExists('object'), true);
        $this->assertEquals($list->offsetGet('object'), 'address');
        $list->offsetUnset('object');
        $this->assertEquals($list->offsetGet('object'), null);
    }

}