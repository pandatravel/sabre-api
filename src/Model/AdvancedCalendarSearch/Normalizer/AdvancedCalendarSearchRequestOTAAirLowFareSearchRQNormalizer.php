<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AdvancedCalendarSearchRequestOTAAirLowFareSearchRQNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQ';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQ;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQ();
        if (property_exists($data, 'POS')) {
            $object->setPOS($this->denormalizer->denormalize($data->{'POS'}, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOS', 'json', $context));
        }
        if (property_exists($data, 'OriginDestinationInformation')) {
            $values = [];
            foreach ($data->{'OriginDestinationInformation'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItem', 'json', $context);
            }
            $object->setOriginDestinationInformation($values);
        }
        if (property_exists($data, 'TravelPreferences')) {
            $object->setTravelPreferences($this->denormalizer->denormalize($data->{'TravelPreferences'}, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelPreferences', 'json', $context));
        }
        if (property_exists($data, 'TravelerInfoSummary')) {
            $object->setTravelerInfoSummary($this->denormalizer->denormalize($data->{'TravelerInfoSummary'}, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummary', 'json', $context));
        }
        if (property_exists($data, 'TPA_Extensions')) {
            $object->setTPAExtensions($this->denormalizer->denormalize($data->{'TPA_Extensions'}, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensions', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPOS()) {
            $data->{'POS'} = $this->normalizer->normalize($object->getPOS(), 'json', $context);
        }
        if (null !== $object->getOriginDestinationInformation()) {
            $values = [];
            foreach ($object->getOriginDestinationInformation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'OriginDestinationInformation'} = $values;
        }
        if (null !== $object->getTravelPreferences()) {
            $data->{'TravelPreferences'} = $this->normalizer->normalize($object->getTravelPreferences(), 'json', $context);
        }
        if (null !== $object->getTravelerInfoSummary()) {
            $data->{'TravelerInfoSummary'} = $this->normalizer->normalize($object->getTravelerInfoSummary(), 'json', $context);
        }
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $this->normalizer->normalize($object->getTPAExtensions(), 'json', $context);
        }

        return $data;
    }
}