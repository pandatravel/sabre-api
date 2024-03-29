<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class ProblemInformationSystemSpecificResultsItem extends AbstractModel
{
    /**
     * @var ProblemInformationSystemSpecificResultsItemHostCommand
     */
    protected $hostCommand;
    /**
     * @var ProblemInformationSystemSpecificResultsItemMessageItem[]
     */
    protected $message;
    /**
     * An abbreviated version of the error or warning in textual format.
     *
     * @var string
     */
    protected $shortText;
    /**
     * If present, this attribute may identify an unknown or misspelled tag that caused an error in processing. It is recommended that the Tag attribute use XPath notation to identify the location of a tag in the event that more than one tag of the same name is present in the document. Alternatively, the tag name alone can be used to identify missing data [Type=ReqFieldMissing].
     *
     * @var string
     */
    protected $element;
    /**
     * If present, this attribute allows for batch processing and the identification of the record that failed amongst a group of records. This value may contain a concatenation of a unique failed transaction ID with specific record(s) associated with that transaction.
     *
     * @var string
     */
    protected $recordID;
    /**
     * If present, this attribute refers to an online description of the error that occurred.
     *
     * @var string
     */
    protected $docURL;
    /**
     * Transaction time stamp in 'yyyy-mm-ddThh:mm:ss.SSSZ' format.
     *
     * @var string
     */
    protected $timeStamp;
    /**
     * If present, this attribute provides an XML IDREF to the element for which the results apply.
     *
     * @var string
     */
    protected $reference;

    /**
     * @return ProblemInformationSystemSpecificResultsItemHostCommand
     */
    public function getHostCommand(): ?ProblemInformationSystemSpecificResultsItemHostCommand
    {
        return $this->hostCommand;
    }

    /**
     * @param ProblemInformationSystemSpecificResultsItemHostCommand $hostCommand
     *
     * @return self
     */
    public function setHostCommand(?ProblemInformationSystemSpecificResultsItemHostCommand $hostCommand): self
    {
        $this->hostCommand = $hostCommand;

        return $this;
    }

    /**
     * @return ProblemInformationSystemSpecificResultsItemMessageItem[]
     */
    public function getMessage(): ?array
    {
        return $this->message;
    }

    /**
     * @param ProblemInformationSystemSpecificResultsItemMessageItem[] $message
     *
     * @return self
     */
    public function setMessage(?array $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * An abbreviated version of the error or warning in textual format.
     *
     * @return string
     */
    public function getShortText(): ?string
    {
        return $this->shortText;
    }

    /**
     * An abbreviated version of the error or warning in textual format.
     *
     * @param string $shortText
     *
     * @return self
     */
    public function setShortText(?string $shortText): self
    {
        $this->shortText = $shortText;

        return $this;
    }

    /**
     * If present, this attribute may identify an unknown or misspelled tag that caused an error in processing. It is recommended that the Tag attribute use XPath notation to identify the location of a tag in the event that more than one tag of the same name is present in the document. Alternatively, the tag name alone can be used to identify missing data [Type=ReqFieldMissing].
     *
     * @return string
     */
    public function getElement(): ?string
    {
        return $this->element;
    }

    /**
     * If present, this attribute may identify an unknown or misspelled tag that caused an error in processing. It is recommended that the Tag attribute use XPath notation to identify the location of a tag in the event that more than one tag of the same name is present in the document. Alternatively, the tag name alone can be used to identify missing data [Type=ReqFieldMissing].
     *
     * @param string $element
     *
     * @return self
     */
    public function setElement(?string $element): self
    {
        $this->element = $element;

        return $this;
    }

    /**
     * If present, this attribute allows for batch processing and the identification of the record that failed amongst a group of records. This value may contain a concatenation of a unique failed transaction ID with specific record(s) associated with that transaction.
     *
     * @return string
     */
    public function getRecordID(): ?string
    {
        return $this->recordID;
    }

    /**
     * If present, this attribute allows for batch processing and the identification of the record that failed amongst a group of records. This value may contain a concatenation of a unique failed transaction ID with specific record(s) associated with that transaction.
     *
     * @param string $recordID
     *
     * @return self
     */
    public function setRecordID(?string $recordID): self
    {
        $this->recordID = $recordID;

        return $this;
    }

    /**
     * If present, this attribute refers to an online description of the error that occurred.
     *
     * @return string
     */
    public function getDocURL(): ?string
    {
        return $this->docURL;
    }

    /**
     * If present, this attribute refers to an online description of the error that occurred.
     *
     * @param string $docURL
     *
     * @return self
     */
    public function setDocURL(?string $docURL): self
    {
        $this->docURL = $docURL;

        return $this;
    }

    /**
     * Transaction time stamp in 'yyyy-mm-ddThh:mm:ss.SSSZ' format.
     *
     * @return string
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }

    /**
     * Transaction time stamp in 'yyyy-mm-ddThh:mm:ss.SSSZ' format.
     *
     * @param string $timeStamp
     *
     * @return self
     */
    public function setTimeStamp(?string $timeStamp): self
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * If present, this attribute provides an XML IDREF to the element for which the results apply.
     *
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * If present, this attribute provides an XML IDREF to the element for which the results apply.
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
