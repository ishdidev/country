<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Senegal implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Senegal';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '221';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DK' => 'Dakar', 'DB' => 'Diourbel', 'FK' => 'Fatick', 'KA' => 'Kaffrine',
            'KL' => 'Kaolack', 'KD' => 'Kolda', 'KE' => 'Kédougou', 'LG' => 'Louga',
            'MT' => 'Matam', 'SL' => 'Saint-Louis', 'SE' => 'Sédhiou', 'TC' => 'Tambacounda',
            'TH' => 'Thiès', 'ZG' => 'Ziguinchor',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'XOF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Dakar';
    }
}
