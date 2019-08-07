<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

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
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * An abbreviated version of the error or warning in textual format.
     *
     * @param string|null $code
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
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * An indication of the source of error or warning when processing the request.
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
