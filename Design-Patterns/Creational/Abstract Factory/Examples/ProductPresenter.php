<?php

/// Download Products 
interface Downloadable
{
    public function download();
}

class DownloadableProduct implements Downloadable
{
    public function download()
    {
        return 'download product';
    }

    public function fileDetail()
    {
        return 'file detail';
    }
}

/// Real Product
interface Physical
{
    public function getProduct();
    public function productDetail();
}

class RealProduct implements Physical
{
    public function getProduct()
    {
        return 'product page url';
    }

    public function productDetail()
    {
        return 'product detail';
    }
}


/// Real Product
interface HumanService
{
    public function getService();

    public function serviceDetail();
}

class ServiceProduct implements HumanService
{
    public function getService()
    {
        return 'get service detail';
    }

    public function serviceDetail()
    {
        return 'get service detail';
    }
}



/// PRODUCT INTERFACE AND CLASS 
interface Product 
{
    public function getProduct();

    public function productDetail();
}


class DownloadableProductController implements Product
{

    public function getProduct()
    {
        $product = new DownloadableProduct();
        return $product->download();
    }

    public function productDetail()
    {
        $product = new DownloadableProduct();
        return $product->fileDetail();
    }

}

class RealProductController implements Product
{

    public function getProduct()
    {
        $product = new RealProduct();
        return $product->getProduct();
    }

    public function productDetail()
    {
        $product = new RealProduct();
        return $product->productDetail();
    }

}

