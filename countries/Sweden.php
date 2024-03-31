<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Sweden implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Sweden';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '46';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'K' => 'Blekinge län', 'W' => 'Dalarnas län', 'I' => 'Gotlands län',
            'X' => 'Gävleborgs län', 'N' => 'Hallands län', 'Z' => 'Jämtlands län',
            'F' => 'Jönköpings län', 'H' => 'Kalmar län', 'G' => 'Kronobergs län',
            'BD' => 'Norrbottens län', 'M' => 'Skåne län', 'AB' => 'Stockholms län',
            'D' => 'Södermanlands län', 'C' => 'Uppsala län', 'S' => 'Värmlands län',
            'AC' => 'Västerbottens län', 'Y' => 'Västernorrlands län', 'U' => 'Västmanlands län',
            'O' => 'Västra Götalands län', 'T' => 'Örebro län', 'E' => 'Östergötlands län',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sv',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sv';
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
        return 'SEK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Stockholm';
    }
}
