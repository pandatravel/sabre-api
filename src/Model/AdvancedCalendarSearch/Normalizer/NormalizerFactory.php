<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItemRequestorIDNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItemRequestorIDCompanyNameNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesDaysRangeItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesLengthOfStayRangeItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemOriginLocationNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDestinationLocationNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentTypeNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelPreferencesNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItemPassengerTypeQuantityItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryPriceRequestInformationNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensionsNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensionsIntelliSellTransactionNormalizer();
        $normalizers[] = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensionsIntelliSellTransactionRequestTypeNormalizer();
        $normalizers[] = new AdvancedCalendarSearchResponseNormalizer();
        $normalizers[] = new AdvancedCalendarSearchResponseOTAAirLowFareSearchRSNormalizer();
        $normalizers[] = new AdvancedCalendarSearchResponseOTAAirLowFareSearchRSWarningsNormalizer();
        $normalizers[] = new AdvancedCalendarSearchResponseOTAAirLowFareSearchRSWarningsWarningItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchResponseLinksItemNormalizer();
        $normalizers[] = new AdvancedCalendarSearchByRequestIDResponseNormalizer();
        $normalizers[] = new AdvancedCalendarSearchByRequestIDResponsePageNormalizer();
        $normalizers[] = new AdvancedCalendarSearchByRequestIDResponseOTAAirLowFareSearchRSNormalizer();
        $normalizers[] = new AdvancedCalendarSearchByRequestIDResponseLinksItemNormalizer();
        $normalizers[] = new PricedItinerariesItemNormalizer();
        $normalizers[] = new PricedItinerariesItemPricedItineraryNormalizer();
        $normalizers[] = new AdvancedCalendarSearchByTagIDResponseNormalizer();
        $normalizers[] = new AdvancedCalendarSearchByTagIDResponseLinksItemNormalizer();

        return $normalizers;
    }
}
