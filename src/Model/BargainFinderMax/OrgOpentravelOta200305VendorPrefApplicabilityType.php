<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305VendorPrefApplicabilityType extends AbstractModel
{
    /**
     * @var string
     */
    protected $type;
    /**
     * Specifies carrier selection method.,Specifies what type of carrier it applies to.
     *
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Specifies carrier selection method.,Specifies what type of carrier it applies to.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Specifies carrier selection method.,Specifies what type of carrier it applies to.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
