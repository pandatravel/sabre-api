<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FareBasisType extends AbstractModel
{
    /**
     * One to fifteen character Fare Basis Code. Uppercase letters, numbers and wildcards "-" "?" "^" are allowed. Minus (-): zero or more characters. Question mark (?): exactly one character. Caret followed by an uppercase letter or a number (^X): exactly one character, excluding X (replace X with the charter you want to reject).,Defines preferred or excluded fare type codes for whole main fare.,Specify fare type code.
     *
     * @var string
     */
    protected $code;

    /**
     * One to fifteen character Fare Basis Code. Uppercase letters, numbers and wildcards "-" "?" "^" are allowed. Minus (-): zero or more characters. Question mark (?): exactly one character. Caret followed by an uppercase letter or a number (^X): exactly one character, excluding X (replace X with the charter you want to reject).,Defines preferred or excluded fare type codes for whole main fare.,Specify fare type code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * One to fifteen character Fare Basis Code. Uppercase letters, numbers and wildcards "-" "?" "^" are allowed. Minus (-): zero or more characters. Question mark (?): exactly one character. Caret followed by an uppercase letter or a number (^X): exactly one character, excluding X (replace X with the charter you want to reject).,Defines preferred or excluded fare type codes for whole main fare.,Specify fare type code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
