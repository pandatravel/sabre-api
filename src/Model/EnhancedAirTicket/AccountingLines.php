<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class AccountingLines extends AbstractModel
{
    /**
     * "All" is used to delete all accounting lines.

    "All" cannot combine with None.

     *
     * @var bool
     */
    protected $all;
    /**
     * "None" is used to indicate not to delete any of the accounting lines.

    "None" cannot combine with All.

     *
     * @var bool
     */
    protected $none;
    /**
     * @var AccountingLinesDeleteItem[]
     */
    protected $delete;

    /**
     * "All" is used to delete all accounting lines.

    "All" cannot combine with None.

     *
     * @return bool
     */
    public function getAll(): ?bool
    {
        return $this->all;
    }

    /**
     * "All" is used to delete all accounting lines.

    "All" cannot combine with None.

     *
     * @param bool $all
     *
     * @return self
     */
    public function setAll(?bool $all): self
    {
        $this->all = $all;

        return $this;
    }

    /**
     * "None" is used to indicate not to delete any of the accounting lines.

    "None" cannot combine with All.

     *
     * @return bool
     */
    public function getNone(): ?bool
    {
        return $this->none;
    }

    /**
     * "None" is used to indicate not to delete any of the accounting lines.

    "None" cannot combine with All.

     *
     * @param bool $none
     *
     * @return self
     */
    public function setNone(?bool $none): self
    {
        $this->none = $none;

        return $this;
    }

    /**
     * @return AccountingLinesDeleteItem[]
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }

    /**
     * @param AccountingLinesDeleteItem[] $delete
     *
     * @return self
     */
    public function setDelete(?array $delete): self
    {
        $this->delete = $delete;

        return $this;
    }
}
