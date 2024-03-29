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

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime();
        if (property_exists($data, 'Minus') && $data->{'Minus'} !== null) {
            $object->setMinus($data->{'Minus'});
        }
        if (property_exists($data, 'Plus') && $data->{'Plus'} !== null) {
            $object->setPlus($data->{'Plus'});
        }
        if (property_exists($data, 'PlusMinus') && $data->{'PlusMinus'} !== null) {
            $object->setPlusMinus($data->{'PlusMinus'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMinus()) {
            $data->{'Minus'} = $object->getMinus();
        }
        if (null !== $object->getPlus()) {
            $data->{'Plus'} = $object->getPlus();
        }
        if (null !== $object->getPlusMinus()) {
            $data->{'PlusMinus'} = $object->getPlusMinus();
        }

        return $data;
    }
}
