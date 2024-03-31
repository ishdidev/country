<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SaintLucia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Saint Lucia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LC';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1758';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Anse la Raye', '02' => 'Castries', '03' => 'Choiseul',
            '04' => 'Dauphin', '05' => 'Dennery', '06' => 'Gros Islet',
            '07' => 'Laborie', '08' => 'Micoud', '09' => 'Praslin',
            '10' => 'Soufrière', '11' => 'Vieux Fort',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
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
        return 'XCD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Castries';
    }
}
