<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransaction extends AbstractModel
{
    /**
     * @var PostProcessingEndTransactionSource
     */
    protected $source;
    /**
     * @var PostProcessingEndTransactionEmail
     */
    protected $email;

    /**
     * @return PostProcessingEndTransactionSource
     */
    public function getSource(): ?PostProcessingEndTransactionSource
    {
        return $this->source;
    }

    /**
     * @param PostProcessingEndTransactionSource $source
     *
     * @return self
     */
    public function setSource(?PostProcessingEndTransactionSource $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return PostProcessingEndTransactionEmail
     */
    public function getEmail(): ?PostProcessingEndTransactionEmail
    {
        return $this->email;
    }

    /**
     * @param PostProcessingEndTransactionEmail $email
     *
     * @return self
     */
    public function setEmail(?PostProcessingEndTransactionEmail $email): self
    {
        $this->email = $email;

        return $this;
    }
}
