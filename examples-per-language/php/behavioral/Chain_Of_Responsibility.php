<?php

use designPatternsForHumans\behavioral\Chain_Of_Responsibility\Bank;
use designPatternsForHumans\behavioral\Chain_Of_Responsibility\BitCoin;
use designPatternsForHumans\behavioral\Chain_Of_Responsibility\Paypal;

require_once __DIR__ . '/autoload.php';

// Let's prepare a chain like below
//      $bank->$paypal->$bitcoin

$bank = new Bank(100);
$paypal = new Paypal(200);
$bitcoin = new BitCoin(300);

//      First priority bank
//      If bank can't pay then paypal
//      If paypal can't pay then bit coin.
$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Let's try and pay our bill.
$bank->pay(259);