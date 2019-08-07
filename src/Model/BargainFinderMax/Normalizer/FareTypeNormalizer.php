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

class FareTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\FareType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\FareType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\FareType();
        if (property_exists($data, 'ancillaryFeeGroup')) {
            $object->setAncillaryFeeGroup($this->denormalizer->denormalize($data->{'ancillaryFeeGroup'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\AncillaryFeeGroupType', 'json', $context));
        }
        if (property_exists($data, 'divideByParty')) {
            $object->setDivideByParty($data->{'divideByParty'});
        }
        if (property_exists($data, 'eTicketable')) {
            $object->setETicketable($data->{'eTicketable'});
        }
        if (property_exists($data, 'governingCarriers')) {
            $object->setGoverningCarriers($data->{'governingCarriers'});
        }
        if (property_exists($data, 'lastTicketDate')) {
            $object->setLastTicketDate($data->{'lastTicketDate'});
        }
        if (property_exists($data, 'offerItemId')) {
            $object->setOfferItemId($data->{'offerItemId'});
        }
        if (property_exists($data, 'passengerInfoList')) {
            $values = [];
            foreach ($data->{'passengerInfoList'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PassengerInfoListElementType', 'json', $context);
            }
            $object->setPassengerInfoList($values);
        }
        if (property_exists($data, 'reissue')) {
            $object->setReissue($data->{'reissue'});
        }
        if (property_exists($data, 'reissueText')) {
            $object->setReissueText($data->{'reissueText'});
        }
        if (property_exists($data, 'serviceId')) {
            $object->setServiceId($data->{'serviceId'});
        }
        if (property_exists($data, 'simultaneousReservation')) {
            $object->setSimultaneousReservation($data->{'simultaneousReservation'});
        }
        if (property_exists($data, 'spanishFamilyDiscount')) {
            $object->setSpanishFamilyDiscount($data->{'spanishFamilyDiscount'});
        }
        if (property_exists($data, 'totalFare')) {
            $object->setTotalFare($this->denormalizer->denormalize($data->{'totalFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TotalFareType', 'json', $context));
        }
        if (property_exists($data, 'validatingCarrierCode')) {
            $object->setValidatingCarrierCode($data->{'validatingCarrierCode'});
        }
        if (property_exists($data, 'validatingCarriers')) {
            $values_1 = [];
            foreach ($data->{'validatingCarriers'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ValidatingCarrierIDType', 'json', $context);
            }
            $object->setValidatingCarriers($values_1);
        }
        if (property_exists($data, 'vita')) {
            $object->setVita($data->{'vita'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAncillaryFeeGroup()) {
            $data->{'ancillaryFeeGroup'} = $this->normalizer->normalize($object->getAncillaryFeeGroup(), 'json', $context);
        }
        if (null !== $object->getDivideByParty()) {
            $data->{'divideByParty'} = $object->getDivideByParty();
        }
        if (null !== $object->getETicketable()) {
            $data->{'eTicketable'} = $object->getETicketable();
        }
        if (null !== $object->getGoverningCarriers()) {
            $data->{'governingCarriers'} = $object->getGoverningCarriers();
        }
        if (null !== $object->getLastTicketDate()) {
            $data->{'lastTicketDate'} = $object->getLastTicketDate();
        }
        if (null !== $object->getOfferItemId()) {
            $data->{'offerItemId'} = $object->getOfferItemId();
        }
        if (null !== $object->getPassengerInfoList()) {
            $values = [];
            foreach ($object->getPassengerInfoList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'passengerInfoList'} = $values;
        }
        if (null !== $object->getReissue()) {
            $data->{'reissue'} = $object->getReissue();
        }
        if (null !== $object->getReissueText()) {
            $data->{'reissueText'} = $object->getReissueText();
        }
        if (null !== $object->getServiceId()) {
            $data->{'serviceId'} = $object->getServiceId();
        }
        if (null !== $object->getSimultaneousReservation()) {
            $data->{'simultaneousReservation'} = $object->getSimultaneousReservation();
        }
        if (null !== $object->getSpanishFamilyDiscount()) {
            $data->{'spanishFamilyDiscount'} = $object->getSpanishFamilyDiscount();
        }
        if (null !== $object->getTotalFare()) {
            $data->{'totalFare'} = $this->normalizer->normalize($object->getTotalFare(), 'json', $context);
        }
        if (null !== $object->getValidatingCarrierCode()) {
            $data->{'validatingCarrierCode'} = $object->getValidatingCarrierCode();
        }
        if (null !== $object->getValidatingCarriers()) {
            $values_1 = [];
            foreach ($object->getValidatingCarriers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'validatingCarriers'} = $values_1;
        }
        if (null !== $object->getVita()) {
            $data->{'vita'} = $object->getVita();
        }

        return $data;
    }
}
