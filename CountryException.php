<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country;

class CountryException extends \Exception
{
    private string $countryCode = '';

    public function __construct(string $countryCode)
    {
        parent::__construct();

        $this->countryCode = $countryCode;
    }

    public function get_Message(): string
    {
        return sprintf('%s %s %s', 'Country with code', $this->countryCode, 'doesnt exist');
    }
}
