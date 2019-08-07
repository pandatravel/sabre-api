<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeDepartureDates';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TravelDateTimeTypeDepartureDates;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TravelDateTimeTypeDepartureDates();
        if (property_exists($data, 'Day')) {
            $values = [];
            foreach ($data->{'Day'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay', 'json', $context);
            }
            $object->setDay($values);
        }
        if (property_exists($data, 'DaysRange')) {
            $values_1 = [];
            foreach ($data->{'DaysRange'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDaysRange', 'json', $context);
            }
            $object->setDaysRange($values_1);
        }
        if (property_exists($data, 'LengthOfStay')) {
            $values_2 = [];
            foreach ($data->{'LengthOfStay'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStay', 'json', $context);
            }
            $object->setLengthOfStay($values_2);
        }
        if (property_exists($data, 'LengthOfStayRange')) {
            $values_3 = [];
            foreach ($data->{'LengthOfStayRange'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeDepartureDatesLengthOfStayRange', 'json', $context);
            }
            $object->setLengthOfStayRange($values_3);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDay()) {
            $values = [];
            foreach ($object->getDay() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Day'} = $values;
        }
        if (null !== $object->getDaysRange()) {
            $values_1 = [];
            foreach ($object->getDaysRange() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'DaysRange'} = $values_1;
        }
        if (null !== $object->getLengthOfStay()) {
            $values_2 = [];
            foreach ($object->getLengthOfStay() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'LengthOfStay'} = $values_2;
        }
        if (null !== $object->getLengthOfStayRange()) {
            $values_3 = [];
            foreach ($object->getLengthOfStayRange() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'LengthOfStayRange'} = $values_3;
        }

        return $data;
    }
}
