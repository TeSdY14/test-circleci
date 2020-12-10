<?php


namespace App\Tests\Entity;


use App\Entity\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{

    public function testSettingCustomerFirstName()
    {
        $customer = new Customer();
        $firstName = "Paul";

        $customer->setFirstName($firstName);
        $this->assertEquals($firstName, $customer->getFirstname());
    }

    public function testSettingCustomerLastName()
    {
        $customer = new Customer();
        $lastName = "Moncul";

        $customer->setLastName($lastName);
        $this->assertEquals($lastName, $customer->getLastname());
    }

    public function testReturnsCustomerFullName()
    {
        $customer = new Customer();
        $customer->setFirstName("Thomas");
        $customer->setLastName("Jessye");

        $fullName = $customer->getFirstname() . ' ' . $customer->getLastname();

        $this->assertEquals($fullName, $customer);
    }

//    public function testReturnsCustomerFullNameInError()
//    {
//        $customer = new Customer();
//        $customer->setFirstName("Thomas");
//        $customer->setLastName("Jessye");
//
//        $fullName = $customer->getFirstname() . ' yO ' . $customer->getLastname();
//
//        $this->assertEquals($fullName, $customer);
//    }

}