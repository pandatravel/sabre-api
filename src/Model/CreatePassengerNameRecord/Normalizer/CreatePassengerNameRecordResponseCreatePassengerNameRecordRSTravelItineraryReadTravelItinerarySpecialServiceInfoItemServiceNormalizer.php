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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemService';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemService';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemService();
        if (property_exists($data, 'Airline') && $data->{'Airline'} !== null) {
            $object->setAirline($this->denormalizer->denormalize($data->{'Airline'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServiceAirline', 'json', $context));
        }
        if (property_exists($data, 'PersonName') && $data->{'PersonName'} !== null) {
            $values = [];
            foreach ($data->{'PersonName'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServicePersonNameItem', 'json', $context);
            }
            $object->setPersonName($values);
        }
        if (property_exists($data, 'Text') && $data->{'Text'} !== null) {
            $values_1 = [];
            foreach ($data->{'Text'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setText($values_1);
        }
        if (property_exists($data, 'SSR_Code') && $data->{'SSR_Code'} !== null) {
            $object->setSSRCode($data->{'SSR_Code'});
        }
        if (property_exists($data, 'SSR_Type') && $data->{'SSR_Type'} !== null) {
            $object->setSSRType($data->{'SSR_Type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirline()) {
            $data->{'Airline'} = $this->normalizer->normalize($object->getAirline(), 'json', $context);
        }
        if (null !== $object->getPersonName()) {
            $values = [];
            foreach ($object->getPersonName() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'PersonName'} = $values;
        }
        if (null !== $object->getText()) {
            $values_1 = [];
            foreach ($object->getText() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Text'} = $values_1;
        }
        if (null !== $object->getSSRCode()) {
            $data->{'SSR_Code'} = $object->getSSRCode();
        }
        if (null !== $object->getSSRType()) {
            $data->{'SSR_Type'} = $object->getSSRType();
        }

        return $data;
    }
}
