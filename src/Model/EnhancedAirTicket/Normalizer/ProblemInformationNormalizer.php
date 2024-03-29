<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\ProblemInformation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\ProblemInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\ProblemInformation();
        if (property_exists($data, 'SystemSpecificResults')) {
            $values = [];
            foreach ($data->{'SystemSpecificResults'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\ProblemInformationSystemSpecificResultsItem', 'json', $context);
            }
            $object->setSystemSpecificResults($values);
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'timeStamp')) {
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
