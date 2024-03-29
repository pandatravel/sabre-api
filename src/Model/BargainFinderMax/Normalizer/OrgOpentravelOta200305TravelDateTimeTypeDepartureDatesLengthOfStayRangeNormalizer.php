<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange();
        if (property_exists($data, 'MaxDays') && $data->{'MaxDays'} !== null) {
            $object->setMaxDays($data->{'MaxDays'});
        }
        if (property_exists($data, 'MinDays') && $data->{'MinDays'} !== null) {
            $object->setMinDays($data->{'MinDays'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaxDays()) {
            $data->{'MaxDays'} = $object->getMaxDays();
        }
        if (null !== $object->getMinDays()) {
            $data->{'MinDays'} = $object->getMinDays();
        }

        return $data;
    }
}
