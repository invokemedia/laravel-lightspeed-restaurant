<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class Accounting extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/accounting/";
    }

    /**
     *    Get clocktimes
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/accounting/getProductSalesAnalyticsUsingGET
     *
     * @param  string $from
     * @param  string $to
     * @return $this
     */
    public function getProductSalesAnalytics($from, $to)
    {
        $endpoint = $this->endpoint("/analytics/productsales");
        $query = $this->query(
            [
            'from' => $from,
            'to'   => $to
            ]
        );
        return $this->client->get($endpoint.$query);
    }
}
