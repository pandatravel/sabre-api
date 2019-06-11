<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessing extends AbstractModel
{
    /**
     * "acceptNegotiatedFare" is used to accept a negotiated fare when it is not possible to ticket the stored fare .
     *
     * @var bool
     */
    protected $acceptNegotiatedFare;
    /**
     * "acceptPriceChanges" is used to specify that system should issue a ticket even if price increases while processing .
     *
     * @var bool
     */
    protected $acceptPriceChanges;
    /**
     * "actionOnPQExpired" is used to specify appropriate action when Price Quote expires.

    Available options are "R" - reprice, "Q" Quit, "O" Override.

     *
     * @var string
     */
    protected $actionOnPQExpired;
    /**
     * "EndTransaction" is used to end the transaction and finalize the record.
     *
     * @var PostProcessingEndTransaction
     */
    protected $endTransaction;

    /**
     * "acceptNegotiatedFare" is used to accept a negotiated fare when it is not possible to ticket the stored fare .
     *
     * @return bool
     */
    public function getAcceptNegotiatedFare(): ?bool
    {
        return $this->acceptNegotiatedFare;
    }

    /**
     * "acceptNegotiatedFare" is used to accept a negotiated fare when it is not possible to ticket the stored fare .
     *
     * @param bool $acceptNegotiatedFare
     *
     * @return self
     */
    public function setAcceptNegotiatedFare(?bool $acceptNegotiatedFare): self
    {
        $this->acceptNegotiatedFare = $acceptNegotiatedFare;

        return $this;
    }

    /**
     * "acceptPriceChanges" is used to specify that system should issue a ticket even if price increases while processing .
     *
     * @return bool
     */
    public function getAcceptPriceChanges(): ?bool
    {
        return $this->acceptPriceChanges;
    }

    /**
     * "acceptPriceChanges" is used to specify that system should issue a ticket even if price increases while processing .
     *
     * @param bool $acceptPriceChanges
     *
     * @return self
     */
    public function setAcceptPriceChanges(?bool $acceptPriceChanges): self
    {
        $this->acceptPriceChanges = $acceptPriceChanges;

        return $this;
    }

    /**
     * "actionOnPQExpired" is used to specify appropriate action when Price Quote expires.

    Available options are "R" - reprice, "Q" Quit, "O" Override.

     *
     * @return string
     */
    public function getActionOnPQExpired(): ?string
    {
        return $this->actionOnPQExpired;
    }

    /**
     * "actionOnPQExpired" is used to specify appropriate action when Price Quote expires.

    Available options are "R" - reprice, "Q" Quit, "O" Override.

     *
     * @param string $actionOnPQExpired
     *
     * @return self
     */
    public function setActionOnPQExpired(?string $actionOnPQExpired): self
    {
        $this->actionOnPQExpired = $actionOnPQExpired;

        return $this;
    }

    /**
     * "EndTransaction" is used to end the transaction and finalize the record.
     *
     * @return PostProcessingEndTransaction
     */
    public function getEndTransaction(): ?PostProcessingEndTransaction
    {
        return $this->endTransaction;
    }

    /**
     * "EndTransaction" is used to end the transaction and finalize the record.
     *
     * @param PostProcessingEndTransaction $endTransaction
     *
     * @return self
     */
    public function setEndTransaction(?PostProcessingEndTransaction $endTransaction): self
    {
        $this->endTransaction = $endTransaction;

        return $this;
    }
}
