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

class AdvancedCalendarSearchResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchResponse();
        if (property_exists($data, 'OTA_AirLowFareSearchRS')) {
            $object->setOTAAirLowFareSearchRS($this->denormalizer->denormalize($data->{'OTA_AirLowFareSearchRS'}, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchResponseOTAAirLowFareSearchRS', 'json', $context));
        }
        if (property_exists($data, 'RequestID')) {
            $object->setRequestId($data->{'RequestID'});
        }
        if (property_exists($data, 'Page')) {
            $values = [];
            foreach ($data->{'Page'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPage($values);
        }
        if (property_exists($data, 'Links')) {
            $values = [];
            foreach ($data->{'Links'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchResponseLinksItem', 'json', $context);
            }
            $object->setLinks($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOTAAirLowFareSearchRS()) {
            $data->{'OTA_AirLowFareSearchRS'} = $this->normalizer->normalize($object->getOTAAirLowFareSearchRS(), 'json', $context);
        }
        if (null !== $object->getRequestId()) {
            $data->{'RequestID'} = $object->getRequestId();
        }
        if (null !== $object->getPage()) {
            $data->{'Page'} = $object->getPage();
        }
        if (null !== $object->getLinks()) {
            $values = [];
            foreach ($object->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Links'} = $values;
        }

        return $data;
    }
}
