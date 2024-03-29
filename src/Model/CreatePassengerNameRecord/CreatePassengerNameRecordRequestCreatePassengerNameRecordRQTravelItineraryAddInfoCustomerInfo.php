<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfo extends AbstractModel
{
    /**
     * Used to pass the passenger contact numbers.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbers
     */
    protected $contactNumbers;
    /**
     * 'Corporate' is used to specify that the type of the journey is corporate, i.e. through a corporation.
    It cannot be combined with any other qualifier.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCorporate
     */
    protected $corporate;
    /**
     * 'CreditCardData' is used to pass the credit card billing information.
    Please note that .../BillingInformation and .../PreferredCustomer are mutually exclusive.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardData
     */
    protected $creditCardData;
    /**
     * Used to pass the frequent flyer number information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCustLoyaltyItem[]
     */
    protected $custLoyalty;
    /**
     * Used to add a customer number into the record.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.

     *
     * @var string
     */
    protected $customerIdentifier;
    /**
     * Used to pass the e-mail details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoEmailItem[]
     */
    protected $email;
    /**
     * Used to add the passenger names.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItem[]
     */
    protected $personName;

    /**
     * Used to pass the passenger contact numbers.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbers|null
     */
    public function getContactNumbers(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbers
    {
        return $this->contactNumbers;
    }

    /**
     * Used to pass the passenger contact numbers.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbers|null $contactNumbers
     *
     * @return self
     */
    public function setContactNumbers(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbers $contactNumbers): self
    {
        $this->contactNumbers = $contactNumbers;

        return $this;
    }

    /**
     * 'Corporate' is used to specify that the type of the journey is corporate, i.e. through a corporation.
    It cannot be combined with any other qualifier.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCorporate|null
     */
    public function getCorporate(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCorporate
    {
        return $this->corporate;
    }

    /**
     * 'Corporate' is used to specify that the type of the journey is corporate, i.e. through a corporation.
    It cannot be combined with any other qualifier.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCorporate|null $corporate
     *
     * @return self
     */
    public function setCorporate(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCorporate $corporate): self
    {
        $this->corporate = $corporate;

        return $this;
    }

    /**
     * 'CreditCardData' is used to pass the credit card billing information.
    Please note that .../BillingInformation and .../PreferredCustomer are mutually exclusive.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardData|null
     */
    public function getCreditCardData(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardData
    {
        return $this->creditCardData;
    }

    /**
     * 'CreditCardData' is used to pass the credit card billing information.
    Please note that .../BillingInformation and .../PreferredCustomer are mutually exclusive.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardData|null $creditCardData
     *
     * @return self
     */
    public function setCreditCardData(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardData $creditCardData): self
    {
        $this->creditCardData = $creditCardData;

        return $this;
    }

    /**
     * Used to pass the frequent flyer number information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCustLoyaltyItem[]|null
     */
    public function getCustLoyalty(): ?array
    {
        return $this->custLoyalty;
    }

    /**
     * Used to pass the frequent flyer number information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCustLoyaltyItem[]|null $custLoyalty
     *
     * @return self
     */
    public function setCustLoyalty(?array $custLoyalty): self
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Used to add a customer number into the record.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.

     *
     * @return string|null
     */
    public function getCustomerIdentifier(): ?string
    {
        return $this->customerIdentifier;
    }

    /**
     * Used to add a customer number into the record.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.

     *
     * @param string|null $customerIdentifier
     *
     * @return self
     */
    public function setCustomerIdentifier(?string $customerIdentifier): self
    {
        $this->customerIdentifier = $customerIdentifier;

        return $this;
    }

    /**
     * Used to pass the e-mail details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoEmailItem[]|null
     */
    public function getEmail(): ?array
    {
        return $this->email;
    }

    /**
     * Used to pass the e-mail details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoEmailItem[]|null $email
     *
     * @return self
     */
    public function setEmail(?array $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Used to add the passenger names.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItem[]|null
     */
    public function getPersonName(): ?array
    {
        return $this->personName;
    }

    /**
     * Used to add the passenger names.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItem[]|null $personName
     *
     * @return self
     */
    public function setPersonName(?array $personName): self
    {
        $this->personName = $personName;

        return $this;
    }
}
