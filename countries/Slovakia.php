<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Slovakia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Slovakia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '421';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BC' => 'Banskobystrický kraj', 'BL' => 'Bratislavský kraj', 'KI' => 'Košický kraj',
            'NI' => 'Nitriansky kraj', 'PV' => 'Prešovský kraj', 'TC' => 'Trenčiansky kraj',
            'TA' => 'Trnavský kraj', 'ZI' => 'Žilinský kraj',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sk';
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
        return 'Bratislava';
    }
}
