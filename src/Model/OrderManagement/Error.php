<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Error extends AbstractModel
{
    /**
     * The code corresponding to the processing error.
     *
     * @var string
     */
    protected $code;
    /**
     * Free text description of the provided error.
     *
     * @var string
     */
    protected $message;

    /**
     * The code corresponding to the processing error.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The code corresponding to the processing error.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Free text description of the provided error.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Free text description of the provided error.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
