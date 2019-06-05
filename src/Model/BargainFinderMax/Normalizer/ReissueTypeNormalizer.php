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

class ReissueTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ReissueType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\ReissueType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\ReissueType();
        if (property_exists($data, 'changeFees')) {
            $values = [];
            foreach ($data->{'changeFees'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ChangeFeeType', 'json', $context);
            }
            $object->setChangeFees($values);
        }
        if (property_exists($data, 'electronicTicketNotAllowed')) {
            $object->setElectronicTicketNotAllowed($data->{'electronicTicketNotAllowed'});
        }
        if (property_exists($data, 'electronicTicketRequired')) {
            $object->setElectronicTicketRequired($data->{'electronicTicketRequired'});
        }
        if (property_exists($data, 'formOfRefund')) {
            $object->setFormOfRefund($data->{'formOfRefund'});
        }
        if (property_exists($data, 'residual')) {
            $object->setResidual($data->{'residual'});
        }
        if (property_exists($data, 'tag7Result')) {
            $object->setTag7Result($data->{'tag7Result'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChangeFees()) {
            $values = [];
            foreach ($object->getChangeFees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'changeFees'} = $values;
        }
        if (null !== $object->getElectronicTicketNotAllowed()) {
            $data->{'electronicTicketNotAllowed'} = $object->getElectronicTicketNotAllowed();
        }
        if (null !== $object->getElectronicTicketRequired()) {
            $data->{'electronicTicketRequired'} = $object->getElectronicTicketRequired();
        }
        if (null !== $object->getFormOfRefund()) {
            $data->{'formOfRefund'} = $object->getFormOfRefund();
        }
        if (null !== $object->getResidual()) {
            $data->{'residual'} = $object->getResidual();
        }
        if (null !== $object->getTag7Result()) {
            $data->{'tag7Result'} = $object->getTag7Result();
        }

        return $data;
    }
}