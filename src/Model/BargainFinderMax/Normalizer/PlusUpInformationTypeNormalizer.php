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

class PlusUpInformationTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PlusUpInformationType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PlusUpInformationType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\PlusUpInformationType();
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'countryOfPayment') && $data->{'countryOfPayment'} !== null) {
            $object->setCountryOfPayment($data->{'countryOfPayment'});
        }
        if (property_exists($data, 'destination') && $data->{'destination'} !== null) {
            $object->setDestination($data->{'destination'});
        }
        if (property_exists($data, 'fareDestination') && $data->{'fareDestination'} !== null) {
            $object->setFareDestination($data->{'fareDestination'});
        }
        if (property_exists($data, 'fareOrigin') && $data->{'fareOrigin'} !== null) {
            $object->setFareOrigin($data->{'fareOrigin'});
        }
        if (property_exists($data, 'message') && $data->{'message'} !== null) {
            $object->setMessage($data->{'message'});
        }
        if (property_exists($data, 'origin') && $data->{'origin'} !== null) {
            $object->setOrigin($data->{'origin'});
        }
        if (property_exists($data, 'viaCity') && $data->{'viaCity'} !== null) {
            $object->setViaCity($data->{'viaCity'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getCountryOfPayment()) {
            $data->{'countryOfPayment'} = $object->getCountryOfPayment();
        }
        if (null !== $object->getDestination()) {
            $data->{'destination'} = $object->getDestination();
        }
        if (null !== $object->getFareDestination()) {
            $data->{'fareDestination'} = $object->getFareDestination();
        }
        if (null !== $object->getFareOrigin()) {
            $data->{'fareOrigin'} = $object->getFareOrigin();
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $object->getMessage();
        }
        if (null !== $object->getOrigin()) {
            $data->{'origin'} = $object->getOrigin();
        }
        if (null !== $object->getViaCity()) {
            $data->{'viaCity'} = $object->getViaCity();
        }

        return $data;
    }
}
