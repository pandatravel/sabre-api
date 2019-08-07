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

class OrgOpentravelOta200305PassengerTypeQuantityTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PassengerTypeQuantityType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PassengerTypeQuantityType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PassengerTypeQuantityType();
        if (property_exists($data, 'Age')) {
            $object->setAge($data->{'Age'});
        }
        if (property_exists($data, 'Changeable')) {
            $object->setChangeable($data->{'Changeable'});
        }
        if (property_exists($data, 'Code')) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'CodeContext')) {
            $object->setCodeContext($data->{'CodeContext'});
        }
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Index')) {
            $object->setIndex($data->{'Index'});
        }
        if (property_exists($data, 'Quantity')) {
            $object->setQuantity($data->{'Quantity'});
        }
        if (property_exists($data, 'RequestedPassengerIndex')) {
            $object->setRequestedPassengerIndex($data->{'RequestedPassengerIndex'});
        }
        if (property_exists($data, 'TPA_Extensions')) {
            $object->setTPAExtensions($this->denormalizer->denormalize($data->{'TPA_Extensions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensions', 'json', $context));
        }
        if (property_exists($data, 'URI')) {
            $object->setURI($data->{'URI'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAge()) {
            $data->{'Age'} = $object->getAge();
        }
        if (null !== $object->getChangeable()) {
            $data->{'Changeable'} = $object->getChangeable();
        }
        if (null !== $object->getCode()) {
            $data->{'Code'} = $object->getCode();
        }
        if (null !== $object->getCodeContext()) {
            $data->{'CodeContext'} = $object->getCodeContext();
        }
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getIndex()) {
            $data->{'Index'} = $object->getIndex();
        }
        if (null !== $object->getQuantity()) {
            $data->{'Quantity'} = $object->getQuantity();
        }
        if (null !== $object->getRequestedPassengerIndex()) {
            $data->{'RequestedPassengerIndex'} = $object->getRequestedPassengerIndex();
        }
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $this->normalizer->normalize($object->getTPAExtensions(), 'json', $context);
        }
        if (null !== $object->getURI()) {
            $data->{'URI'} = $object->getURI();
        }

        return $data;
    }
}
