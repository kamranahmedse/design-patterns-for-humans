<?php

namespace design_patterns\chain_of_responsibility;

use PHPUnit\Framework\TestCase;


/*
// Let's prepare a chain like below
//      $bank->$paypal->$bitcoin
//
// First priority bank
//      If bank can't pay then paypal
//      If paypal can't pay then bit coin

$bank = new Bank(100);          // Bank with balance 100
$paypal = new Paypal(200);      // Paypal with balance 200
$bitcoin = new Bitcoin(300);    // Bitcoin with balance 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Let's try to pay using the first priority i.e. bank
$bank->pay(259);

// Output will be
// ==============
// Cannot pay using bank. Proceeding ..
// Cannot pay using paypal. Proceeding ..:
// Paid 259 using Bitcoin!
*/

class ChainOfResponsibilityTest extends TestCase
{
    public function test01(): void
    {
        $bank = new Bank(100);
        $paypal = new Paypal(200);
        $bitcoin = new Bitcoin(300);

        $bank->setNext($paypal);
        $paypal->setNext($bitcoin);

        self::assertEquals("Cannot pay using Bank. Proceeding ..\nCannot pay using Paypal. Proceeding ..\nPaid 259 using Bitcoin", $bank->pay(259));
    }

    public function test02(): void
    {
        $bank = new Bank(100);
        $paypal = new Paypal(200);
        $bitcoin = new Bitcoin(100);

        $bank->setNext($paypal);
        $paypal->setNext($bitcoin);

        self::assertEquals("Cannot pay using Bank. Proceeding ..\nCannot pay using Paypal. Proceeding ..\nCannot pay, no more accounts in the chain", $bank->pay(259));
    }
}
