<?php

namespace Amadeus\Client\Struct\Travel\ServiceList;

use Amadeus\Client\Struct\Travel\ShoppingResponse;

/**
 * Request
 *
 * @package Amadeus\Client\Struct\Travel\ServiceList
 * @author Artem Zakharchenko <artz.relax@gmail.com>
 */
class Request
{
    /**
     * @var CoreRequest
     */
    public $CoreRequest;

    /**
     * @var ShoppingResponse
     */
    public $ShoppingResponse;

    public function __construct(CoreRequest $coreRequest)
    {
        $this->CoreRequest = $coreRequest;
    }

    public function setShoppingResponse(ShoppingResponse $ShoppingResponse)
    {
        $this->ShoppingResponse = $ShoppingResponse;
    }
}
