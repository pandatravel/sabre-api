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

class OrgOpentravelOta200305ExchangeAirSearchPrefsTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeAirSearchPrefsType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeAirSearchPrefsType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeAirSearchPrefsType();
        if (property_exists($data, 'TPA_Extensions')) {
            $object->setTPAExtensions($this->denormalizer->denormalize($data->{'TPA_Extensions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsType', 'json', $context));
        }
        if (property_exists($data, 'ValidInterlineTicket')) {
            $object->setValidInterlineTicket($data->{'ValidInterlineTicket'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $this->normalizer->normalize($object->getTPAExtensions(), 'json', $context);
        }
        if (null !== $object->getValidInterlineTicket()) {
            $data->{'ValidInterlineTicket'} = $object->getValidInterlineTicket();
        }

        return $data;
    }
}
