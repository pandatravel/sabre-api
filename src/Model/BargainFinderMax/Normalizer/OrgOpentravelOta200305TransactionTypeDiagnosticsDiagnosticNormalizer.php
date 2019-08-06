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

class OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnosticNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnostic';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnostic';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnostic();
        if (property_exists($data, 'Code')) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'DiagnosticArgument')) {
            $values = [];
            foreach ($data->{'DiagnosticArgument'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnosticDiagnosticArgument', 'json', $context);
            }
            $object->setDiagnosticArgument($values);
        }
        if (property_exists($data, 'TPA_Extensions')) {
            $object->setTPAExtensions($data->{'TPA_Extensions'});
        }
        if (property_exists($data, 'Target')) {
            $object->setTarget($data->{'Target'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCode()) {
            $data->{'Code'} = $object->getCode();
        }
        if (null !== $object->getDiagnosticArgument()) {
            $values = [];
            foreach ($object->getDiagnosticArgument() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'DiagnosticArgument'} = $values;
        }
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $object->getTPAExtensions();
        }
        if (null !== $object->getTarget()) {
            $data->{'Target'} = $object->getTarget();
        }

        return $data;
    }
}
