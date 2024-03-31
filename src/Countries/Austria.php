<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Austria implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Austria';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '43';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'B' => 'Burgenland', 'K' => 'Kärnten', 'NÖ' => 'Niederösterreich',
            'OÖ' => 'Oberösterreich', 'S' => 'Salzburg', 'ST' => 'Steiermark',
            'T' => 'Tirol', 'V' => 'Vorarlberg', 'W' => 'Wien',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'de',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'de';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Vienna';
    }
}
