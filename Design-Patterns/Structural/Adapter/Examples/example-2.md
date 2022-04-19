# Using Third-Party Packages in Payments
Imagine we have a Payment Service on our platform and we used several payment methods for doing payment by customers.
We have the `PaymentServiceProvider` as a contract for managing all of the payment methods.

## PaymentServiceProvider
```php

interface PaymentServiceProviderContract 
{

    public function doPayment();
}
```

## InnerPaymentProvider

```php

class InnerPaymentProvider implements PaymentServiceProviderContract 
{

    public function doPayment()
    {
        // doing payment according to the Inner Payment structure ...
    }
}
```

## ThirdPartyPackage Class
```php

class ThirdPartyPackage 
{

    private string $apiKey;

    public function getIssuers()
    {
        // return Issuers ...
    }

    public function startToPay()
    {
        // doing payment according to the ThirdParty Package class ...
    }
}
```

> Question: How we can use this ThirdParty Class in our project? we don't have the same methods and compatible structure,... can we copy the class and implement the package's interfaces?! 

The best way for using this ThirdParty Package is to use Adapter Pattern to be compatible with the structures.

## ThirdPartyPackageAdapter class
we'll create an Adapter class to compatible the structure with our existing structure...
```php

class ThirdPartyPackageAdapter implements PaymentServiceProviderContract  
{

    protected $thirdPartyPackage;

    public function __construct(ThirdPartyPackage $thirdPartyPackage)
    {
        $this->thirdPartyPackage = $thirdPartyPackage;
    }

    public function doPayment()
    {
        $this->thirdPartyPackage->startToPay();
    }

}

```