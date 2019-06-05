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

class ItineraryTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ItineraryType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\ItineraryType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\ItineraryType();
        if (property_exists($data, 'currentItinerary')) {
            $object->setCurrentItinerary($data->{'currentItinerary'});
        }
        if (property_exists($data, 'diversitySwapper')) {
            $object->setDiversitySwapper($this->denormalizer->denormalize($data->{'diversitySwapper'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\DiversitySwapperType', 'json', $context));
        }
        if (property_exists($data, 'failed')) {
            $object->setFailed($this->denormalizer->denormalize($data->{'failed'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\FailedType', 'json', $context));
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'itinSource')) {
            $object->setItinSource($data->{'itinSource'});
        }
        if (property_exists($data, 'legs')) {
            $values = [];
            foreach ($data->{'legs'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\LegIDType', 'json', $context);
            }
            $object->setLegs($values);
        }
        if (property_exists($data, 'pricingInformation')) {
            $values_1 = [];
            foreach ($data->{'pricingInformation'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PricingInformationType', 'json', $context);
            }
            $object->setPricingInformation($values_1);
        }
        if (property_exists($data, 'pricingSource')) {
            $object->setPricingSource($data->{'pricingSource'});
        }
        if (property_exists($data, 'routingItinerary')) {
            $object->setRoutingItinerary($data->{'routingItinerary'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCurrentItinerary()) {
            $data->{'currentItinerary'} = $object->getCurrentItinerary();
        }
        if (null !== $object->getDiversitySwapper()) {
            $data->{'diversitySwapper'} = $this->normalizer->normalize($object->getDiversitySwapper(), 'json', $context);
        }
        if (null !== $object->getFailed()) {
            $data->{'failed'} = $this->normalizer->normalize($object->getFailed(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getItinSource()) {
            $data->{'itinSource'} = $object->getItinSource();
        }
        if (null !== $object->getLegs()) {
            $values = [];
            foreach ($object->getLegs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'legs'} = $values;
        }
        if (null !== $object->getPricingInformation()) {
            $values_1 = [];
            foreach ($object->getPricingInformation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'pricingInformation'} = $values_1;
        }
        if (null !== $object->getPricingSource()) {
            $data->{'pricingSource'} = $object->getPricingSource();
        }
        if (null !== $object->getRoutingItinerary()) {
            $data->{'routingItinerary'} = $object->getRoutingItinerary();
        }

        return $data;
    }
}
