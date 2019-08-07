<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ScheduleDescType extends AbstractModel
{
    /**
     * @var Arrival
     */
    protected $arrival;
    /**
     * @var BookingDetails
     */
    protected $bookingDetails;
    /**
     * @var Carrier
     */
    protected $carrier;
    /**
     * @var Departure
     */
    protected $departure;
    /**
     * @var string
     */
    protected $dotRating;
    /**
     * @var bool
     */
    protected $eTicketable;
    /**
     * @var int
     */
    protected $flightStatused;
    /**
     * @var string
     */
    protected $frequency;
    /**
     * @var bool
     */
    protected $funnel;
    /**
     * @var bool
     */
    protected $governmentApproval;
    /**
     * @var HiddenStopType[]
     */
    protected $hiddenStops;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $messageType;
    /**
     * @var int
     */
    protected $onTimePerformance;
    /**
     * @var bool
     */
    protected $smokingAllowed;
    /**
     * @var int
     */
    protected $stopCount;
    /**
     * @var int
     */
    protected $totalMilesFlown;
    /**
     * @var string
     */
    protected $trafficRestriction;

    /**
     * @return Arrival
     */
    public function getArrival(): ?Arrival
    {
        return $this->arrival;
    }

    /**
     * @param Arrival $arrival
     *
     * @return self
     */
    public function setArrival(?Arrival $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * @return BookingDetails
     */
    public function getBookingDetails(): ?BookingDetails
    {
        return $this->bookingDetails;
    }

    /**
     * @param BookingDetails $bookingDetails
     *
     * @return self
     */
    public function setBookingDetails(?BookingDetails $bookingDetails): self
    {
        $this->bookingDetails = $bookingDetails;

        return $this;
    }

    /**
     * @return Carrier
     */
    public function getCarrier(): ?Carrier
    {
        return $this->carrier;
    }

    /**
     * @param Carrier $carrier
     *
     * @return self
     */
    public function setCarrier(?Carrier $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return Departure
     */
    public function getDeparture(): ?Departure
    {
        return $this->departure;
    }

    /**
     * @param Departure $departure
     *
     * @return self
     */
    public function setDeparture(?Departure $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * @return string
     */
    public function getDotRating(): ?string
    {
        return $this->dotRating;
    }

    /**
     * @param string $dotRating
     *
     * @return self
     */
    public function setDotRating(?string $dotRating): self
    {
        $this->dotRating = $dotRating;

        return $this;
    }

    /**
     * @return bool
     */
    public function getETicketable(): ?bool
    {
        return $this->eTicketable;
    }

    /**
     * @param bool $eTicketable
     *
     * @return self
     */
    public function setETicketable(?bool $eTicketable): self
    {
        $this->eTicketable = $eTicketable;

        return $this;
    }

    /**
     * @return int
     */
    public function getFlightStatused(): ?int
    {
        return $this->flightStatused;
    }

    /**
     * @param int $flightStatused
     *
     * @return self
     */
    public function setFlightStatused(?int $flightStatused): self
    {
        $this->flightStatused = $flightStatused;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * @param string $frequency
     *
     * @return self
     */
    public function setFrequency(?string $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFunnel(): ?bool
    {
        return $this->funnel;
    }

    /**
     * @param bool $funnel
     *
     * @return self
     */
    public function setFunnel(?bool $funnel): self
    {
        $this->funnel = $funnel;

        return $this;
    }

    /**
     * @return bool
     */
    public function getGovernmentApproval(): ?bool
    {
        return $this->governmentApproval;
    }

    /**
     * @param bool $governmentApproval
     *
     * @return self
     */
    public function setGovernmentApproval(?bool $governmentApproval): self
    {
        $this->governmentApproval = $governmentApproval;

        return $this;
    }

    /**
     * @return HiddenStopType[]
     */
    public function getHiddenStops(): ?array
    {
        return $this->hiddenStops;
    }

    /**
     * @param HiddenStopType[] $hiddenStops
     *
     * @return self
     */
    public function setHiddenStops(?array $hiddenStops): self
    {
        $this->hiddenStops = $hiddenStops;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
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
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     *
     * @return self
     */
    public function setMessageType(?string $messageType): self
    {
        $this->messageType = $messageType;

        return $this;
    }

    /**
     * @return int
     */
    public function getOnTimePerformance(): ?int
    {
        return $this->onTimePerformance;
    }

    /**
     * @param int $onTimePerformance
     *
     * @return self
     */
    public function setOnTimePerformance(?int $onTimePerformance): self
    {
        $this->onTimePerformance = $onTimePerformance;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSmokingAllowed(): ?bool
    {
        return $this->smokingAllowed;
    }

    /**
     * @param bool $smokingAllowed
     *
     * @return self
     */
    public function setSmokingAllowed(?bool $smokingAllowed): self
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * @return int
     */
    public function getStopCount(): ?int
    {
        return $this->stopCount;
    }

    /**
     * @param int $stopCount
     *
     * @return self
     */
    public function setStopCount(?int $stopCount): self
    {
        $this->stopCount = $stopCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalMilesFlown(): ?int
    {
        return $this->totalMilesFlown;
    }

    /**
     * @param int $totalMilesFlown
     *
     * @return self
     */
    public function setTotalMilesFlown(?int $totalMilesFlown): self
    {
        $this->totalMilesFlown = $totalMilesFlown;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrafficRestriction(): ?string
    {
        return $this->trafficRestriction;
    }

    /**
     * @param string $trafficRestriction
     *
     * @return self
     */
    public function setTrafficRestriction(?string $trafficRestriction): self
    {
        $this->trafficRestriction = $trafficRestriction;

        return $this;
    }
}
