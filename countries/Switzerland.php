<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Switzerland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Switzerland';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '41';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AG' => 'Aargau', 'AR' => 'Appenzell Ausserrhoden', 'AI' => 'Appenzell Innerrhoden',
            'BL' => 'Basel-Landschaft', 'BS' => 'Basel-Stadt', 'BE' => 'Bern',
            'FR' => 'Fribourg', 'GE' => 'Genève', 'GL' => 'Glarus',
            'GR' => 'Graubünden', 'JU' => 'Jura', 'LU' => 'Luzern',
            'NE' => 'Neuchâtel', 'NW' => 'Nidwalden', 'OW' => 'Obwalden',
            'SG' => 'Sankt Gallen', 'SH' => 'Schaffhausen', 'SZ' => 'Schwyz',
            'SO' => 'Solothurn', 'TG' => 'Thurgau', 'TI' => 'Ticino',
            'UR' => 'Uri', 'VS' => 'Valais', 'VD' => 'Vaud',
            'ZG' => 'Zug', 'ZH' => 'Zürich',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'de', 'fr', 'it',
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
        return 'CHE,CHF,CHW';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bern';
    }
}
