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

class PricingLegTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PricingLegType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PricingLegType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\PricingLegType();
        if (property_exists($data, 'ref')) {
            $object->setRef($data->{'ref'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'taxSummaries')) {
            $values = [];
            foreach ($data->{'taxSummaries'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TaxSummaryIDType', 'json', $context);
            }
            $object->setTaxSummaries($values);
        }
        if (property_exists($data, 'taxes')) {
            $values_1 = [];
            foreach ($data->{'taxes'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TaxIDType', 'json', $context);
            }
            $object->setTaxes($values_1);
        }
        if (property_exists($data, 'totalFare')) {
            $object->setTotalFare($this->denormalizer->denormalize($data->{'totalFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TotalFareType', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRef()) {
            $data->{'ref'} = $object->getRef();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getTaxSummaries()) {
            $values = [];
            foreach ($object->getTaxSummaries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'taxSummaries'} = $values;
        }
        if (null !== $object->getTaxes()) {
            $values_1 = [];
            foreach ($object->getTaxes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'taxes'} = $values_1;
        }
        if (null !== $object->getTotalFare()) {
            $data->{'totalFare'} = $this->normalizer->normalize($object->getTotalFare(), 'json', $context);
        }

        return $data;
    }
}
