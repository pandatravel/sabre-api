<?php

namespace Ammonkc\SabreApi\Api;

/**
 * Listing packages, showing, and updating
 *
 * @link   https://ptpkg.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class TravelTheme extends AbstractApi
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $endpoint = '/lists/supported/shop/themes/';

    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return $this->endpoint_base . $this->endpoint;
    }

    /**
     * List packages
     *
     * @link https://ptpkg.com/api/v1/packages/
     *
     * @param array  $params     the additional parameters
     *
     * @return array list of packages found
     */
    public function all(array $params = [])
    {
        return $this->get($this->getEndpoint());
    }
}
