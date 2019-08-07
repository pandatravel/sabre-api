<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType extends AbstractModel
{
    /**
     * "Code" can be "ARUNK", "O" for normal, or "X" for connection.
     *
     * @var string
     */
    protected $code;

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * "Code" can be "ARUNK", "O" for normal, or "X" for connection.
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
}
