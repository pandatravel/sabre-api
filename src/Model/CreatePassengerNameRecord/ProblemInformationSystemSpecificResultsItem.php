<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

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
     * @return ProblemInformationSystemSpecificResultsItemHostCommand|null
     */
    public function getHostCommand(): ?ProblemInformationSystemSpecificResultsItemHostCommand
    {
        return $this->hostCommand;
    }

    /**
     * @param ProblemInformationSystemSpecificResultsItemHostCommand|null $hostCommand
     *
     * @return self
     */
    public function setHostCommand(?ProblemInformationSystemSpecificResultsItemHostCommand $hostCommand): self
    {
        $this->hostCommand = $hostCommand;

        return $this;
    }

    /**
     * @return ProblemInformationSystemSpecificResultsItemMessageItem[]|null
     */
    public function getMessage(): ?array
    {
        return $this->message;
    }

    /**
     * @param ProblemInformationSystemSpecificResultsItemMessageItem[]|null $message
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
     * @return string|null
     */
    public function getShortText(): ?string
    {
        return $this->shortText;
    }

    /**
     * An abbreviated version of the error or warning in textual format.
     *
     * @param string|null $shortText
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
     * @return string|null
     */
    public function getElement(): ?string
    {
        return $this->element;
    }

    /**
     * If present, this attribute may identify an unknown or misspelled tag that caused an error in processing. It is recommended that the Tag attribute use XPath notation to identify the location of a tag in the event that more than one tag of the same name is present in the document. Alternatively, the tag name alone can be used to identify missing data [Type=ReqFieldMissing].
     *
     * @param string|null $element
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
     * @return string|null
     */
    public function getRecordID(): ?string
    {
        return $this->recordID;
    }

    /**
     * If present, this attribute allows for batch processing and the identification of the record that failed amongst a group of records. This value may contain a concatenation of a unique failed transaction ID with specific record(s) associated with that transaction.
     *
     * @param string|null $recordID
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
     * @return string|null
     */
    public function getDocURL(): ?string
    {
        return $this->docURL;
    }

    /**
     * If present, this attribute refers to an online description of the error that occurred.
     *
     * @param string|null $docURL
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
     * @return string|null
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }

    /**
     * Transaction time stamp in 'yyyy-mm-ddThh:mm:ss.SSSZ' format.
     *
     * @param string|null $timeStamp
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
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * If present, this attribute provides an XML IDREF to the element for which the results apply.
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
