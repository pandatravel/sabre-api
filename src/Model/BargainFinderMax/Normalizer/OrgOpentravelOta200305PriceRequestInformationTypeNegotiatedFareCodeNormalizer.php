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

class OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode();
        if (property_exists($data, 'Code')) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'CodeContext')) {
            $object->setCodeContext($data->{'CodeContext'});
        }
        if (property_exists($data, 'Quantity')) {
            $object->setQuantity($data->{'Quantity'});
        }
        if (property_exists($data, 'SecondaryCode')) {
            $object->setSecondaryCode($data->{'SecondaryCode'});
        }
        if (property_exists($data, 'Supplier')) {
            $values = [];
            foreach ($data->{'Supplier'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CompanyNameType', 'json', $context);
            }
            $object->setSupplier($values);
        }
        if (property_exists($data, 'SupplierCode')) {
            $object->setSupplierCode($data->{'SupplierCode'});
        }
        if (property_exists($data, 'TPA_Extensions')) {
            $values_1 = [];
            foreach ($data->{'TPA_Extensions'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTPAExtensions($values_1);
        }
        if (property_exists($data, 'URI')) {
            $object->setURI($data->{'URI'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCode()) {
            $data->{'Code'} = $object->getCode();
        }
        if (null !== $object->getCodeContext()) {
            $data->{'CodeContext'} = $object->getCodeContext();
        }
        if (null !== $object->getQuantity()) {
            $data->{'Quantity'} = $object->getQuantity();
        }
        if (null !== $object->getSecondaryCode()) {
            $data->{'SecondaryCode'} = $object->getSecondaryCode();
        }
        if (null !== $object->getSupplier()) {
            $values = [];
            foreach ($object->getSupplier() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Supplier'} = $values;
        }
        if (null !== $object->getSupplierCode()) {
            $data->{'SupplierCode'} = $object->getSupplierCode();
        }
        if (null !== $object->getTPAExtensions()) {
            $values_1 = [];
            foreach ($object->getTPAExtensions() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'TPA_Extensions'} = $values_1;
        }
        if (null !== $object->getURI()) {
            $data->{'URI'} = $object->getURI();
        }

        return $data;
    }
}
