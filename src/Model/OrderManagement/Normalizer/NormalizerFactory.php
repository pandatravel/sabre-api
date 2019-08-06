<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\OrderManagement\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new OrderNormalizer();
        $normalizers[] = new ProductNormalizer();
        $normalizers[] = new AirSegmentNormalizer();
        $normalizers[] = new LegNormalizer();
        $normalizers[] = new CarrierNormalizer();
        $normalizers[] = new ExternalOrderNormalizer();
        $normalizers[] = new OrderViewRequestNormalizer();
        $normalizers[] = new OrderViewResponseNormalizer();
        $normalizers[] = new OrderCreateRequestNormalizer();
        $normalizers[] = new CreateOrderNormalizer();
        $normalizers[] = new SelectedOfferItemNormalizer();
        $normalizers[] = new OrderCreateResponseNormalizer();
        $normalizers[] = new AmountCurrencyNormalizer();
        $normalizers[] = new CarrierInfoNormalizer();
        $normalizers[] = new CarrierFlightInfoNormalizer();
        $normalizers[] = new ContactInfoNormalizer();
        $normalizers[] = new EmailAddressNormalizer();
        $normalizers[] = new FareComponentNormalizer();
        $normalizers[] = new FareDetailNormalizer();
        $normalizers[] = new FareRemarkNormalizer();
        $normalizers[] = new OrderItemNormalizer();
        $normalizers[] = new PartyNormalizer();
        $normalizers[] = new PartySenderNormalizer();
        $normalizers[] = new PartyTravelAgencyNormalizer();
        $normalizers[] = new PaymentCreditCardNormalizer();
        $normalizers[] = new PaymentInfoNormalizer();
        $normalizers[] = new PaymentMethodNormalizer();
        $normalizers[] = new PassengerNormalizer();
        $normalizers[] = new IdentityDocumentNormalizer();
        $normalizers[] = new VisaNormalizer();
        $normalizers[] = new JourneyNormalizer();
        $normalizers[] = new ExternalReferenceNormalizer();
        $normalizers[] = new SegmentNormalizer();
        $normalizers[] = new PriceNormalizer();
        $normalizers[] = new PriceClassNormalizer();
        $normalizers[] = new ServiceNormalizer();
        $normalizers[] = new TaxNormalizer();
        $normalizers[] = new TransportNormalizer();
        $normalizers[] = new OrderChangeRequestNormalizer();
        $normalizers[] = new ActionNormalizer();
        $normalizers[] = new FulfillOrderNormalizer();
        $normalizers[] = new OrderChangeResponseNormalizer();
        $normalizers[] = new CustomerNumberNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new WarningNormalizer();
        $normalizers[] = new BookingReferenceNormalizer();
        $normalizers[] = new PhoneNormalizer();
        $normalizers[] = new RemarkNormalizer();
        $normalizers[] = new TicketingDocumentInfoNormalizer();
        $normalizers[] = new TicketingDocumentNormalizer();
        $normalizers[] = new TicketingDocumentCouponNormalizer();
        $normalizers[] = new AirSegmentInformationNormalizer();
        $normalizers[] = new LoyaltyProgramAccountNormalizer();
        $normalizers[] = new OrderCancelRequestNormalizer();
        $normalizers[] = new OrderCancelResponseNormalizer();

        return $normalizers;
    }
}