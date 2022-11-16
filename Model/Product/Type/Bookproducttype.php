<?php
declare(strict_types=1);

namespace Magelearn\BookProductType\Model\Product\Type;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\AbstractType;

/**
 * Book product type implementation
 */
class Bookproducttype extends AbstractType
{
    /**
     * Product type code
     */
    const TYPE_CODE = 'book';

    /**
     * Delete data specific for Simple product type
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return void
     */
    public function deleteTypeSpecificData(Product $product)
    {
    }
}