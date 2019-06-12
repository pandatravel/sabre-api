<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class PaymentCreditCard extends AbstractModel
{
    /**
     * The credit card number.
     *
     * @var string
     */
    protected $cardNumber;
    /**
     * The credit card number token.
     *
     * @var string
     */
    protected $cardNumberToken;
    /**
     * The credit card vendor's code.
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * The credit card expiration date in `MMYY` format.
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * The credit card CVV 3 or 4 digit verification code.
     *
     * @var string
     */
    protected $cvv;
    /**
     * The credit card CVV code token.
     *
     * @var string
     */
    protected $cvvToken;
    /**
     * Reference to card holder contact information.
     *
     * @var string
     */
    protected $contactInfoRefId;

    /**
     * The credit card number.
     *
     * @return string
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * The credit card number.
     *
     * @param string $cardNumber
     *
     * @return self
     */
    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * The credit card number token.
     *
     * @return string
     */
    public function getCardNumberToken(): ?string
    {
        return $this->cardNumberToken;
    }

    /**
     * The credit card number token.
     *
     * @param string $cardNumberToken
     *
     * @return self
     */
    public function setCardNumberToken(?string $cardNumberToken): self
    {
        $this->cardNumberToken = $cardNumberToken;

        return $this;
    }

    /**
     * The credit card vendor's code.
     *
     * @return string
     */
    public function getVendorCode(): ?string
    {
        return $this->vendorCode;
    }

    /**
     * The credit card vendor's code.
     *
     * @param string $vendorCode
     *
     * @return self
     */
    public function setVendorCode(?string $vendorCode): self
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * The credit card expiration date in `MMYY` format.
     *
     * @return string
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * The credit card expiration date in `MMYY` format.
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * The credit card CVV 3 or 4 digit verification code.
     *
     * @return string
     */
    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    /**
     * The credit card CVV 3 or 4 digit verification code.
     *
     * @param string $cvv
     *
     * @return self
     */
    public function setCvv(?string $cvv): self
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * The credit card CVV code token.
     *
     * @return string
     */
    public function getCvvToken(): ?string
    {
        return $this->cvvToken;
    }

    /**
     * The credit card CVV code token.
     *
     * @param string $cvvToken
     *
     * @return self
     */
    public function setCvvToken(?string $cvvToken): self
    {
        $this->cvvToken = $cvvToken;

        return $this;
    }

    /**
     * Reference to card holder contact information.
     *
     * @return string
     */
    public function getContactInfoRefId(): ?string
    {
        return $this->contactInfoRefId;
    }

    /**
     * Reference to card holder contact information.
     *
     * @param string $contactInfoRefId
     *
     * @return self
     */
    public function setContactInfoRefId(?string $contactInfoRefId): self
    {
        $this->contactInfoRefId = $contactInfoRefId;

        return $this;
    }
}
