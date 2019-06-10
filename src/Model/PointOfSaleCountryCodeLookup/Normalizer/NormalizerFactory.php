<?php

namespace Ammonkc\SabreApi\Model\PointOfSaleCountryCodeLookup\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new PointofSaleCountryCodeLookupResponseNormalizer();
        $normalizers[] = new PointofSaleCountryCodeLookupResponseCountriesItemNormalizer();
        $normalizers[] = new PointofSaleCountryCodeLookupResponseCountriesItemLinksItemNormalizer();
        $normalizers[] = new PointofSaleCountryCodeLookupResponseLinksItemNormalizer();

        return $normalizers;
    }
}
