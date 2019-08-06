<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeATSETest extends AbstractModel
{
    /**
     * Meaning of that attribute is dependent on MIP Team, ISell sends it in all ShoppingRequests when specified.
     *
     * @var string
     */
    protected $feature;

    /**
     * Meaning of that attribute is dependent on MIP Team, ISell sends it in all ShoppingRequests when specified.
     *
     * @return string
     */
    public function getFeature(): string
    {
        return $this->feature;
    }

    /**
     * Meaning of that attribute is dependent on MIP Team, ISell sends it in all ShoppingRequests when specified.
     *
     * @param string $feature
     *
     * @return self
     */
    public function setFeature(string $feature): self
    {
        $this->feature = $feature;

        return $this;
    }
}
