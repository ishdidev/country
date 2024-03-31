<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Netherlands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Netherlands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '31';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DR' => 'Drenthe', 'FL' => 'Flevoland', 'FR' => 'Fryslân',
            'GE' => 'Gelderland', 'GR' => 'Groningen', 'LI' => 'Limburg',
            'NB' => 'Noord-Brabant', 'NH' => 'Noord-Holland', 'OV' => 'Overijssel',
            'UT' => 'Utrecht', 'ZE' => 'Zeeland', 'ZH' => 'Zuid-Holland',
            'AW' => 'Aruba', 'CW' => 'Curaçao', 'SX' => 'Sint Maarten',
            'BQ1' => 'Bonaire', 'BQ2' => 'Saba', 'BQ3' => 'Sint Eustatius',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'nl',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'nl';
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
        return 'Amsterdam';
    }
}
