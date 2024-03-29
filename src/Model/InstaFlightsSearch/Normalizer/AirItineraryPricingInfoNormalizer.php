<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AirItineraryPricingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryPricingInfo';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryPricingInfo;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryPricingInfo();
        if (property_exists($data, 'TPA_Extensions')) {
            $object->setTPAExtensions($this->denormalizer->denormalize($data->{'TPA_Extensions'}, 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryPricingInfoTPAExtensions', 'json', $context));
        }
        if (property_exists($data, 'ItinTotalFare')) {
            $object->setItinTotalFare($this->denormalizer->denormalize($data->{'ItinTotalFare'}, 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryPricingInfoItinTotalFare', 'json', $context));
        }
        if (property_exists($data, 'FareInfos')) {
            $object->setFareInfos($this->denormalizer->denormalize($data->{'FareInfos'}, 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryPricingInfoFareInfos', 'json', $context));
        }
        if (property_exists($data, 'PTC_FareBreakdowns')) {
            $object->setPTCFareBreakdowns($this->denormalizer->denormalize($data->{'PTC_FareBreakdowns'}, 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryPricingInfoPTCFareBreakdowns', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $this->normalizer->normalize($object->getTPAExtensions(), 'json', $context);
        }
        if (null !== $object->getItinTotalFare()) {
            $data->{'ItinTotalFare'} = $this->normalizer->normalize($object->getItinTotalFare(), 'json', $context);
        }
        if (null !== $object->getFareInfos()) {
            $data->{'FareInfos'} = $this->normalizer->normalize($object->getFareInfos(), 'json', $context);
        }
        if (null !== $object->getPTCFareBreakdowns()) {
            $data->{'PTC_FareBreakdowns'} = $this->normalizer->normalize($object->getPTCFareBreakdowns(), 'json', $context);
        }

        return $data;
    }
}
