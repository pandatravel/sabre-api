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

class ApplicationResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ApplicationResults';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ApplicationResults';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\ApplicationResults();
        if (property_exists($data, 'Success') && $data->{'Success'} !== null) {
            $values = [];
            foreach ($data->{'Success'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ProblemInformation', 'json', $context);
            }
            $object->setSuccess($values);
        }
        if (property_exists($data, 'Error') && $data->{'Error'} !== null) {
            $values_1 = [];
            foreach ($data->{'Error'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ProblemInformation', 'json', $context);
            }
            $object->setError($values_1);
        }
        if (property_exists($data, 'Warning') && $data->{'Warning'} !== null) {
            $values_2 = [];
            foreach ($data->{'Warning'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\ProblemInformation', 'json', $context);
            }
            $object->setWarning($values_2);
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSuccess()) {
            $values = [];
            foreach ($object->getSuccess() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Success'} = $values;
        }
        if (null !== $object->getError()) {
            $values_1 = [];
            foreach ($object->getError() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Error'} = $values_1;
        }
        if (null !== $object->getWarning()) {
            $values_2 = [];
            foreach ($object->getWarning() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Warning'} = $values_2;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }

        return $data;
    }
}
