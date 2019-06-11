<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostProcessingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessing';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessing;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessing();
        if (property_exists($data, 'acceptNegotiatedFare')) {
            $object->setAcceptNegotiatedFare($data->{'acceptNegotiatedFare'});
        }
        if (property_exists($data, 'acceptPriceChanges')) {
            $object->setAcceptPriceChanges($data->{'acceptPriceChanges'});
        }
        if (property_exists($data, 'actionOnPQExpired')) {
            $object->setActionOnPQExpired($data->{'actionOnPQExpired'});
        }
        if (property_exists($data, 'EndTransaction')) {
            $object->setEndTransaction($this->denormalizer->denormalize($data->{'EndTransaction'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransaction', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAcceptNegotiatedFare()) {
            $data->{'acceptNegotiatedFare'} = $object->getAcceptNegotiatedFare();
        }
        if (null !== $object->getAcceptPriceChanges()) {
            $data->{'acceptPriceChanges'} = $object->getAcceptPriceChanges();
        }
        if (null !== $object->getActionOnPQExpired()) {
            $data->{'actionOnPQExpired'} = $object->getActionOnPQExpired();
        }
        if (null !== $object->getEndTransaction()) {
            $data->{'EndTransaction'} = $this->normalizer->normalize($object->getEndTransaction(), 'json', $context);
        }

        return $data;
    }
}
