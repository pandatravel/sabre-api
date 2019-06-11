<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostProcessingEndTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransaction';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessingEndTransaction;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessingEndTransaction();
        if (property_exists($data, 'Source')) {
            $object->setSource($this->denormalizer->denormalize($data->{'Source'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionSource', 'json', $context));
        }
        if (property_exists($data, 'Email')) {
            $object->setEmail($this->denormalizer->denormalize($data->{'Email'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmail', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSource()) {
            $data->{'Source'} = $this->normalizer->normalize($object->getSource(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data->{'Email'} = $this->normalizer->normalize($object->getEmail(), 'json', $context);
        }

        return $data;
    }
}
