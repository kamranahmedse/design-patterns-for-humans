<?php

namespace design_patterns\chain_of_responsibility;

abstract class Account
{
    protected ?Account $next = null;
    protected float $balance;

    public function setNext(Account $account): void
    {
        $this->next = $account;
    }

    public function pay(float $amountToPay): string
    {
        if ($this->canPay($amountToPay)) {
            return $this->payUsing($amountToPay);
        }

        if ($this->next) {
            return $this->cantPayUsing() . $this->next->pay($amountToPay);
        }

        return 'Cannot pay, no more accounts in the chain';
    }

    private function canPay(float $amount): bool
    {
        return $this->balance >= $amount;
    }

    private function payUsing(float $amountToPay): string
    {
        $this->balance -= $amountToPay;

        return sprintf('Paid %s using %s', $amountToPay, $this->getClassName());
    }

    private function cantPayUsing(): string
    {
        return sprintf('Cannot pay using %s. Proceeding ..' . PHP_EOL, $this->getClassName());
    }

    private function getClassName(): string
    {
        $className = explode('\\', static::class);
        return array_pop($className);
    }
}
