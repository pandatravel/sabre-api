<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions();
        if (property_exists($data, 'AlternateAirportCities')) {
            $values = [];
            foreach ($data->{'AlternateAirportCities'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities', 'json', $context);
            }
            $object->setAlternateAirportCities($values);
        }
        if (property_exists($data, 'AlternateAirportMileage')) {
            $object->setAlternateAirportMileage($this->denormalizer->denormalize($data->{'AlternateAirportMileage'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportMileage', 'json', $context));
        }
        if (property_exists($data, 'AlternateDatesProcessing')) {
            $object->setAlternateDatesProcessing($this->denormalizer->denormalize($data->{'AlternateDatesProcessing'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateDatesProcessing', 'json', $context));
        }
        if (property_exists($data, 'AlternatePCC')) {
            $values_1 = [];
            foreach ($data->{'AlternatePCC'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AlternatePCCType', 'json', $context);
            }
            $object->setAlternatePCC($values_1);
        }
        if (property_exists($data, 'AwardShopping')) {
            $object->setAwardShopping($this->denormalizer->denormalize($data->{'AwardShopping'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AwardShoppingType', 'json', $context));
        }
        if (property_exists($data, 'Billing')) {
            $object->setBilling($this->denormalizer->denormalize($data->{'Billing'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305BillingInformationType', 'json', $context));
        }
        if (property_exists($data, 'DiversityControl')) {
            $object->setDiversityControl($this->denormalizer->denormalize($data->{'DiversityControl'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DiversityControlType', 'json', $context));
        }
        if (property_exists($data, 'Exchange')) {
            $values_2 = [];
            foreach ($data->{'Exchange'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeType', 'json', $context);
            }
            $object->setExchange($values_2);
        }
        if (property_exists($data, 'ExchangeSettings')) {
            $object->setExchangeSettings($this->denormalizer->denormalize($data->{'ExchangeSettings'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeSettingsType', 'json', $context));
        }
        if (property_exists($data, 'IntelliSellTransaction')) {
            $object->setIntelliSellTransaction($this->denormalizer->denormalize($data->{'IntelliSellTransaction'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TransactionType', 'json', $context));
        }
        if (property_exists($data, 'ItineraryCache')) {
            $object->setItineraryCache($this->denormalizer->denormalize($data->{'ItineraryCache'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsItineraryCache', 'json', $context));
        }
        if (property_exists($data, 'MessagingDetails')) {
            $object->setMessagingDetails($this->denormalizer->denormalize($data->{'MessagingDetails'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetails', 'json', $context));
        }
        if (property_exists($data, 'MultiTicket')) {
            $object->setMultiTicket($this->denormalizer->denormalize($data->{'MultiTicket'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMultiTicket', 'json', $context));
        }
        if (property_exists($data, 'Partitions')) {
            $object->setPartitions($this->denormalizer->denormalize($data->{'Partitions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions', 'json', $context));
        }
        if (property_exists($data, 'PointsRedemption')) {
            $object->setPointsRedemption($this->denormalizer->denormalize($data->{'PointsRedemption'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPointsRedemption', 'json', $context));
        }
        if (property_exists($data, 'ReservationData')) {
            $object->setReservationData($this->denormalizer->denormalize($data->{'ReservationData'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsReservationData', 'json', $context));
        }
        if (property_exists($data, 'SplitTaxes')) {
            $object->setSplitTaxes($this->denormalizer->denormalize($data->{'SplitTaxes'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsSplitTaxes', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAlternateAirportCities()) {
            $values = [];
            foreach ($object->getAlternateAirportCities() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'AlternateAirportCities'} = $values;
        }
        if (null !== $object->getAlternateAirportMileage()) {
            $data->{'AlternateAirportMileage'} = $this->normalizer->normalize($object->getAlternateAirportMileage(), 'json', $context);
        }
        if (null !== $object->getAlternateDatesProcessing()) {
            $data->{'AlternateDatesProcessing'} = $this->normalizer->normalize($object->getAlternateDatesProcessing(), 'json', $context);
        }
        if (null !== $object->getAlternatePCC()) {
            $values_1 = [];
            foreach ($object->getAlternatePCC() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'AlternatePCC'} = $values_1;
        }
        if (null !== $object->getAwardShopping()) {
            $data->{'AwardShopping'} = $this->normalizer->normalize($object->getAwardShopping(), 'json', $context);
        }
        if (null !== $object->getBilling()) {
            $data->{'Billing'} = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if (null !== $object->getDiversityControl()) {
            $data->{'DiversityControl'} = $this->normalizer->normalize($object->getDiversityControl(), 'json', $context);
        }
        if (null !== $object->getExchange()) {
            $values_2 = [];
            foreach ($object->getExchange() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Exchange'} = $values_2;
        }
        if (null !== $object->getExchangeSettings()) {
            $data->{'ExchangeSettings'} = $this->normalizer->normalize($object->getExchangeSettings(), 'json', $context);
        }
        if (null !== $object->getIntelliSellTransaction()) {
            $data->{'IntelliSellTransaction'} = $this->normalizer->normalize($object->getIntelliSellTransaction(), 'json', $context);
        }
        if (null !== $object->getItineraryCache()) {
            $data->{'ItineraryCache'} = $this->normalizer->normalize($object->getItineraryCache(), 'json', $context);
        }
        if (null !== $object->getMessagingDetails()) {
            $data->{'MessagingDetails'} = $this->normalizer->normalize($object->getMessagingDetails(), 'json', $context);
        }
        if (null !== $object->getMultiTicket()) {
            $data->{'MultiTicket'} = $this->normalizer->normalize($object->getMultiTicket(), 'json', $context);
        }
        if (null !== $object->getPartitions()) {
            $data->{'Partitions'} = $this->normalizer->normalize($object->getPartitions(), 'json', $context);
        }
        if (null !== $object->getPointsRedemption()) {
            $data->{'PointsRedemption'} = $this->normalizer->normalize($object->getPointsRedemption(), 'json', $context);
        }
        if (null !== $object->getReservationData()) {
            $data->{'ReservationData'} = $this->normalizer->normalize($object->getReservationData(), 'json', $context);
        }
        if (null !== $object->getSplitTaxes()) {
            $data->{'SplitTaxes'} = $this->normalizer->normalize($object->getSplitTaxes(), 'json', $context);
        }

        return $data;
    }
}
