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

class PartyTravelAgencyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\OrderManagement\\PartyTravelAgency';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\OrderManagement\PartyTravelAgency;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\OrderManagement\PartyTravelAgency();
        if (property_exists($data, 'iataNumber')) {
            $object->setIataNumber($data->{'iataNumber'});
        }
        if (property_exists($data, 'pseudoCityCode')) {
            $object->setPseudoCityCode($data->{'pseudoCityCode'});
        }
        if (property_exists($data, 'agencyId')) {
            $object->setAgencyId($data->{'agencyId'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIataNumber()) {
            $data->{'iataNumber'} = $object->getIataNumber();
        }
        if (null !== $object->getPseudoCityCode()) {
            $data->{'pseudoCityCode'} = $object->getPseudoCityCode();
        }
        if (null !== $object->getAgencyId()) {
            $data->{'agencyId'} = $object->getAgencyId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }

        return $data;
    }
}
