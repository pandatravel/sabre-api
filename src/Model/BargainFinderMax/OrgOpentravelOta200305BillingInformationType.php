<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305BillingInformationType extends AbstractModel
{
    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @var string
     */
    protected $aAACity;
    /**
     * @var string
     */
    protected $actionCode;
    /**
     * @var string
     */
    protected $agentSineIn;
    /**
     * @var string
     */
    protected $partitionID;
    /**
     * @var string
     */
    protected $serviceName;
    /**
     * @var float
     */
    protected $userBranch;
    /**
     * @var string
     */
    protected $userSetAddress;
    /**
     * @var float
     */
    protected $userStation;

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @return string
     */
    public function getAAACity(): string
    {
        return $this->aAACity;
    }

    /**
     * Used for Character Strings, length 1 to 16.
     *
     * @param string $aAACity
     *
     * @return self
     */
    public function setAAACity(string $aAACity): self
    {
        $this->aAACity = $aAACity;

        return $this;
    }

    /**
     * @return string
     */
    public function getActionCode(): string
    {
        return $this->actionCode;
    }

    /**
     * @param string $actionCode
     *
     * @return self
     */
    public function setActionCode(string $actionCode): self
    {
        $this->actionCode = $actionCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgentSineIn(): string
    {
        return $this->agentSineIn;
    }

    /**
     * @param string $agentSineIn
     *
     * @return self
     */
    public function setAgentSineIn(string $agentSineIn): self
    {
        $this->agentSineIn = $agentSineIn;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartitionID(): string
    {
        return $this->partitionID;
    }

    /**
     * @param string $partitionID
     *
     * @return self
     */
    public function setPartitionID(string $partitionID): self
    {
        $this->partitionID = $partitionID;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName): self
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * @return float
     */
    public function getUserBranch(): float
    {
        return $this->userBranch;
    }

    /**
     * @param float $userBranch
     *
     * @return self
     */
    public function setUserBranch(float $userBranch): self
    {
        $this->userBranch = $userBranch;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserSetAddress(): string
    {
        return $this->userSetAddress;
    }

    /**
     * @param string $userSetAddress
     *
     * @return self
     */
    public function setUserSetAddress(string $userSetAddress): self
    {
        $this->userSetAddress = $userSetAddress;

        return $this;
    }

    /**
     * @return float
     */
    public function getUserStation(): float
    {
        return $this->userStation;
    }

    /**
     * @param float $userStation
     *
     * @return self
     */
    public function setUserStation(float $userStation): self
    {
        $this->userStation = $userStation;

        return $this;
    }
}
