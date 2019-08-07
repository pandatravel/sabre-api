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

class BrandTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\BrandType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\BrandType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\BrandType();
        if (property_exists($data, 'brandName') && $data->{'brandName'} !== null) {
            $object->setBrandName($data->{'brandName'});
        }
        if (property_exists($data, 'code') && $data->{'code'} !== null) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'programCode') && $data->{'programCode'} !== null) {
            $object->setProgramCode($data->{'programCode'});
        }
        if (property_exists($data, 'programDescription') && $data->{'programDescription'} !== null) {
            $object->setProgramDescription($data->{'programDescription'});
        }
        if (property_exists($data, 'programId') && $data->{'programId'} !== null) {
            $object->setProgramId($data->{'programId'});
        }
        if (property_exists($data, 'programSystemCode') && $data->{'programSystemCode'} !== null) {
            $object->setProgramSystemCode($data->{'programSystemCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBrandName()) {
            $data->{'brandName'} = $object->getBrandName();
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getProgramCode()) {
            $data->{'programCode'} = $object->getProgramCode();
        }
        if (null !== $object->getProgramDescription()) {
            $data->{'programDescription'} = $object->getProgramDescription();
        }
        if (null !== $object->getProgramId()) {
            $data->{'programId'} = $object->getProgramId();
        }
        if (null !== $object->getProgramSystemCode()) {
            $data->{'programSystemCode'} = $object->getProgramSystemCode();
        }

        return $data;
    }
}
