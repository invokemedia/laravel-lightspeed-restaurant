<?php

namespace AntwerpFactory\LightspeedRestaurant\Api;

class OnlineOrdering extends Api
{
    /**
     *    Return the endpoint
     *
     * @return string
     */
    public function endpointbase()
    {
        return "/PosServer/rest/onlineordering";
    }

    /**
     *    Get customers
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/createCustomerUsingPOST_1
     */
    public function getCustomers(array $data = null)
    {
        $endpoint = $this->endpoint("/customer");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Create customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/createCustomerUsingPOST_1
     */
    public function createCustomer(array $data)
    {
        $endpoint = $this->endpoint("/customer");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Get customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getCustomerUsingGET_1
     */
    public function getCustomer($customerId)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Update customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getCustomerUsingGET_1
     */
    public function updateCustomer($customerId, array $data)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}");
        return $this->client->put($endpoint, $data);
    }

    /**
     *    Create order for customer in establishment
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/createOrderForCustomerInEstablishmentUsingPOST
     */
    public function createOrderForCustomerInEstablishment($customerId, array $data)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/establishmentorder");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Get orders for customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getOrdersForCustomerUsingGET
     */
    public function getOrdersForCustomer($customerId, array $data = null)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/order");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Create order for customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/createOrderForCustomerUsingPOST
     */
    public function createOrderForCustomer($customerId, array $data)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/order");
        return $this->client->post($endpoint, $data);
    }

    /**
     *    Get order for customer
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getOrderForCustomerUsingGET
     */
    public function getOrderForCustomer($customerId, $orderId)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/order/{$orderId}");
        return $this->client->get($endpoint);
    }

    /**
     *    Update order partial
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/updateOrderPartialUsingPATCH
     */
    public function updateOrderPartial($customerId, $orderId, array $data)
    {
        $endpoint = $this->endpoint("/customer/{$customerId}/order/{$orderId}");
        return $this->client->patch($endpoint, $data);
    }

    /**
     *    Get features
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getFeaturesUsingGET
     */
    public function getFeatures()
    {
        $endpoint = $this->endpoint("/feature");
        return $this->client->get($endpoint);
    }

    /**
     *    Get orders
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getOrdersUsingGET
     */
    public function getOrders(array $data = null)
    {
        $endpoint = $this->endpoint("/order");
        $query = $this->query($data);
        return $this->client->get($endpoint.$query);
    }

    /**
     *    Get payment types
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getPaymentTypesUsingGET
     */
    public function getPaymentTypes()
    {
        $endpoint = $this->endpoint("/paymenttype");
        return $this->client->get($endpoint);
    }

    /**
     *    Get tax clasess
     *
     * @see http://staging-integration.posios.com/PosServer/swagger-ui.html#!/online-ordering/getTaxClassesUsingGET
     */
    public function getTaxClasses()
    {
        $endpoint = $this->endpoint("/taxclass");
        return $this->client->get($endpoint);
    }
}
