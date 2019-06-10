<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FlexibleFaresTypeFareParametersUseNegotiatedFares extends AbstractModel
{
    /**
     * Define information on the number of passengers of a specific type.,,Allows to identify which one of requested passenger groups from Exchange request this solution relates to.,Identifies the location of the code table,Used to define a quantity of an associated element or attribute.,Used for Numeric values, from 0 to 999 inclusive,Specify traveler type code.,Allows to identify which one of requested passengers this solution relates to.,Used for Numeric values, from 0 to 999 inclusive,Identifies the source authority for the code.,Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).,Exchange-specific,Exchange-specific,Exchange-specific,Identifies whether penalties associated with voluntary changes should be included in the search results.,Indicates relation between conditions.,Specifies penalty charges as either a currency amount or a percentage of the fare.,Used for amounts, max 3 decimals,A currency code (e.g. USD, EUR, PLN),Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".,Indicate that specific penalty type should be excluded from the response.,Identifier used to indicate whether the change occurs before or after departure from the origin city.,Indicates the type (Refund or Exchange) of penalty involved in the search or response.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Define information on the number of passengers of a specific type.,,Allows to identify which one of requested passenger groups from Exchange request this solution relates to.,Identifies the location of the code table,Used to define a quantity of an associated element or attribute.,Used for Numeric values, from 0 to 999 inclusive,Specify traveler type code.,Allows to identify which one of requested passengers this solution relates to.,Used for Numeric values, from 0 to 999 inclusive,Identifies the source authority for the code.,Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).,Exchange-specific,Exchange-specific,Exchange-specific,Identifies whether penalties associated with voluntary changes should be included in the search results.,Indicates relation between conditions.,Specifies penalty charges as either a currency amount or a percentage of the fare.,Used for amounts, max 3 decimals,A currency code (e.g. USD, EUR, PLN),Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".,Indicate that specific penalty type should be excluded from the response.,Identifier used to indicate whether the change occurs before or after departure from the origin city.,Indicates the type (Refund or Exchange) of penalty involved in the search or response.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Define information on the number of passengers of a specific type.,,Allows to identify which one of requested passenger groups from Exchange request this solution relates to.,Identifies the location of the code table,Used to define a quantity of an associated element or attribute.,Used for Numeric values, from 0 to 999 inclusive,Specify traveler type code.,Allows to identify which one of requested passengers this solution relates to.,Used for Numeric values, from 0 to 999 inclusive,Identifies the source authority for the code.,Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).,Exchange-specific,Exchange-specific,Exchange-specific,Identifies whether penalties associated with voluntary changes should be included in the search results.,Indicates relation between conditions.,Specifies penalty charges as either a currency amount or a percentage of the fare.,Used for amounts, max 3 decimals,A currency code (e.g. USD, EUR, PLN),Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".,Indicate that specific penalty type should be excluded from the response.,Identifier used to indicate whether the change occurs before or after departure from the origin city.,Indicates the type (Refund or Exchange) of penalty involved in the search or response.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
