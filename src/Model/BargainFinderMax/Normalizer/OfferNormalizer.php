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

class OfferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\Offer';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\Offer';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\Offer();
        if (property_exists($data, 'offerId') && $data->{'offerId'} !== null) {
            $object->setOfferId($data->{'offerId'});
        }
        if (property_exists($data, 'source') && $data->{'source'} !== null) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'ttl') && $data->{'ttl'} !== null) {
            $object->setTtl($data->{'ttl'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOfferId()) {
            $data->{'offerId'} = $object->getOfferId();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getTtl()) {
            $data->{'ttl'} = $object->getTtl();
        }

        return $data;
    }
}
