<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypePurchaseType extends AbstractModel
{
    /**
     * Name of the target for the PurchaseType element.
     *
     * @var string
     */
    protected $name;

    /**
     * Name of the target for the PurchaseType element.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the target for the PurchaseType element.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
