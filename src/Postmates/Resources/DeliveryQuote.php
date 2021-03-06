<?php

namespace Postmates\Resources;


class DeliveryQuote extends AbstractResource
{
    /**
     * Base endpoint for Delivery Quote
     *
     * @var string
     */
    protected $endpoint = 'customers/[customer_id]/delivery_quotes';

    /**
     * Get quote for the given pickup and dropoff addresses
     *
     * https://postmates.com/developer/docs/endpoints#get_quote
     *
     * @param $pickup_address
     * @param $dropoff_address
     * @return mixed
     */
    public function getQuote($pickup_address, $dropoff_address)
    {

        return $this
            ->setMethod('POST')
            ->setParams([
                'pickup_address' => $pickup_address,
                'dropoff_address' => $dropoff_address
            ])
            ->send();

    }

}