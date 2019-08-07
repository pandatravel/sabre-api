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

class OrgOpentravelOta200305CompanyNamePrefTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CompanyNamePrefType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305CompanyNamePrefType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305CompanyNamePrefType();
        if (property_exists($data, 'Code')) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'CodeContext')) {
            $object->setCodeContext($data->{'CodeContext'});
        }
        if (property_exists($data, 'CompanyShortName')) {
            $object->setCompanyShortName($data->{'CompanyShortName'});
        }
        if (property_exists($data, 'PreferLevel')) {
            $object->setPreferLevel($data->{'PreferLevel'});
        }
        if (property_exists($data, 'TravelSector')) {
            $object->setTravelSector($data->{'TravelSector'});
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'content')) {
            $object->setContent($data->{'content'});
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
        if (null !== $object->getCompanyShortName()) {
            $data->{'CompanyShortName'} = $object->getCompanyShortName();
        }
        if (null !== $object->getPreferLevel()) {
            $data->{'PreferLevel'} = $object->getPreferLevel();
        }
        if (null !== $object->getTravelSector()) {
            $data->{'TravelSector'} = $object->getTravelSector();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getContent()) {
            $data->{'content'} = $object->getContent();
        }

        return $data;
    }
}
