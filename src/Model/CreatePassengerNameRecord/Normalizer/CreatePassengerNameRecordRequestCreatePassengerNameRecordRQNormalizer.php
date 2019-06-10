<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ();
        if (property_exists($data, 'Profile')) {
            $object->setProfile($this->denormalizer->denormalize($data->{'Profile'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQProfile', 'json', $context));
        }
        if (property_exists($data, 'TravelItineraryAddInfo')) {
            $object->setTravelItineraryAddInfo($this->denormalizer->denormalize($data->{'TravelItineraryAddInfo'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfo', 'json', $context));
        }
        if (property_exists($data, 'AirBook')) {
            $object->setAirBook($this->denormalizer->denormalize($data->{'AirBook'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBook', 'json', $context));
        }
        if (property_exists($data, 'AirPrice')) {
            $values = [];
            foreach ($data->{'AirPrice'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItem', 'json', $context);
            }
            $object->setAirPrice($values);
        }
        if (property_exists($data, 'AirTax')) {
            $object->setAirTax($this->denormalizer->denormalize($data->{'AirTax'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTax', 'json', $context));
        }
        if (property_exists($data, 'HotelBook')) {
            $object->setHotelBook($this->denormalizer->denormalize($data->{'HotelBook'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBook', 'json', $context));
        }
        if (property_exists($data, 'MiscSegment')) {
            $object->setMiscSegment($this->denormalizer->denormalize($data->{'MiscSegment'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegment', 'json', $context));
        }
        if (property_exists($data, 'SpecialReqDetails')) {
            $object->setSpecialReqDetails($this->denormalizer->denormalize($data->{'SpecialReqDetails'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetails', 'json', $context));
        }
        if (property_exists($data, 'PostProcessing')) {
            $object->setPostProcessing($this->denormalizer->denormalize($data->{'PostProcessing'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessing', 'json', $context));
        }
        if (property_exists($data, 'SPInternal')) {
            $object->setSPInternal($data->{'SPInternal'});
        }
        if (property_exists($data, 'targetCity')) {
            $object->setTargetCity($data->{'targetCity'});
        }
        if (property_exists($data, 'haltOnAirPriceError')) {
            $object->setHaltOnAirPriceError($data->{'haltOnAirPriceError'});
        }
        if (property_exists($data, 'haltOnHotelBookError')) {
            $object->setHaltOnHotelBookError($data->{'haltOnHotelBookError'});
        }
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getProfile()) {
            $data->{'Profile'} = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        }
        if (null !== $object->getTravelItineraryAddInfo()) {
            $data->{'TravelItineraryAddInfo'} = $this->normalizer->normalize($object->getTravelItineraryAddInfo(), 'json', $context);
        }
        if (null !== $object->getAirBook()) {
            $data->{'AirBook'} = $this->normalizer->normalize($object->getAirBook(), 'json', $context);
        }
        if (null !== $object->getAirPrice()) {
            $values = [];
            foreach ($object->getAirPrice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'AirPrice'} = $values;
        }
        if (null !== $object->getAirTax()) {
            $data->{'AirTax'} = $this->normalizer->normalize($object->getAirTax(), 'json', $context);
        }
        if (null !== $object->getHotelBook()) {
            $data->{'HotelBook'} = $this->normalizer->normalize($object->getHotelBook(), 'json', $context);
        }
        if (null !== $object->getMiscSegment()) {
            $data->{'MiscSegment'} = $this->normalizer->normalize($object->getMiscSegment(), 'json', $context);
        }
        if (null !== $object->getSpecialReqDetails()) {
            $data->{'SpecialReqDetails'} = $this->normalizer->normalize($object->getSpecialReqDetails(), 'json', $context);
        }
        if (null !== $object->getPostProcessing()) {
            $data->{'PostProcessing'} = $this->normalizer->normalize($object->getPostProcessing(), 'json', $context);
        }
        if (null !== $object->getSPInternal()) {
            $data->{'SPInternal'} = $object->getSPInternal();
        }
        if (null !== $object->getTargetCity()) {
            $data->{'targetCity'} = $object->getTargetCity();
        }
        if (null !== $object->getHaltOnAirPriceError()) {
            $data->{'haltOnAirPriceError'} = $object->getHaltOnAirPriceError();
        }
        if (null !== $object->getHaltOnHotelBookError()) {
            $data->{'haltOnHotelBookError'} = $object->getHaltOnHotelBookError();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }

        return $data;
    }
}