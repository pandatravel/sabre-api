<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlaceQueueInfoQueueIdentifierItem extends AbstractModel
{
    /**
     * Queue name.
     *
     * @var string
     */
    protected $name;
    /**
     * Queue number.
     *
     * @var string
     */
    protected $number;
    /**
     * PIC code.
     *
     * @var string
     */
    protected $prefatoryInstructionCode;
    /**
     * PCC.
     *
     * @var string
     */
    protected $pseudoCityCode;

    /**
     * Queue name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Queue name.
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

    /**
     * Queue number.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Queue number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * PIC code.
     *
     * @return string
     */
    public function getPrefatoryInstructionCode(): ?string
    {
        return $this->prefatoryInstructionCode;
    }

    /**
     * PIC code.
     *
     * @param string $prefatoryInstructionCode
     *
     * @return self
     */
    public function setPrefatoryInstructionCode(?string $prefatoryInstructionCode): self
    {
        $this->prefatoryInstructionCode = $prefatoryInstructionCode;

        return $this;
    }

    /**
     * PCC.
     *
     * @return string
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->pseudoCityCode;
    }

    /**
     * PCC.
     *
     * @param string $pseudoCityCode
     *
     * @return self
     */
    public function setPseudoCityCode(?string $pseudoCityCode): self
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }
}
