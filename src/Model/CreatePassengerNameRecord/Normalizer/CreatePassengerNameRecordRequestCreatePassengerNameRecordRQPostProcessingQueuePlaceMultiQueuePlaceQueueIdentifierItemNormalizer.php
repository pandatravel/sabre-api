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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlaceMultiQueuePlaceQueueIdentifierItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlaceMultiQueuePlaceQueueIdentifierItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlaceMultiQueuePlaceQueueIdentifierItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlaceMultiQueuePlaceQueueIdentifierItem();
        if (property_exists($data, 'Number') && $data->{'Number'} !== null) {
            $object->setNumber($data->{'Number'});
        }
        if (property_exists($data, 'PrefatoryInstructionCode') && $data->{'PrefatoryInstructionCode'} !== null) {
            $object->setPrefatoryInstructionCode($data->{'PrefatoryInstructionCode'});
        }
        if (property_exists($data, 'PseudoCityCode') && $data->{'PseudoCityCode'} !== null) {
            $object->setPseudoCityCode($data->{'PseudoCityCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNumber()) {
            $data->{'Number'} = $object->getNumber();
        }
        if (null !== $object->getPrefatoryInstructionCode()) {
            $data->{'PrefatoryInstructionCode'} = $object->getPrefatoryInstructionCode();
        }
        if (null !== $object->getPseudoCityCode()) {
            $data->{'PseudoCityCode'} = $object->getPseudoCityCode();
        }

        return $data;
    }
}
