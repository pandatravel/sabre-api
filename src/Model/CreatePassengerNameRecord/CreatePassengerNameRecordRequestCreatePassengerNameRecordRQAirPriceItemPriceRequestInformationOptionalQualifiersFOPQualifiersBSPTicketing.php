<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketing extends AbstractModel
{
    /**
     * Used to define multiple forms of payment. MultipleFOP cannot combine with .../MultipleMiscFOP, or .../PayLaterPlan.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOP
     */
    protected $multipleFOP;
    /**
     * Used to define multiple miscellaneous forms of payment. MultipleMiscFOP cannot combine with .../MultipleFOP, or .../PayLaterPlan.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOP
     */
    protected $multipleMiscFOP;
    /**
     * Only applicable to Brazil. PayLaterPlan cannot combine with MultipleFOP, or MultipleMiscFOP.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlan
     */
    protected $payLaterPlan;

    /**
     * Used to define multiple forms of payment. MultipleFOP cannot combine with .../MultipleMiscFOP, or .../PayLaterPlan.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOP
     */
    public function getMultipleFOP(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOP
    {
        return $this->multipleFOP;
    }

    /**
     * Used to define multiple forms of payment. MultipleFOP cannot combine with .../MultipleMiscFOP, or .../PayLaterPlan.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOP $multipleFOP
     *
     * @return self
     */
    public function setMultipleFOP(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOP $multipleFOP): self
    {
        $this->multipleFOP = $multipleFOP;

        return $this;
    }

    /**
     * Used to define multiple miscellaneous forms of payment. MultipleMiscFOP cannot combine with .../MultipleFOP, or .../PayLaterPlan.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOP
     */
    public function getMultipleMiscFOP(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOP
    {
        return $this->multipleMiscFOP;
    }

    /**
     * Used to define multiple miscellaneous forms of payment. MultipleMiscFOP cannot combine with .../MultipleFOP, or .../PayLaterPlan.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOP $multipleMiscFOP
     *
     * @return self
     */
    public function setMultipleMiscFOP(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOP $multipleMiscFOP): self
    {
        $this->multipleMiscFOP = $multipleMiscFOP;

        return $this;
    }

    /**
     * Only applicable to Brazil. PayLaterPlan cannot combine with MultipleFOP, or MultipleMiscFOP.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlan
     */
    public function getPayLaterPlan(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlan
    {
        return $this->payLaterPlan;
    }

    /**
     * Only applicable to Brazil. PayLaterPlan cannot combine with MultipleFOP, or MultipleMiscFOP.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlan $payLaterPlan
     *
     * @return self
     */
    public function setPayLaterPlan(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlan $payLaterPlan): self
    {
        $this->payLaterPlan = $payLaterPlan;

        return $this;
    }
}