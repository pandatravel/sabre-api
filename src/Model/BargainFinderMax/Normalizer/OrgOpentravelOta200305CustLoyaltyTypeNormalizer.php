<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305CustLoyaltyTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CustLoyaltyType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CustLoyaltyType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305CustLoyaltyType();
        if (property_exists($data, 'EffectiveDate') && $data->{'EffectiveDate'} !== null) {
            $object->setEffectiveDate($data->{'EffectiveDate'});
        }
        if (property_exists($data, 'ExpireDate') && $data->{'ExpireDate'} !== null) {
            $object->setExpireDate($data->{'ExpireDate'});
        }
        if (property_exists($data, 'LoyalLevel') && $data->{'LoyalLevel'} !== null) {
            $object->setLoyalLevel($data->{'LoyalLevel'});
        }
        if (property_exists($data, 'MembershipID') && $data->{'MembershipID'} !== null) {
            $object->setMembershipID($data->{'MembershipID'});
        }
        if (property_exists($data, 'ProgramID') && $data->{'ProgramID'} !== null) {
            $object->setProgramID($data->{'ProgramID'});
        }
        if (property_exists($data, 'RPH') && $data->{'RPH'} !== null) {
            $object->setRPH($data->{'RPH'});
        }
        if (property_exists($data, 'ShareMarketInd') && $data->{'ShareMarketInd'} !== null) {
            $object->setShareMarketInd($data->{'ShareMarketInd'});
        }
        if (property_exists($data, 'ShareSynchInd') && $data->{'ShareSynchInd'} !== null) {
            $object->setShareSynchInd($data->{'ShareSynchInd'});
        }
        if (property_exists($data, 'SignupDate') && $data->{'SignupDate'} !== null) {
            $object->setSignupDate($data->{'SignupDate'});
        }
        if (property_exists($data, 'SingleVendorInd') && $data->{'SingleVendorInd'} !== null) {
            $object->setSingleVendorInd($data->{'SingleVendorInd'});
        }
        if (property_exists($data, 'TravelSector') && $data->{'TravelSector'} !== null) {
            $object->setTravelSector($data->{'TravelSector'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEffectiveDate()) {
            $data->{'EffectiveDate'} = $object->getEffectiveDate();
        }
        if (null !== $object->getExpireDate()) {
            $data->{'ExpireDate'} = $object->getExpireDate();
        }
        if (null !== $object->getLoyalLevel()) {
            $data->{'LoyalLevel'} = $object->getLoyalLevel();
        }
        if (null !== $object->getMembershipID()) {
            $data->{'MembershipID'} = $object->getMembershipID();
        }
        if (null !== $object->getProgramID()) {
            $data->{'ProgramID'} = $object->getProgramID();
        }
        if (null !== $object->getRPH()) {
            $data->{'RPH'} = $object->getRPH();
        }
        if (null !== $object->getShareMarketInd()) {
            $data->{'ShareMarketInd'} = $object->getShareMarketInd();
        }
        if (null !== $object->getShareSynchInd()) {
            $data->{'ShareSynchInd'} = $object->getShareSynchInd();
        }
        if (null !== $object->getSignupDate()) {
            $data->{'SignupDate'} = $object->getSignupDate();
        }
        if (null !== $object->getSingleVendorInd()) {
            $data->{'SingleVendorInd'} = $object->getSingleVendorInd();
        }
        if (null !== $object->getTravelSector()) {
            $data->{'TravelSector'} = $object->getTravelSector();
        }

        return $data;
    }
}
