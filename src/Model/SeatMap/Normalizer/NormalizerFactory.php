<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new SeatMapRequestNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedCabinDefinitionNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedPOSNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightDepartureDateNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightOperatingNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightArrivalDateNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightMarketingItemNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareGroupNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareGroupGroupTotalPriceNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareGroupTravelerFareInfoItemNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareGroupTravelerFareInfoItemTypeTotalPriceNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareGroupTravelerFareInfoItemBaseNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareGroupTravelerFareInfoItemTaxesNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareGroupTravelerFareInfoItemTotalNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemFareBreakCriteriaNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReqNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReqReqTypeNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlightNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlightDepartureDateNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlightOperatingNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlightArrivalDateNormalizer();
        $normalizers[] = new SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlightMarketingItemNormalizer();
        $normalizers[] = new SeatMapResponseNormalizer();
        $normalizers[] = new SeatMapResponseLinksItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsSuccessItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsSuccessItemSystemSpecificResultsItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsSuccessItemSystemSpecificResultsItemHostCommandNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsSuccessItemSystemSpecificResultsItemMessageNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsErrorItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsErrorItemSystemSpecificResultsItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsErrorItemSystemSpecificResultsItemHostCommandNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsErrorItemSystemSpecificResultsItemMessageItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemHostCommandNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemMessageItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightDepartureDateNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightMarketingItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemTaxTableItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemTaxTableItemTaxTypeItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemPriceListNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemPriceListPriceTypeDetailItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemPriceListPriceTypeDetailItemSecondaryCodeNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemWingNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemCabinClassNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemColumnItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemOccupationItemDetailNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemFacilitiesItemDetailNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemPriceItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemPriceItemTotalAmountNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemPriceItemTaxesItemNormalizer();
        $normalizers[] = new SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItemSeatItemPriceItemTaxesItemTaxNormalizer();

        return $normalizers;
    }
}
