<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Liechtenstein implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Liechtenstein';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '423';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Balzers', '02' => 'Eschen', '03' => 'Gamprin',
            '04' => 'Mauren', '05' => 'Planken', '06' => 'Ruggell',
            '07' => 'Schaan', '08' => 'Schellenberg', '09' => 'Triesen',
            '10' => 'Triesenberg', '11' => 'Vaduz',
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
        return 'CHF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Vaduz';
    }
}
