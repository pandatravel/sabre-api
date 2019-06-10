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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersAirExtrasNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersAirExtras';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersAirExtras;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersAirExtras();
        if (property_exists($data, 'CustLoyalty')) {
            $values = [];
            foreach ($data->{'CustLoyalty'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersAirExtrasCustLoyaltyItem', 'json', $context);
            }
            $object->setCustLoyalty($values);
        }
        if (property_exists($data, 'Qualifier')) {
            $values_1 = [];
            foreach ($data->{'Qualifier'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setQualifier($values_1);
        }
        if (property_exists($data, 'SSR_Code')) {
            $values_2 = [];
            foreach ($data->{'SSR_Code'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSSRCode($values_2);
        }
        if (property_exists($data, 'Ticketing')) {
            $values_3 = [];
            foreach ($data->{'Ticketing'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersAirExtrasTicketingItem', 'json', $context);
            }
            $object->setTicketing($values_3);
        }
        if (property_exists($data, 'Ind')) {
            $object->setInd($data->{'Ind'});
        }
        if (property_exists($data, 'Summary')) {
            $object->setSummary($data->{'Summary'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCustLoyalty()) {
            $values = [];
            foreach ($object->getCustLoyalty() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'CustLoyalty'} = $values;
        }
        if (null !== $object->getQualifier()) {
            $values_1 = [];
            foreach ($object->getQualifier() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Qualifier'} = $values_1;
        }
        if (null !== $object->getSSRCode()) {
            $values_2 = [];
            foreach ($object->getSSRCode() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'SSR_Code'} = $values_2;
        }
        if (null !== $object->getTicketing()) {
            $values_3 = [];
            foreach ($object->getTicketing() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'Ticketing'} = $values_3;
        }
        if (null !== $object->getInd()) {
            $data->{'Ind'} = $object->getInd();
        }
        if (null !== $object->getSummary()) {
            $data->{'Summary'} = $object->getSummary();
        }

        return $data;
    }
}