<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Haiti implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Haiti';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'HT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '509';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AR' => 'Artibonite', 'CE' => 'Centre', 'GA' => 'Grande-Anse',
            'NI' => 'Nippes', 'ND' => 'Nord', 'NE' => 'Nord-Est',
            'NO' => 'Nord-Ouest', 'OU' => 'Ouest', 'SD' => 'Sud',
            'SE' => 'Sud-Est',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'ht',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fr';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'HTG,USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Port-au-Prince';
    }
}
