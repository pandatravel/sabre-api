<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class ProblemInformationSystemSpecificResultsItemHostCommand extends AbstractModel
{
    /**
     * LNIATA is an abbreviation for Line / Interface Adapter / Terminal Address.  This is a 3-byte terminal address, usually seen as a 6-character hexadecimal field, such as "0358DC".
     *
     * @var string
     */
    protected $lNIATA;
    /**
     * Sabre host system command.
     *
     * @var string
     */
    protected $content;

    /**
     * LNIATA is an abbreviation for Line / Interface Adapter / Terminal Address.  This is a 3-byte terminal address, usually seen as a 6-character hexadecimal field, such as "0358DC".
     *
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * LNIATA is an abbreviation for Line / Interface Adapter / Terminal Address.  This is a 3-byte terminal address, usually seen as a 6-character hexadecimal field, such as "0358DC".
     *
     * @param string $lNIATA
     *
     * @return self
     */
    public function setLNIATA(?string $lNIATA): self
    {
        $this->lNIATA = $lNIATA;

        return $this;
    }

    /**
     * Sabre host system command.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Sabre host system command.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
