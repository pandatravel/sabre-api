<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersBSPTicketingPayLaterPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingPayLaterPlan';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBSPTicketingPayLaterPlan;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBSPTicketingPayLaterPlan();
        if (property_exists($data, 'Fare')) {
            $object->setFare($this->denormalizer->denormalize($data->{'Fare'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFare', 'json', $context));
        }
        if (property_exists($data, 'FOP')) {
            $object->setFOP($this->denormalizer->denormalize($data->{'FOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingPayLaterPlanFOP', 'json', $context));
        }
        if (property_exists($data, 'Installment')) {
            $object->setInstallment($this->denormalizer->denormalize($data->{'Installment'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingPayLaterPlanInstallment', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFare()) {
            $data->{'Fare'} = $this->normalizer->normalize($object->getFare(), 'json', $context);
        }
        if (null !== $object->getFOP()) {
            $data->{'FOP'} = $this->normalizer->normalize($object->getFOP(), 'json', $context);
        }
        if (null !== $object->getInstallment()) {
            $data->{'Installment'} = $this->normalizer->normalize($object->getInstallment(), 'json', $context);
        }

        return $data;
    }
}
