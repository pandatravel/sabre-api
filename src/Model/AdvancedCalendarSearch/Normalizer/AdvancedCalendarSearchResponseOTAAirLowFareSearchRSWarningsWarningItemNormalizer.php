<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AdvancedCalendarSearchResponseOTAAirLowFareSearchRSWarningsWarningItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchResponseOTAAirLowFareSearchRSWarningsWarningItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchResponseOTAAirLowFareSearchRSWarningsWarningItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchResponseOTAAirLowFareSearchRSWarningsWarningItem();
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'ShortText')) {
            $object->setShortText($data->{'ShortText'});
        }
        if (property_exists($data, 'Code')) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'MessageClass')) {
            $object->setMessageClass($data->{'MessageClass'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getShortText()) {
            $data->{'ShortText'} = $object->getShortText();
        }
        if (null !== $object->getCode()) {
            $data->{'Code'} = $object->getCode();
        }
        if (null !== $object->getMessageClass()) {
            $data->{'MessageClass'} = $object->getMessageClass();
        }

        return $data;
    }
}