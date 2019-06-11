<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProblemInformationSystemSpecificResultsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\ProblemInformationSystemSpecificResultsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\ProblemInformationSystemSpecificResultsItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\ProblemInformationSystemSpecificResultsItem();
        if (property_exists($data, 'HostCommand')) {
            $object->setHostCommand($this->denormalizer->denormalize($data->{'HostCommand'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\ProblemInformationSystemSpecificResultsItemHostCommand', 'json', $context));
        }
        if (property_exists($data, 'Message')) {
            $values = [];
            foreach ($data->{'Message'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\ProblemInformationSystemSpecificResultsItemMessageItem', 'json', $context);
            }
            $object->setMessage($values);
        }
        if (property_exists($data, 'ShortText')) {
            $object->setShortText($data->{'ShortText'});
        }
        if (property_exists($data, 'Element')) {
            $object->setElement($data->{'Element'});
        }
        if (property_exists($data, 'RecordID')) {
            $object->setRecordID($data->{'RecordID'});
        }
        if (property_exists($data, 'DocURL')) {
            $object->setDocURL($data->{'DocURL'});
        }
        if (property_exists($data, 'timeStamp')) {
            $object->setTimeStamp($data->{'timeStamp'});
        }
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHostCommand()) {
            $data->{'HostCommand'} = $this->normalizer->normalize($object->getHostCommand(), 'json', $context);
        }
        if (null !== $object->getMessage()) {
            $values = [];
            foreach ($object->getMessage() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Message'} = $values;
        }
        if (null !== $object->getShortText()) {
            $data->{'ShortText'} = $object->getShortText();
        }
        if (null !== $object->getElement()) {
            $data->{'Element'} = $object->getElement();
        }
        if (null !== $object->getRecordID()) {
            $data->{'RecordID'} = $object->getRecordID();
        }
        if (null !== $object->getDocURL()) {
            $data->{'DocURL'} = $object->getDocURL();
        }
        if (null !== $object->getTimeStamp()) {
            $data->{'timeStamp'} = $object->getTimeStamp();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }

        return $data;
    }
}
