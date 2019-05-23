<?php

namespace Ammonkc\SabreApi\Api;

/**
 * Api interface.
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
interface ApiInterface
{
    public function getPerPage();

    public function setPerPage($perPage);
}
