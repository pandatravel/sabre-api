<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BrandFeatureType extends AbstractModel
{
    /**
     * Indicates if the service is free (F), not offered (N), chargeable (C), or displayed but not offered (D).
     *
     * @var string
     */
    protected $application;
    /**
     * Textual description of the service within the brand.
     *
     * @var string
     */
    protected $commercialName;
    /**
     * Brand Feature Id.
     *
     * @var int
     */
    protected $id;
    /**
     * Ancillaries group code.
     *
     * @var string
     */
    protected $serviceGroup;
    /**
     * Service possible codes. Z- Branded Fares, F-Flight related, T- ticket related ancillary, A- Allowance, P- Prepaid.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Three-character alphanumeric code that is filed in the S5 record. This can be an industry sub-code or a carrier defined sub-code.
     *
     * @var string
     */
    protected $subCode;
    /**
     * Vendor Code or the data provider from where it was taking the information.
     *
     * @var string
     */
    protected $vendor;

    /**
     * Indicates if the service is free (F), not offered (N), chargeable (C), or displayed but not offered (D).
     *
     * @return string
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }

    /**
     * Indicates if the service is free (F), not offered (N), chargeable (C), or displayed but not offered (D).
     *
     * @param string $application
     *
     * @return self
     */
    public function setApplication(?string $application): self
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Textual description of the service within the brand.
     *
     * @return string
     */
    public function getCommercialName(): ?string
    {
        return $this->commercialName;
    }

    /**
     * Textual description of the service within the brand.
     *
     * @param string $commercialName
     *
     * @return self
     */
    public function setCommercialName(?string $commercialName): self
    {
        $this->commercialName = $commercialName;

        return $this;
    }

    /**
     * Brand Feature Id.
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Brand Feature Id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Ancillaries group code.
     *
     * @return string
     */
    public function getServiceGroup(): ?string
    {
        return $this->serviceGroup;
    }

    /**
     * Ancillaries group code.
     *
     * @param string $serviceGroup
     *
     * @return self
     */
    public function setServiceGroup(?string $serviceGroup): self
    {
        $this->serviceGroup = $serviceGroup;

        return $this;
    }

    /**
     * Service possible codes. Z- Branded Fares, F-Flight related, T- ticket related ancillary, A- Allowance, P- Prepaid.
     *
     * @return string
     */
    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    /**
     * Service possible codes. Z- Branded Fares, F-Flight related, T- ticket related ancillary, A- Allowance, P- Prepaid.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(?string $serviceType): self
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Three-character alphanumeric code that is filed in the S5 record. This can be an industry sub-code or a carrier defined sub-code.
     *
     * @return string
     */
    public function getSubCode(): ?string
    {
        return $this->subCode;
    }

    /**
     * Three-character alphanumeric code that is filed in the S5 record. This can be an industry sub-code or a carrier defined sub-code.
     *
     * @param string $subCode
     *
     * @return self
     */
    public function setSubCode(?string $subCode): self
    {
        $this->subCode = $subCode;

        return $this;
    }

    /**
     * Vendor Code or the data provider from where it was taking the information.
     *
     * @return string
     */
    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    /**
     * Vendor Code or the data provider from where it was taking the information.
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }
}
