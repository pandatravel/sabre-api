<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Phone extends AbstractModel
{
    /**
     * The unique identifier assigned to the phone.
     *
     * @var string
     */
    protected $id;
    /**
     * The phone number.
     *
     * @var string
     */
    protected $number;
    /**
     * The three-letter [IATA city code](https://www.iata.org/publications/Pages/code-search.aspx) city code.
     *
     * @var string
     */
    protected $cityCode;

    /**
     * The unique identifier assigned to the phone.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier assigned to the phone.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The phone number.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * The phone number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The three-letter [IATA city code](https://www.iata.org/publications/Pages/code-search.aspx) city code.
     *
     * @return string
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * The three-letter [IATA city code](https://www.iata.org/publications/Pages/code-search.aspx) city code.
     *
     * @param string $cityCode
     *
     * @return self
     */
    public function setCityCode(?string $cityCode): self
    {
        $this->cityCode = $cityCode;

        return $this;
    }
}
