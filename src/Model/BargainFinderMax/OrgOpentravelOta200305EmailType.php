<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305EmailType extends AbstractModel
{
    /**
     * @var bool
     */
    protected $defaultInd;
    /**
     * @var string
     */
    protected $emailType;
    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @var string
     */
    protected $shareMarketInd;
    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string
     */
    protected $shareSynchInd;
    /**
     * @var string
     */
    protected $content;

    /**
     * @return bool
     */
    public function getDefaultInd(): bool
    {
        return $this->defaultInd;
    }

    /**
     * @param bool $defaultInd
     *
     * @return self
     */
    public function setDefaultInd(bool $defaultInd): self
    {
        $this->defaultInd = $defaultInd;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailType(): string
    {
        return $this->emailType;
    }

    /**
     * @param string $emailType
     *
     * @return self
     */
    public function setEmailType(string $emailType): self
    {
        $this->emailType = $emailType;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd(): string
    {
        return $this->shareMarketInd;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     *
     * @return self
     */
    public function setShareMarketInd(string $shareMarketInd): self
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd(): string
    {
        return $this->shareSynchInd;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     *
     * @return self
     */
    public function setShareSynchInd(string $shareSynchInd): self
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
