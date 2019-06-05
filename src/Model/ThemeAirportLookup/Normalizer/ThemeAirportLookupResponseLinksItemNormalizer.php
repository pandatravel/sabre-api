<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\ThemeAirportLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ThemeAirportLookupResponseLinksItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\ThemeAirportLookup\\ThemeAirportLookupResponseLinksItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\ThemeAirportLookup\ThemeAirportLookupResponseLinksItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\ThemeAirportLookup\ThemeAirportLookupResponseLinksItem();
        if (property_exists($data, 'rel')) {
            $object->setRel($data->{'rel'});
        }
        if (property_exists($data, 'href')) {
            $object->setHref($data->{'href'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRel()) {
            $data->{'rel'} = $object->getRel();
        }
        if (null !== $object->getHref()) {
            $data->{'href'} = $object->getHref();
        }

        return $data;
    }
}
