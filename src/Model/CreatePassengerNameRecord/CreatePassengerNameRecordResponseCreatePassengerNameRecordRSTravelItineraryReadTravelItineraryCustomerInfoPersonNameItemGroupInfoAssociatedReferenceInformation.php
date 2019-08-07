<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformation extends AbstractModel
{
    /**
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummaries
     */
    protected $associatedPNRSummaries;

    /**
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummaries
     */
    public function getAssociatedPNRSummaries(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummaries
    {
        return $this->associatedPNRSummaries;
    }

    /**
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummaries $associatedPNRSummaries
     *
     * @return self
     */
    public function setAssociatedPNRSummaries(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummaries $associatedPNRSummaries): self
    {
        $this->associatedPNRSummaries = $associatedPNRSummaries;

        return $this;
    }
}
