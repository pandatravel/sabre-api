<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeTPAExtensionsType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AwardShoppingType
     */
    protected $awardShopping;

    /**
     * @return OrgOpentravelOta200305AwardShoppingType
     */
    public function getAwardShopping(): OrgOpentravelOta200305AwardShoppingType
    {
        return $this->awardShopping;
    }

    /**
     * @param OrgOpentravelOta200305AwardShoppingType $awardShopping
     *
     * @return self
     */
    public function setAwardShopping(OrgOpentravelOta200305AwardShoppingType $awardShopping): self
    {
        $this->awardShopping = $awardShopping;

        return $this;
    }
}
