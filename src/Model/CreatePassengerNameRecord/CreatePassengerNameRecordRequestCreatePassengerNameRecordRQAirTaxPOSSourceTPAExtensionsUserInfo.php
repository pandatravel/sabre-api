<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfo extends AbstractModel
{
    /**
     *  AAA City.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAAACity
     */
    protected $aAACity;
    /**
     * Action Code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAction
     */
    protected $action;
    /**
     * Agent Sine.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAgentSine
     */
    protected $agentSine;
    /**
     * User Branch.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoBranch
     */
    protected $branch;
    /**
     * Partition ID.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoPartition
     */
    protected $partition;
    /**
     * Service Name.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoService
     */
    protected $service;
    /**
     * User set address.
     *
     * @var string
     */
    protected $setAddress;
    /**
     * User Station.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoStation
     */
    protected $station;
    /**
     * Transaction ID.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoTransaction
     */
    protected $transaction;

    /**
     *  AAA City.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAAACity
     */
    public function getAAACity(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAAACity
    {
        return $this->aAACity;
    }

    /**
     *  AAA City.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAAACity $aAACity
     *
     * @return self
     */
    public function setAAACity(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAAACity $aAACity): self
    {
        $this->aAACity = $aAACity;

        return $this;
    }

    /**
     * Action Code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAction
     */
    public function getAction(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAction
    {
        return $this->action;
    }

    /**
     * Action Code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAction $action
     *
     * @return self
     */
    public function setAction(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAction $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Agent Sine.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAgentSine
     */
    public function getAgentSine(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAgentSine
    {
        return $this->agentSine;
    }

    /**
     * Agent Sine.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAgentSine $agentSine
     *
     * @return self
     */
    public function setAgentSine(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoAgentSine $agentSine): self
    {
        $this->agentSine = $agentSine;

        return $this;
    }

    /**
     * User Branch.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoBranch
     */
    public function getBranch(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoBranch
    {
        return $this->branch;
    }

    /**
     * User Branch.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoBranch $branch
     *
     * @return self
     */
    public function setBranch(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoBranch $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Partition ID.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoPartition
     */
    public function getPartition(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoPartition
    {
        return $this->partition;
    }

    /**
     * Partition ID.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoPartition $partition
     *
     * @return self
     */
    public function setPartition(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoPartition $partition): self
    {
        $this->partition = $partition;

        return $this;
    }

    /**
     * Service Name.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoService
     */
    public function getService(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoService
    {
        return $this->service;
    }

    /**
     * Service Name.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoService $service
     *
     * @return self
     */
    public function setService(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoService $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * User set address.
     *
     * @return string
     */
    public function getSetAddress(): ?string
    {
        return $this->setAddress;
    }

    /**
     * User set address.
     *
     * @param string $setAddress
     *
     * @return self
     */
    public function setSetAddress(?string $setAddress): self
    {
        $this->setAddress = $setAddress;

        return $this;
    }

    /**
     * User Station.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoStation
     */
    public function getStation(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoStation
    {
        return $this->station;
    }

    /**
     * User Station.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoStation $station
     *
     * @return self
     */
    public function setStation(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoStation $station): self
    {
        $this->station = $station;

        return $this;
    }

    /**
     * Transaction ID.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoTransaction
     */
    public function getTransaction(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoTransaction
    {
        return $this->transaction;
    }

    /**
     * Transaction ID.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoTransaction $transaction
     *
     * @return self
     */
    public function setTransaction(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoTransaction $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }
}