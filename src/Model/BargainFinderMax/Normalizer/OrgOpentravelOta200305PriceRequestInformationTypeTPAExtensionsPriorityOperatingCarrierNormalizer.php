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

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier();
        if (property_exists($data, 'Carrier')) {
            $values = [];
            foreach ($data->{'Carrier'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrierCarrier', 'json', $context);
            }
            $object->setCarrier($values);
        }
        if (property_exists($data, 'Leg')) {
            $object->setLeg($data->{'Leg'});
        }
        if (property_exists($data, 'Priority')) {
            $object->setPriority($data->{'Priority'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCarrier()) {
            $values = [];
            foreach ($object->getCarrier() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Carrier'} = $values;
        }
        if (null !== $object->getLeg()) {
            $data->{'Leg'} = $object->getLeg();
        }
        if (null !== $object->getPriority()) {
            $data->{'Priority'} = $object->getPriority();
        }

        return $data;
    }
}
