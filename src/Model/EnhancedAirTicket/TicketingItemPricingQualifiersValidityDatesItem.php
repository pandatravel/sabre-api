<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersValidityDatesItem extends AbstractModel
{
    /**
     * "NotValidAfter" is used to specify the ending validity date.

    "NotValidAfter" follows two possible formats: 'YYYY-MM-DD' and 'MM-DD', however only the month and day are respected.

    For more information visit https://www.w3.org/TR/xmlschema-2/#gMonthDay

     *
     * @var string
     */
    protected $notValidAfter;
    /**
     * "NotValidBefore" is used to specify the beginning validity date.

    "NotValidBefore" follows two possible formats: 'YYYY-MM-DD' and 'MM-DD', however only the month and day are respected.

    For more information visit https://www.w3.org/TR/xmlschema-2/#gMonthDay

     *
     * @var string
     */
    protected $notValidBefore;
    /**
     * @var TicketingItemPricingQualifiersValidityDatesItemSegmentItem[]
     */
    protected $segment;

    /**
     * "NotValidAfter" is used to specify the ending validity date.

    "NotValidAfter" follows two possible formats: 'YYYY-MM-DD' and 'MM-DD', however only the month and day are respected.

    For more information visit https://www.w3.org/TR/xmlschema-2/#gMonthDay

     *
     * @return string
     */
    public function getNotValidAfter(): ?string
    {
        return $this->notValidAfter;
    }

    /**
     * "NotValidAfter" is used to specify the ending validity date.

    "NotValidAfter" follows two possible formats: 'YYYY-MM-DD' and 'MM-DD', however only the month and day are respected.

    For more information visit https://www.w3.org/TR/xmlschema-2/#gMonthDay

     *
     * @param string $notValidAfter
     *
     * @return self
     */
    public function setNotValidAfter(?string $notValidAfter): self
    {
        $this->notValidAfter = $notValidAfter;

        return $this;
    }

    /**
     * "NotValidBefore" is used to specify the beginning validity date.

    "NotValidBefore" follows two possible formats: 'YYYY-MM-DD' and 'MM-DD', however only the month and day are respected.

    For more information visit https://www.w3.org/TR/xmlschema-2/#gMonthDay

     *
     * @return string
     */
    public function getNotValidBefore(): ?string
    {
        return $this->notValidBefore;
    }

    /**
     * "NotValidBefore" is used to specify the beginning validity date.

    "NotValidBefore" follows two possible formats: 'YYYY-MM-DD' and 'MM-DD', however only the month and day are respected.

    For more information visit https://www.w3.org/TR/xmlschema-2/#gMonthDay

     *
     * @param string $notValidBefore
     *
     * @return self
     */
    public function setNotValidBefore(?string $notValidBefore): self
    {
        $this->notValidBefore = $notValidBefore;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersValidityDatesItemSegmentItem[]
     */
    public function getSegment(): ?array
    {
        return $this->segment;
    }

    /**
     * @param TicketingItemPricingQualifiersValidityDatesItemSegmentItem[] $segment
     *
     * @return self
     */
    public function setSegment(?array $segment): self
    {
        $this->segment = $segment;

        return $this;
    }
}
