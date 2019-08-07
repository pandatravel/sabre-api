<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PointOfSaleOverrideType extends AbstractModel
{
    /**
     * Used for Character Strings, length 1 to 8.
     *
     * @var string
     */
    protected $code;

    /**
     * Used for Character Strings, length 1 to 8.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Used for Character Strings, length 1 to 8.
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
