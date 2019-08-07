<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DepartureDaysType extends AbstractModel
{
    /**
     * Value format: First letter of the name of the day or '_', eg. 'SMT___S' means we are interested in departing at Saturday, Sunday, Monday or Tuesday. Even if there are schedules for Wednesday, Thursday or Friday, they won't be returned in ISell response.
     *
     * @var string
     */
    protected $value;

    /**
     * Value format: First letter of the name of the day or '_', eg. 'SMT___S' means we are interested in departing at Saturday, Sunday, Monday or Tuesday. Even if there are schedules for Wednesday, Thursday or Friday, they won't be returned in ISell response.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Value format: First letter of the name of the day or '_', eg. 'SMT___S' means we are interested in departing at Saturday, Sunday, Monday or Tuesday. Even if there are schedules for Wednesday, Thursday or Friday, they won't be returned in ISell response.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
