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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerary();
        if (property_exists($data, 'CustomerInfo') && $data->{'CustomerInfo'} !== null) {
            $object->setCustomerInfo($this->denormalizer->denormalize($data->{'CustomerInfo'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfo', 'json', $context));
        }
        if (property_exists($data, 'SpecialServiceInfo') && $data->{'SpecialServiceInfo'} !== null) {
            $values = [];
            foreach ($data->{'SpecialServiceInfo'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItem', 'json', $context);
            }
            $object->setSpecialServiceInfo($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCustomerInfo()) {
            $data->{'CustomerInfo'} = $this->normalizer->normalize($object->getCustomerInfo(), 'json', $context);
        }
        if (null !== $object->getSpecialServiceInfo()) {
            $values = [];
            foreach ($object->getSpecialServiceInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'SpecialServiceInfo'} = $values;
        }

        return $data;
    }
}
