<?php

namespace Gpupo\SubmarinoSdk\Entity\Product\Sku;

use Gpupo\CommonSdk\Entity\EntityAbstract;
use Gpupo\CommonSdk\Entity\EntityInterface;

class Sku extends EntityAbstract implements EntityInterface
{
    public function getSchema()
    {
        return [
            'id'            => 'string',
            'name'          => 'string',
            'description'   => 'string',
            'ean'           => 'array',
            'height'        => 'number',
            'width'         => 'number',
            'length'        => 'number',
            'weight'        => 'number',
            'stockQuantity' => 'integer',
            'enable'        => 'boolean',
            'price'         => 'object',
            'updatedAt'     => 'string',
        ];
    }

    protected function toStock()
    {
        return $this->piece('stockQuantity', 'quantity');
    }

    protected function setUp()
    {
        $this->setOptionalSchema(['height','width','length']);
    }

}
