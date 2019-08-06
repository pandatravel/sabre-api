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

class OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier();
        if (property_exists($data, 'Default')) {
            $object->setDefault($this->denormalizer->denormalize($data->{'Default'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault', 'json', $context));
        }
        if (property_exists($data, 'OnlineIndicator')) {
            $object->setOnlineIndicator($data->{'OnlineIndicator'});
        }
        if (property_exists($data, 'Override')) {
            $values = [];
            foreach ($data->{'Override'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierOverride', 'json', $context);
            }
            $object->setOverride($values);
        }
        if (property_exists($data, 'Weight')) {
            $object->setWeight($data->{'Weight'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDefault()) {
            $data->{'Default'} = $this->normalizer->normalize($object->getDefault(), 'json', $context);
        }
        if (null !== $object->getOnlineIndicator()) {
            $data->{'OnlineIndicator'} = $object->getOnlineIndicator();
        }
        if (null !== $object->getOverride()) {
            $values = [];
            foreach ($object->getOverride() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Override'} = $values;
        }
        if (null !== $object->getWeight()) {
            $data->{'Weight'} = $object->getWeight();
        }

        return $data;
    }
}
