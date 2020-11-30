<?php

namespace designPatternsForHumans\behavioral\Chain_Of_Responsibility;

abstract class Account
{
    protected $balance;
    /** @var  Account */
    protected $successor;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay($amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay,
              get_called_class());
        } elseif ($this->successor) {
            echo sprintf('Cannot pay using %s. Proceeding ...' . PHP_EOL,
              get_called_class());
            $this->successor->pay($amountToPay);
        } else {
            throw new \Exception('None of the accounts have enough balance');
        }
    }

    public function canPay($amount)
    {
        return $this->balance >= $amount;
    }
}
