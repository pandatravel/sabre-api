<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class ProblemInformationSystemSpecificResultsItemMessageItem extends AbstractModel
{
    /**
     * An abbreviated version of the error or warning in textual format.
     *
     * @var string
     */
    protected $code;
    /**
     * An indication of the source of error or warning when processing the request.
     *
     * @var string
     */
    protected $content;

    /**
     * An abbreviated version of the error or warning in textual format.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * An abbreviated version of the error or warning in textual format.
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
     * An indication of the source of error or warning when processing the request.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * An indication of the source of error or warning when processing the request.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
