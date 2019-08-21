<?php

namespace EMS\ClientHelperBundle\Helper\Hashcash;


class Token
{
    const DELIMITER = '|';

    /** @var string */
    private $level;

    /** @var string */
    private $csrf;

    /** @var string */
    private $random;

    public function __construct(string $hashcash)
    {
        list($this->level, $this->csrf, $this->random) = explode(Token::DELIMITER, $hashcash);
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function getCsrf(): string
    {
        return $this->csrf;
    }

    public function getRandom(): string
    {
        return $this->random;
    }
}
