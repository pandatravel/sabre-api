<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiers extends AbstractModel
{
    /**
     * Used to define a single form of payment. BasicFOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing, or .../MultipleCC_FOP.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP
     */
    protected $basicFOP;
    /**
     * Used to define forms of payment acceptable within BSP region. BSP_Ticketing cannot combine with .../SabreSonicTicketing, or .../MultipleCC_FOP.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing
     */
    protected $bSPTicketing;
    /**
     * Used to specify multiple credit card form of payment. Multiple CC_FOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP
     */
    protected $multipleCCFOP;
    /**
     * Valid for SabreSonic-based airlines. SabreSonicTicketing cannot combine with .../BSP_Ticketing. or .../MultipleCC_FOP.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing
     */
    protected $sabreSonicTicketing;
    /**
     * This attribute is not in use.
     *
     * @var bool
     */
    protected $ignoreStoredFOP;

    /**
     * Used to define a single form of payment. BasicFOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing, or .../MultipleCC_FOP.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP
     */
    public function getBasicFOP(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP
    {
        return $this->basicFOP;
    }

    /**
     * Used to define a single form of payment. BasicFOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing, or .../MultipleCC_FOP.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP $basicFOP
     *
     * @return self
     */
    public function setBasicFOP(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP $basicFOP): self
    {
        $this->basicFOP = $basicFOP;

        return $this;
    }

    /**
     * Used to define forms of payment acceptable within BSP region. BSP_Ticketing cannot combine with .../SabreSonicTicketing, or .../MultipleCC_FOP.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing
     */
    public function getBSPTicketing(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing
    {
        return $this->bSPTicketing;
    }

    /**
     * Used to define forms of payment acceptable within BSP region. BSP_Ticketing cannot combine with .../SabreSonicTicketing, or .../MultipleCC_FOP.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing $bSPTicketing
     *
     * @return self
     */
    public function setBSPTicketing(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing $bSPTicketing): self
    {
        $this->bSPTicketing = $bSPTicketing;

        return $this;
    }

    /**
     * Used to specify multiple credit card form of payment. Multiple CC_FOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP
     */
    public function getMultipleCCFOP(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP
    {
        return $this->multipleCCFOP;
    }

    /**
     * Used to specify multiple credit card form of payment. Multiple CC_FOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP $multipleCCFOP
     *
     * @return self
     */
    public function setMultipleCCFOP(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP $multipleCCFOP): self
    {
        $this->multipleCCFOP = $multipleCCFOP;

        return $this;
    }

    /**
     * Valid for SabreSonic-based airlines. SabreSonicTicketing cannot combine with .../BSP_Ticketing. or .../MultipleCC_FOP.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing
     */
    public function getSabreSonicTicketing(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing
    {
        return $this->sabreSonicTicketing;
    }

    /**
     * Valid for SabreSonic-based airlines. SabreSonicTicketing cannot combine with .../BSP_Ticketing. or .../MultipleCC_FOP.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing $sabreSonicTicketing
     *
     * @return self
     */
    public function setSabreSonicTicketing(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing $sabreSonicTicketing): self
    {
        $this->sabreSonicTicketing = $sabreSonicTicketing;

        return $this;
    }

    /**
     * This attribute is not in use.
     *
     * @return bool
     */
    public function getIgnoreStoredFOP(): ?bool
    {
        return $this->ignoreStoredFOP;
    }

    /**
     * This attribute is not in use.
     *
     * @param bool $ignoreStoredFOP
     *
     * @return self
     */
    public function setIgnoreStoredFOP(?bool $ignoreStoredFOP): self
    {
        $this->ignoreStoredFOP = $ignoreStoredFOP;

        return $this;
    }
}