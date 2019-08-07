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

class OrgOpentravelOta200305ExchangeSourceTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeSourceType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeSourceType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeSourceType();
        if (property_exists($data, 'AbacusUser') && $data->{'AbacusUser'} !== null) {
            $object->setAbacusUser($data->{'AbacusUser'});
        }
        if (property_exists($data, 'AccountingCode') && $data->{'AccountingCode'} !== null) {
            $object->setAccountingCode($data->{'AccountingCode'});
        }
        if (property_exists($data, 'AgentCity') && $data->{'AgentCity'} !== null) {
            $object->setAgentCity($data->{'AgentCity'});
        }
        if (property_exists($data, 'AgentDepartmentCode') && $data->{'AgentDepartmentCode'} !== null) {
            $object->setAgentDepartmentCode($data->{'AgentDepartmentCode'});
        }
        if (property_exists($data, 'AgentDuty') && $data->{'AgentDuty'} !== null) {
            $object->setAgentDuty($data->{'AgentDuty'});
        }
        if (property_exists($data, 'AgentDutyCode') && $data->{'AgentDutyCode'} !== null) {
            $object->setAgentDutyCode($data->{'AgentDutyCode'});
        }
        if (property_exists($data, 'AgentFunction') && $data->{'AgentFunction'} !== null) {
            $object->setAgentFunction($data->{'AgentFunction'});
        }
        if (property_exists($data, 'AgentIATA') && $data->{'AgentIATA'} !== null) {
            $object->setAgentIATA($data->{'AgentIATA'});
        }
        if (property_exists($data, 'AgentSine') && $data->{'AgentSine'} !== null) {
            $object->setAgentSine($data->{'AgentSine'});
        }
        if (property_exists($data, 'AirlineChannelCode') && $data->{'AirlineChannelCode'} !== null) {
            $object->setAirlineChannelCode($data->{'AirlineChannelCode'});
        }
        if (property_exists($data, 'AirlineVendorID') && $data->{'AirlineVendorID'} !== null) {
            $object->setAirlineVendorID($data->{'AirlineVendorID'});
        }
        if (property_exists($data, 'AirportCode') && $data->{'AirportCode'} !== null) {
            $object->setAirportCode($data->{'AirportCode'});
        }
        if (property_exists($data, 'BookingChannel') && $data->{'BookingChannel'} !== null) {
            $object->setBookingChannel($this->denormalizer->denormalize($data->{'BookingChannel'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305SourceBookingChannelType', 'json', $context));
        }
        if (property_exists($data, 'Carrier') && $data->{'Carrier'} !== null) {
            $object->setCarrier($data->{'Carrier'});
        }
        if (property_exists($data, 'CoHostID') && $data->{'CoHostID'} !== null) {
            $object->setCoHostID($data->{'CoHostID'});
        }
        if (property_exists($data, 'DefaultTicketingCarrier') && $data->{'DefaultTicketingCarrier'} !== null) {
            $object->setDefaultTicketingCarrier($data->{'DefaultTicketingCarrier'});
        }
        if (property_exists($data, 'ERSP_UserID') && $data->{'ERSP_UserID'} !== null) {
            $object->setERSPUserID($data->{'ERSP_UserID'});
        }
        if (property_exists($data, 'ETicketCapable') && $data->{'ETicketCapable'} !== null) {
            $object->setETicketCapable($data->{'ETicketCapable'});
        }
        if (property_exists($data, 'FirstDepartPoint') && $data->{'FirstDepartPoint'} !== null) {
            $object->setFirstDepartPoint($data->{'FirstDepartPoint'});
        }
        if (property_exists($data, 'HomeAgencyIATA') && $data->{'HomeAgencyIATA'} !== null) {
            $object->setHomeAgencyIATA($data->{'HomeAgencyIATA'});
        }
        if (property_exists($data, 'HostCarrier') && $data->{'HostCarrier'} !== null) {
            $object->setHostCarrier($data->{'HostCarrier'});
        }
        if (property_exists($data, 'ISOCountry') && $data->{'ISOCountry'} !== null) {
            $object->setISOCountry($data->{'ISOCountry'});
        }
        if (property_exists($data, 'ISOCurrency') && $data->{'ISOCurrency'} !== null) {
            $object->setISOCurrency($data->{'ISOCurrency'});
        }
        if (property_exists($data, 'MainTravelAgencyPCC') && $data->{'MainTravelAgencyPCC'} !== null) {
            $object->setMainTravelAgencyPCC($data->{'MainTravelAgencyPCC'});
        }
        if (property_exists($data, 'OfficeCode') && $data->{'OfficeCode'} !== null) {
            $object->setOfficeCode($data->{'OfficeCode'});
        }
        if (property_exists($data, 'PersonalCityCode') && $data->{'PersonalCityCode'} !== null) {
            $object->setPersonalCityCode($data->{'PersonalCityCode'});
        }
        if (property_exists($data, 'PseudoCityCode') && $data->{'PseudoCityCode'} !== null) {
            $object->setPseudoCityCode($data->{'PseudoCityCode'});
        }
        if (property_exists($data, 'TravelAgencyIATA') && $data->{'TravelAgencyIATA'} !== null) {
            $object->setTravelAgencyIATA($data->{'TravelAgencyIATA'});
        }
        if (property_exists($data, 'VendorCRSCode') && $data->{'VendorCRSCode'} !== null) {
            $object->setVendorCRSCode($data->{'VendorCRSCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAbacusUser()) {
            $data->{'AbacusUser'} = $object->getAbacusUser();
        }
        if (null !== $object->getAccountingCode()) {
            $data->{'AccountingCode'} = $object->getAccountingCode();
        }
        if (null !== $object->getAgentCity()) {
            $data->{'AgentCity'} = $object->getAgentCity();
        }
        if (null !== $object->getAgentDepartmentCode()) {
            $data->{'AgentDepartmentCode'} = $object->getAgentDepartmentCode();
        }
        if (null !== $object->getAgentDuty()) {
            $data->{'AgentDuty'} = $object->getAgentDuty();
        }
        if (null !== $object->getAgentDutyCode()) {
            $data->{'AgentDutyCode'} = $object->getAgentDutyCode();
        }
        if (null !== $object->getAgentFunction()) {
            $data->{'AgentFunction'} = $object->getAgentFunction();
        }
        if (null !== $object->getAgentIATA()) {
            $data->{'AgentIATA'} = $object->getAgentIATA();
        }
        if (null !== $object->getAgentSine()) {
            $data->{'AgentSine'} = $object->getAgentSine();
        }
        if (null !== $object->getAirlineChannelCode()) {
            $data->{'AirlineChannelCode'} = $object->getAirlineChannelCode();
        }
        if (null !== $object->getAirlineVendorID()) {
            $data->{'AirlineVendorID'} = $object->getAirlineVendorID();
        }
        if (null !== $object->getAirportCode()) {
            $data->{'AirportCode'} = $object->getAirportCode();
        }
        if (null !== $object->getBookingChannel()) {
            $data->{'BookingChannel'} = $this->normalizer->normalize($object->getBookingChannel(), 'json', $context);
        }
        if (null !== $object->getCarrier()) {
            $data->{'Carrier'} = $object->getCarrier();
        }
        if (null !== $object->getCoHostID()) {
            $data->{'CoHostID'} = $object->getCoHostID();
        }
        if (null !== $object->getDefaultTicketingCarrier()) {
            $data->{'DefaultTicketingCarrier'} = $object->getDefaultTicketingCarrier();
        }
        if (null !== $object->getERSPUserID()) {
            $data->{'ERSP_UserID'} = $object->getERSPUserID();
        }
        if (null !== $object->getETicketCapable()) {
            $data->{'ETicketCapable'} = $object->getETicketCapable();
        }
        if (null !== $object->getFirstDepartPoint()) {
            $data->{'FirstDepartPoint'} = $object->getFirstDepartPoint();
        }
        if (null !== $object->getHomeAgencyIATA()) {
            $data->{'HomeAgencyIATA'} = $object->getHomeAgencyIATA();
        }
        if (null !== $object->getHostCarrier()) {
            $data->{'HostCarrier'} = $object->getHostCarrier();
        }
        if (null !== $object->getISOCountry()) {
            $data->{'ISOCountry'} = $object->getISOCountry();
        }
        if (null !== $object->getISOCurrency()) {
            $data->{'ISOCurrency'} = $object->getISOCurrency();
        }
        if (null !== $object->getMainTravelAgencyPCC()) {
            $data->{'MainTravelAgencyPCC'} = $object->getMainTravelAgencyPCC();
        }
        if (null !== $object->getOfficeCode()) {
            $data->{'OfficeCode'} = $object->getOfficeCode();
        }
        if (null !== $object->getPersonalCityCode()) {
            $data->{'PersonalCityCode'} = $object->getPersonalCityCode();
        }
        if (null !== $object->getPseudoCityCode()) {
            $data->{'PseudoCityCode'} = $object->getPseudoCityCode();
        }
        if (null !== $object->getTravelAgencyIATA()) {
            $data->{'TravelAgencyIATA'} = $object->getTravelAgencyIATA();
        }
        if (null !== $object->getVendorCRSCode()) {
            $data->{'VendorCRSCode'} = $object->getVendorCRSCode();
        }

        return $data;
    }
}
