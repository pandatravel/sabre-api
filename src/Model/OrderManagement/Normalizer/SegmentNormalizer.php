<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\OrderManagement\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SegmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\OrderManagement\\Segment';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\OrderManagement\Segment;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\OrderManagement\Segment();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'references')) {
            $values = [];
            foreach ($data->{'references'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\OrderManagement\\ExternalReference', 'json', $context);
            }
            $object->setReferences($values);
        }
        if (property_exists($data, 'arnkInd')) {
            $object->setArnkInd($data->{'arnkInd'});
        }
        if (property_exists($data, 'cabinTypeCode')) {
            $object->setCabinTypeCode($data->{'cabinTypeCode'});
        }
        if (property_exists($data, 'departure')) {
            $object->setDeparture($this->denormalizer->denormalize($data->{'departure'}, 'Ammonkc\\SabreApi\\Model\\OrderManagement\\Transport', 'json', $context));
        }
        if (property_exists($data, 'arrival')) {
            $object->setArrival($this->denormalizer->denormalize($data->{'arrival'}, 'Ammonkc\\SabreApi\\Model\\OrderManagement\\Transport', 'json', $context));
        }
        if (property_exists($data, 'marketingCarrier')) {
            $object->setMarketingCarrier($this->denormalizer->denormalize($data->{'marketingCarrier'}, 'Ammonkc\\SabreApi\\Model\\OrderManagement\\CarrierFlightInfo', 'json', $context));
        }
        if (property_exists($data, 'operatingCarrier')) {
            $object->setOperatingCarrier($this->denormalizer->denormalize($data->{'operatingCarrier'}, 'Ammonkc\\SabreApi\\Model\\OrderManagement\\CarrierFlightInfo', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getReferences()) {
            $values = [];
            foreach ($object->getReferences() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'references'} = $values;
        }
        if (null !== $object->getArnkInd()) {
            $data->{'arnkInd'} = $object->getArnkInd();
        }
        if (null !== $object->getCabinTypeCode()) {
            $data->{'cabinTypeCode'} = $object->getCabinTypeCode();
        }
        if (null !== $object->getDeparture()) {
            $data->{'departure'} = $this->normalizer->normalize($object->getDeparture(), 'json', $context);
        }
        if (null !== $object->getArrival()) {
            $data->{'arrival'} = $this->normalizer->normalize($object->getArrival(), 'json', $context);
        }
        if (null !== $object->getMarketingCarrier()) {
            $data->{'marketingCarrier'} = $this->normalizer->normalize($object->getMarketingCarrier(), 'json', $context);
        }
        if (null !== $object->getOperatingCarrier()) {
            $data->{'operatingCarrier'} = $this->normalizer->normalize($object->getOperatingCarrier(), 'json', $context);
        }

        return $data;
    }
}