<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeSabreAth extends AbstractModel
{
    /**
     * @var string
     */
    protected $binarySecToken;
    /**
     * @var string
     */
    protected $conversationID;
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getBinarySecToken(): string
    {
        return $this->binarySecToken;
    }

    /**
     * @param string $binarySecToken
     *
     * @return self
     */
    public function setBinarySecToken(string $binarySecToken): self
    {
        $this->binarySecToken = $binarySecToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getConversationID(): string
    {
        return $this->conversationID;
    }

    /**
     * @param string $conversationID
     *
     * @return self
     */
    public function setConversationID(string $conversationID): self
    {
        $this->conversationID = $conversationID;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
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
