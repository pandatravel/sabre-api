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

class OrgOpentravelOta200305VoluntaryChangesTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305VoluntaryChangesType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305VoluntaryChangesType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305VoluntaryChangesType();
        if (property_exists($data, 'Penalty')) {
            $object->setPenalty($this->denormalizer->denormalize($data->{'Penalty'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305VoluntaryChangesTypePenalty', 'json', $context));
        }
        if (property_exists($data, 'VolChangeInd')) {
            $object->setVolChangeInd($data->{'VolChangeInd'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPenalty()) {
            $data->{'Penalty'} = $this->normalizer->normalize($object->getPenalty(), 'json', $context);
        }
        if (null !== $object->getVolChangeInd()) {
            $data->{'VolChangeInd'} = $object->getVolChangeInd();
        }

        return $data;
    }
}
