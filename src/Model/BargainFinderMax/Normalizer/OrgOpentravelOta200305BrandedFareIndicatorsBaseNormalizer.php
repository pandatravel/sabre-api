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

class OrgOpentravelOta200305BrandedFareIndicatorsBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305BrandedFareIndicatorsBase';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305BrandedFareIndicatorsBase';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305BrandedFareIndicatorsBase();
        if (property_exists($data, 'BrandFilters') && $data->{'BrandFilters'} !== null) {
            $object->setBrandFilters($this->denormalizer->denormalize($data->{'BrandFilters'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305BrandFiltersType', 'json', $context));
        }
        if (property_exists($data, 'ParityModeForLowest') && $data->{'ParityModeForLowest'} !== null) {
            $object->setParityModeForLowest($data->{'ParityModeForLowest'});
        }
        if (property_exists($data, 'SingleBrandedFare') && $data->{'SingleBrandedFare'} !== null) {
            $object->setSingleBrandedFare($data->{'SingleBrandedFare'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBrandFilters()) {
            $data->{'BrandFilters'} = $this->normalizer->normalize($object->getBrandFilters(), 'json', $context);
        }
        if (null !== $object->getParityModeForLowest()) {
            $data->{'ParityModeForLowest'} = $object->getParityModeForLowest();
        }
        if (null !== $object->getSingleBrandedFare()) {
            $data->{'SingleBrandedFare'} = $object->getSingleBrandedFare();
        }

        return $data;
    }
}
