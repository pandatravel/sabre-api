<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlaceMultiQueuePlaceQueueIdentifierItem extends AbstractModel
{
    /**
     * The queue number.
     *
     * @var string
     */
    protected $number;
    /**
     * The prefatory instruction code.
     *
     * @var string
     */
    protected $prefatoryInstructionCode;
    /**
     * The pseudo city code.
     *
     * @var string
     */
    protected $pseudoCityCode;

    /**
     * The queue number.
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * The queue number.
     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The prefatory instruction code.
     *
     * @return string|null
     */
    public function getPrefatoryInstructionCode(): ?string
    {
        return $this->prefatoryInstructionCode;
    }

    /**
     * The prefatory instruction code.
     *
     * @param string|null $prefatoryInstructionCode
     *
     * @return self
     */
    public function setPrefatoryInstructionCode(?string $prefatoryInstructionCode): self
    {
        $this->prefatoryInstructionCode = $prefatoryInstructionCode;

        return $this;
    }

    /**
     * The pseudo city code.
     *
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->pseudoCityCode;
    }

    /**
     * The pseudo city code.
     *
     * @param string|null $pseudoCityCode
     *
     * @return self
     */
    public function setPseudoCityCode(?string $pseudoCityCode): self
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }
}
