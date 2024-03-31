<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Lebanon implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Lebanon';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LB';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '961';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AK' => 'Aakkâr', 'BH' => 'Baalbek-Hermel', 'BA' => 'Beyrouth',
            'BI' => 'Béqaa', 'AS' => 'Liban-Nord', 'JA' => 'Liban-Sud',
            'JL' => 'Mont-Liban', 'NA' => 'Nabatîyé',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ar', 'fr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ar';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'LBP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Beirut';
    }
}
