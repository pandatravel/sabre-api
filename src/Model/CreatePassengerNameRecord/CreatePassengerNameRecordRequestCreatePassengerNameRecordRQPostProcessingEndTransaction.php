<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransaction extends AbstractModel
{
    /**
     * Used to identify the entity that authorized the changes in a passenger name record.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionSource
     */
    protected $source;
    /**
     * Used to request e-mail notifications after ending the passenger name record.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmail
     */
    protected $email;

    /**
     * Used to identify the entity that authorized the changes in a passenger name record.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionSource|null
     */
    public function getSource(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionSource
    {
        return $this->source;
    }

    /**
     * Used to identify the entity that authorized the changes in a passenger name record.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionSource|null $source
     *
     * @return self
     */
    public function setSource(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionSource $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Used to request e-mail notifications after ending the passenger name record.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmail|null
     */
    public function getEmail(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmail
    {
        return $this->email;
    }

    /**
     * Used to request e-mail notifications after ending the passenger name record.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmail|null $email
     *
     * @return self
     */
    public function setEmail(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmail $email): self
    {
        $this->email = $email;

        return $this;
    }
}
