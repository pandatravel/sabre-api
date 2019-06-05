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

class PenaltyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\Penalty';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\Penalty;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\Penalty();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'applicability')) {
            $object->setApplicability($data->{'applicability'});
        }
        if (property_exists($data, 'cat16Info')) {
            $object->setCat16Info($data->{'cat16Info'});
        }
        if (property_exists($data, 'cat16TextOnly')) {
            $values = [];
            foreach ($data->{'cat16TextOnly'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\Cat16TextOnly', 'json', $context);
            }
            $object->setCat16TextOnly($values);
        }
        if (property_exists($data, 'changeable')) {
            $object->setChangeable($data->{'changeable'});
        }
        if (property_exists($data, 'conditionsApply')) {
            $object->setConditionsApply($data->{'conditionsApply'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'refundable')) {
            $object->setRefundable($data->{'refundable'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getApplicability()) {
            $data->{'applicability'} = $object->getApplicability();
        }
        if (null !== $object->getCat16Info()) {
            $data->{'cat16Info'} = $object->getCat16Info();
        }
        if (null !== $object->getCat16TextOnly()) {
            $values = [];
            foreach ($object->getCat16TextOnly() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'cat16TextOnly'} = $values;
        }
        if (null !== $object->getChangeable()) {
            $data->{'changeable'} = $object->getChangeable();
        }
        if (null !== $object->getConditionsApply()) {
            $data->{'conditionsApply'} = $object->getConditionsApply();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getRefundable()) {
            $data->{'refundable'} = $object->getRefundable();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }

        return $data;
    }
}