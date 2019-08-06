<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BrandFeatureIDType extends AbstractModel
{
    /**
     * Reference to BrandFeature ID.
     *
     * @var int
     */
    protected $ref;
    /**
     * The unique identifier of a service within the context of one message. A service is a feature/service included in a given flight.
     *
     * @var string
     */
    protected $serviceId;

    /**
     * Reference to BrandFeature ID.
     *
     * @return int
     */
    public function getRef(): int
    {
        return $this->ref;
    }

    /**
     * Reference to BrandFeature ID.
     *
     * @param int $ref
     *
     * @return self
     */
    public function setRef(int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * The unique identifier of a service within the context of one message. A service is a feature/service included in a given flight.
     *
     * @return string
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * The unique identifier of a service within the context of one message. A service is a feature/service included in a given flight.
     *
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId(string $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }
}
