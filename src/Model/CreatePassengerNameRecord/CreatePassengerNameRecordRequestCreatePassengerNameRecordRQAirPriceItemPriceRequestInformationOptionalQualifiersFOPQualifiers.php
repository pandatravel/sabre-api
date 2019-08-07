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
     * Used to define a single form of payment.
    'BasicFOP' cannot be combined with 'BSP_Ticketing', or 'SabreSonicTicketing', or 'MultipleCC_FOP'.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP
     */
    protected $basicFOP;
    /**
     * Used to define forms of payment acceptable within BSP region.
    'BSP_Ticketing' cannot be combined with 'SabreSonicTicketing', or 'MultipleCC_FOP'

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing
     */
    protected $bSPTicketing;
    /**
     * Used to specify multiple credit card form of payment.
    'MultipleCC_FOP' cannot be combined with 'BSP_Ticketing', or 'SabreSonicTicketing'.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP
     */
    protected $multipleCCFOP;
    /**
     * Valid for SabreSonic-based airlines.
    'SabreSonicTicketing' cannot be combined with 'BSP_Ticketing' or 'MultipleCC_FOP'.

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
     * Used to define a single form of payment.
    'BasicFOP' cannot be combined with 'BSP_Ticketing', or 'SabreSonicTicketing', or 'MultipleCC_FOP'.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP|null
     */
    public function getBasicFOP(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP
    {
        return $this->basicFOP;
    }

    /**
     * Used to define a single form of payment.
    'BasicFOP' cannot be combined with 'BSP_Ticketing', or 'SabreSonicTicketing', or 'MultipleCC_FOP'.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP|null $basicFOP
     *
     * @return self
     */
    public function setBasicFOP(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP $basicFOP): self
    {
        $this->basicFOP = $basicFOP;

        return $this;
    }

    /**
     * Used to define forms of payment acceptable within BSP region.
    'BSP_Ticketing' cannot be combined with 'SabreSonicTicketing', or 'MultipleCC_FOP'

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing|null
     */
    public function getBSPTicketing(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing
    {
        return $this->bSPTicketing;
    }

    /**
     * Used to define forms of payment acceptable within BSP region.
    'BSP_Ticketing' cannot be combined with 'SabreSonicTicketing', or 'MultipleCC_FOP'

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing|null $bSPTicketing
     *
     * @return self
     */
    public function setBSPTicketing(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing $bSPTicketing): self
    {
        $this->bSPTicketing = $bSPTicketing;

        return $this;
    }

    /**
     * Used to specify multiple credit card form of payment.
    'MultipleCC_FOP' cannot be combined with 'BSP_Ticketing', or 'SabreSonicTicketing'.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP|null
     */
    public function getMultipleCCFOP(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP
    {
        return $this->multipleCCFOP;
    }

    /**
     * Used to specify multiple credit card form of payment.
    'MultipleCC_FOP' cannot be combined with 'BSP_Ticketing', or 'SabreSonicTicketing'.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP|null $multipleCCFOP
     *
     * @return self
     */
    public function setMultipleCCFOP(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersMultipleCCFOP $multipleCCFOP): self
    {
        $this->multipleCCFOP = $multipleCCFOP;

        return $this;
    }

    /**
     * Valid for SabreSonic-based airlines.
    'SabreSonicTicketing' cannot be combined with 'BSP_Ticketing' or 'MultipleCC_FOP'.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing|null
     */
    public function getSabreSonicTicketing(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing
    {
        return $this->sabreSonicTicketing;
    }

    /**
     * Valid for SabreSonic-based airlines.
    'SabreSonicTicketing' cannot be combined with 'BSP_Ticketing' or 'MultipleCC_FOP'.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketing|null $sabreSonicTicketing
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
     * @return bool|null
     */
    public function getIgnoreStoredFOP(): ?bool
    {
        return $this->ignoreStoredFOP;
    }

    /**
     * This attribute is not in use.
     *
     * @param bool|null $ignoreStoredFOP
     *
     * @return self
     */
    public function setIgnoreStoredFOP(?bool $ignoreStoredFOP): self
    {
        $this->ignoreStoredFOP = $ignoreStoredFOP;

        return $this;
    }
}
