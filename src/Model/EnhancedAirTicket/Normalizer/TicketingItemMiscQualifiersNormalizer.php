<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemMiscQualifiersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiers';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemMiscQualifiers;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemMiscQualifiers();
        if (property_exists($data, 'AirExtras')) {
            $values = [];
            foreach ($data->{'AirExtras'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersAirExtrasItem', 'json', $context);
            }
            $object->setAirExtras($values);
        }
        if (property_exists($data, 'BaggageAllowance')) {
            $object->setBaggageAllowance($this->denormalizer->denormalize($data->{'BaggageAllowance'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersBaggageAllowance', 'json', $context));
        }
        if (property_exists($data, 'Certificate')) {
            $values_1 = [];
            foreach ($data->{'Certificate'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersCertificateItem', 'json', $context);
            }
            $object->setCertificate($values_1);
        }
        if (property_exists($data, 'Commission')) {
            $object->setCommission($this->denormalizer->denormalize($data->{'Commission'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersCommission', 'json', $context));
        }
        if (property_exists($data, 'DateOfBirth')) {
            $object->setDateOfBirth($data->{'DateOfBirth'});
        }
        if (property_exists($data, 'Endorsement')) {
            $object->setEndorsement($this->denormalizer->denormalize($data->{'Endorsement'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersEndorsement', 'json', $context));
        }
        if (property_exists($data, 'FutureTicket')) {
            $object->setFutureTicket($this->denormalizer->denormalize($data->{'FutureTicket'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersFutureTicket', 'json', $context));
        }
        if (property_exists($data, 'Invoice')) {
            $object->setInvoice($this->denormalizer->denormalize($data->{'Invoice'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersInvoice', 'json', $context));
        }
        if (property_exists($data, 'NeedPrint')) {
            $object->setNeedPrint($this->denormalizer->denormalize($data->{'NeedPrint'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersNeedPrint', 'json', $context));
        }
        if (property_exists($data, 'NetRemit')) {
            $object->setNetRemit($this->denormalizer->denormalize($data->{'NetRemit'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersNetRemit', 'json', $context));
        }
        if (property_exists($data, 'Ticket')) {
            $object->setTicket($this->denormalizer->denormalize($data->{'Ticket'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersTicket', 'json', $context));
        }
        if (property_exists($data, 'TourCode')) {
            $object->setTourCode($this->denormalizer->denormalize($data->{'TourCode'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersTourCode', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirExtras()) {
            $values = [];
            foreach ($object->getAirExtras() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'AirExtras'} = $values;
        }
        if (null !== $object->getBaggageAllowance()) {
            $data->{'BaggageAllowance'} = $this->normalizer->normalize($object->getBaggageAllowance(), 'json', $context);
        }
        if (null !== $object->getCertificate()) {
            $values_1 = [];
            foreach ($object->getCertificate() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Certificate'} = $values_1;
        }
        if (null !== $object->getCommission()) {
            $data->{'Commission'} = $this->normalizer->normalize($object->getCommission(), 'json', $context);
        }
        if (null !== $object->getDateOfBirth()) {
            $data->{'DateOfBirth'} = $object->getDateOfBirth();
        }
        if (null !== $object->getEndorsement()) {
            $data->{'Endorsement'} = $this->normalizer->normalize($object->getEndorsement(), 'json', $context);
        }
        if (null !== $object->getFutureTicket()) {
            $data->{'FutureTicket'} = $this->normalizer->normalize($object->getFutureTicket(), 'json', $context);
        }
        if (null !== $object->getInvoice()) {
            $data->{'Invoice'} = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if (null !== $object->getNeedPrint()) {
            $data->{'NeedPrint'} = $this->normalizer->normalize($object->getNeedPrint(), 'json', $context);
        }
        if (null !== $object->getNetRemit()) {
            $data->{'NetRemit'} = $this->normalizer->normalize($object->getNetRemit(), 'json', $context);
        }
        if (null !== $object->getTicket()) {
            $data->{'Ticket'} = $this->normalizer->normalize($object->getTicket(), 'json', $context);
        }
        if (null !== $object->getTourCode()) {
            $data->{'TourCode'} = $this->normalizer->normalize($object->getTourCode(), 'json', $context);
        }

        return $data;
    }
}
