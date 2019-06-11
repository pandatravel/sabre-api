<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItem
{
    /**
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
     * An abbreviated version of the error in textual format.
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
     * Host system command run to create this result.
     *
     * @var SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemHostCommand
     */
    protected $hostCommand;
    /**
     * Application specific code and Message. A textual description to provide more information about the specific condition, warning or error with code attribute as numeric value.
     *
     * @var SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemMessageItem[]
     */
    protected $message;

    /**
     * @return string
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }

    /**
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

    /**
     * An abbreviated version of the error in textual format.
     *
     * @return string
     */
    public function getShortText(): ?string
    {
        return $this->shortText;
    }

    /**
     * An abbreviated version of the error in textual format.
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
     * Host system command run to create this result.
     *
     * @return SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemHostCommand
     */
    public function getHostCommand(): ?SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemHostCommand
    {
        return $this->hostCommand;
    }

    /**
     * Host system command run to create this result.
     *
     * @param SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemHostCommand $hostCommand
     *
     * @return self
     */
    public function setHostCommand(?SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemHostCommand $hostCommand): self
    {
        $this->hostCommand = $hostCommand;

        return $this;
    }

    /**
     * Application specific code and Message. A textual description to provide more information about the specific condition, warning or error with code attribute as numeric value.
     *
     * @return SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemMessageItem[]
     */
    public function getMessage(): ?array
    {
        return $this->message;
    }

    /**
     * Application specific code and Message. A textual description to provide more information about the specific condition, warning or error with code attribute as numeric value.
     *
     * @param SeatMapResponseEnhancedSeatMapRSApplicationResultsWarningItemSystemSpecificResultsItemMessageItem[] $message
     *
     * @return self
     */
    public function setMessage(?array $message): self
    {
        $this->message = $message;

        return $this;
    }
}
