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

class HandlingMarkupDetailTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\HandlingMarkupDetailType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\HandlingMarkupDetailType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\HandlingMarkupDetailType();
        if (property_exists($data, 'amountCurrency') && $data->{'amountCurrency'} !== null) {
            $object->setAmountCurrency($data->{'amountCurrency'});
        }
        if (property_exists($data, 'fareAmountAfterMarkup') && $data->{'fareAmountAfterMarkup'} !== null) {
            $object->setFareAmountAfterMarkup($data->{'fareAmountAfterMarkup'});
        }
        if (property_exists($data, 'markupAmount') && $data->{'markupAmount'} !== null) {
            $object->setMarkupAmount($data->{'markupAmount'});
        }
        if (property_exists($data, 'markupHandlingFeeAppId') && $data->{'markupHandlingFeeAppId'} !== null) {
            $object->setMarkupHandlingFeeAppId($data->{'markupHandlingFeeAppId'});
        }
        if (property_exists($data, 'markupRuleItemNumber') && $data->{'markupRuleItemNumber'} !== null) {
            $object->setMarkupRuleItemNumber($data->{'markupRuleItemNumber'});
        }
        if (property_exists($data, 'markupRuleSourcePcc') && $data->{'markupRuleSourcePcc'} !== null) {
            $object->setMarkupRuleSourcePcc($data->{'markupRuleSourcePcc'});
        }
        if (property_exists($data, 'markupTypeCode') && $data->{'markupTypeCode'} !== null) {
            $object->setMarkupTypeCode($data->{'markupTypeCode'});
        }
        if (property_exists($data, 'retailerRuleQualifier') && $data->{'retailerRuleQualifier'} !== null) {
            $object->setRetailerRuleQualifier($data->{'retailerRuleQualifier'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmountCurrency()) {
            $data->{'amountCurrency'} = $object->getAmountCurrency();
        }
        if (null !== $object->getFareAmountAfterMarkup()) {
            $data->{'fareAmountAfterMarkup'} = $object->getFareAmountAfterMarkup();
        }
        if (null !== $object->getMarkupAmount()) {
            $data->{'markupAmount'} = $object->getMarkupAmount();
        }
        if (null !== $object->getMarkupHandlingFeeAppId()) {
            $data->{'markupHandlingFeeAppId'} = $object->getMarkupHandlingFeeAppId();
        }
        if (null !== $object->getMarkupRuleItemNumber()) {
            $data->{'markupRuleItemNumber'} = $object->getMarkupRuleItemNumber();
        }
        if (null !== $object->getMarkupRuleSourcePcc()) {
            $data->{'markupRuleSourcePcc'} = $object->getMarkupRuleSourcePcc();
        }
        if (null !== $object->getMarkupTypeCode()) {
            $data->{'markupTypeCode'} = $object->getMarkupTypeCode();
        }
        if (null !== $object->getRetailerRuleQualifier()) {
            $data->{'retailerRuleQualifier'} = $object->getRetailerRuleQualifier();
        }

        return $data;
    }
}
