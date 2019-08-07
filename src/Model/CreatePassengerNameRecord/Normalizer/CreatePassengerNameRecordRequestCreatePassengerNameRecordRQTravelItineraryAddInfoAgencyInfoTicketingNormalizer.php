<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoTicketing();
        if (property_exists($data, 'PseudoCityCode')) {
            $object->setPseudoCityCode($data->{'PseudoCityCode'});
        }
        if (property_exists($data, 'QueueNumber')) {
            $object->setQueueNumber($data->{'QueueNumber'});
        }
        if (property_exists($data, 'QueueName')) {
            $object->setQueueName($data->{'QueueName'});
        }
        if (property_exists($data, 'ShortText')) {
            $object->setShortText($data->{'ShortText'});
        }
        if (property_exists($data, 'TicketTimeLimit')) {
            $object->setTicketTimeLimit($data->{'TicketTimeLimit'});
        }
        if (property_exists($data, 'TicketType')) {
            $object->setTicketType($data->{'TicketType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPseudoCityCode()) {
            $data->{'PseudoCityCode'} = $object->getPseudoCityCode();
        }
        if (null !== $object->getQueueNumber()) {
            $data->{'QueueNumber'} = $object->getQueueNumber();
        }
        if (null !== $object->getQueueName()) {
            $data->{'QueueName'} = $object->getQueueName();
        }
        if (null !== $object->getShortText()) {
            $data->{'ShortText'} = $object->getShortText();
        }
        if (null !== $object->getTicketTimeLimit()) {
            $data->{'TicketTimeLimit'} = $object->getTicketTimeLimit();
        }
        if (null !== $object->getTicketType()) {
            $data->{'TicketType'} = $object->getTicketType();
        }

        return $data;
    }
}
