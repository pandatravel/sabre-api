<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardDataBillingInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardDataBillingInformation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardDataBillingInformation';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCreditCardDataBillingInformation();
        if (property_exists($data, 'Zip') && $data->{'Zip'} !== null) {
            $object->setZip($data->{'Zip'});
        }
        if (property_exists($data, 'cardHolderName') && $data->{'cardHolderName'} !== null) {
            $object->setCardHolderName($data->{'cardHolderName'});
        }
        if (property_exists($data, 'streetAddress') && $data->{'streetAddress'} !== null) {
            $object->setStreetAddress($data->{'streetAddress'});
        }
        if (property_exists($data, 'city') && $data->{'city'} !== null) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'stateOrProvince') && $data->{'stateOrProvince'} !== null) {
            $object->setStateOrProvince($data->{'stateOrProvince'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getZip()) {
            $data->{'Zip'} = $object->getZip();
        }
        if (null !== $object->getCardHolderName()) {
            $data->{'cardHolderName'} = $object->getCardHolderName();
        }
        if (null !== $object->getStreetAddress()) {
            $data->{'streetAddress'} = $object->getStreetAddress();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getStateOrProvince()) {
            $data->{'stateOrProvince'} = $object->getStateOrProvince();
        }

        return $data;
    }
}
