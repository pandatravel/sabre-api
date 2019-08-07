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

class OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistributionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution();
        if (property_exists($data, 'Direction') && $data->{'Direction'} !== null) {
            $object->setDirection($data->{'Direction'});
        }
        if (property_exists($data, 'Endpoint') && $data->{'Endpoint'} !== null) {
            $object->setEndpoint($data->{'Endpoint'});
        }
        if (property_exists($data, 'Leg') && $data->{'Leg'} !== null) {
            $object->setLeg($data->{'Leg'});
        }
        if (property_exists($data, 'Range') && $data->{'Range'} !== null) {
            $values = [];
            foreach ($data->{'Range'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistributionRange', 'json', $context);
            }
            $object->setRange($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDirection()) {
            $data->{'Direction'} = $object->getDirection();
        }
        if (null !== $object->getEndpoint()) {
            $data->{'Endpoint'} = $object->getEndpoint();
        }
        if (null !== $object->getLeg()) {
            $data->{'Leg'} = $object->getLeg();
        }
        if (null !== $object->getRange()) {
            $values = [];
            foreach ($object->getRange() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Range'} = $values;
        }

        return $data;
    }
}
