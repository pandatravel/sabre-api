<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemMiscQualifiersNeedPrintNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersNeedPrint';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemMiscQualifiersNeedPrint;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemMiscQualifiersNeedPrint();
        if (property_exists($data, 'AuditorCoupon')) {
            $object->setAuditorCoupon($data->{'AuditorCoupon'});
        }
        if (property_exists($data, 'Itinerary')) {
            $object->setItinerary($data->{'Itinerary'});
        }
        if (property_exists($data, 'PassengerReceipt')) {
            $object->setPassengerReceipt($data->{'PassengerReceipt'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAuditorCoupon()) {
            $data->{'AuditorCoupon'} = $object->getAuditorCoupon();
        }
        if (null !== $object->getItinerary()) {
            $data->{'Itinerary'} = $object->getItinerary();
        }
        if (null !== $object->getPassengerReceipt()) {
            $data->{'PassengerReceipt'} = $object->getPassengerReceipt();
        }

        return $data;
    }
}
