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

class OrgOpentravelOta200305ExchangeSettingsTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeSettingsType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeSettingsType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeSettingsType();
        if (property_exists($data, 'AttachExchangeInfo')) {
            $object->setAttachExchangeInfo($data->{'AttachExchangeInfo'});
        }
        if (property_exists($data, 'BrandedResults')) {
            $object->setBrandedResults($data->{'BrandedResults'});
        }
        if (property_exists($data, 'MIPTimeoutThreshold')) {
            $object->setMIPTimeoutThreshold($data->{'MIPTimeoutThreshold'});
        }
        if (property_exists($data, 'ReissueExchange')) {
            $object->setReissueExchange($data->{'ReissueExchange'});
        }
        if (property_exists($data, 'RepriceCurrentItin')) {
            $object->setRepriceCurrentItin($data->{'RepriceCurrentItin'});
        }
        if (property_exists($data, 'RequestType')) {
            $object->setRequestType($data->{'RequestType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAttachExchangeInfo()) {
            $data->{'AttachExchangeInfo'} = $object->getAttachExchangeInfo();
        }
        if (null !== $object->getBrandedResults()) {
            $data->{'BrandedResults'} = $object->getBrandedResults();
        }
        if (null !== $object->getMIPTimeoutThreshold()) {
            $data->{'MIPTimeoutThreshold'} = $object->getMIPTimeoutThreshold();
        }
        if (null !== $object->getReissueExchange()) {
            $data->{'ReissueExchange'} = $object->getReissueExchange();
        }
        if (null !== $object->getRepriceCurrentItin()) {
            $data->{'RepriceCurrentItin'} = $object->getRepriceCurrentItin();
        }
        if (null !== $object->getRequestType()) {
            $data->{'RequestType'} = $object->getRequestType();
        }

        return $data;
    }
}