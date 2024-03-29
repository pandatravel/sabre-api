<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProblemInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ProblemInformation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ProblemInformation';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\ProblemInformation();
        if (property_exists($data, 'SystemSpecificResults') && $data->{'SystemSpecificResults'} !== null) {
            $values = [];
            foreach ($data->{'SystemSpecificResults'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ProblemInformationSystemSpecificResultsItem', 'json', $context);
            }
            $object->setSystemSpecificResults($values);
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'timeStamp') && $data->{'timeStamp'} !== null) {
            $object->setTimeStamp($data->{'timeStamp'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSystemSpecificResults()) {
            $values = [];
            foreach ($object->getSystemSpecificResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'SystemSpecificResults'} = $values;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getTimeStamp()) {
            $data->{'timeStamp'} = $object->getTimeStamp();
        }

        return $data;
    }
}
