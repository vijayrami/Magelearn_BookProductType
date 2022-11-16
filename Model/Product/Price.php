<?php
declare(strict_types=1);

namespace Magelearn\BookProductType\Model\Product;

/**
 * Class Price
 * @package Magelearn\BookProductType\Model\Product
 */
class Price extends \Magento\Catalog\Model\Product\Type\Price
{
    /**
     * Default action to get price of product
     *
     * @param Product $product
     * @return float
     */
    public function getPrice($product)
    {
        return $product->getData('price')*1.25;
    }
}