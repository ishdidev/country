<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class France implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'France';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'FR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '33';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'A' => 'Alsace', 'B' => 'Aquitaine', 'C' => 'Auvergne', 'E' => 'Brittany',
            'D' => 'Burgundy', 'F' => 'Centre-Val de Loire', 'G' => 'Champagne-Ardenne',
            'H' => 'Corsica', 'I' => 'Franche-Comté', 'K' => 'Languedoc-Roussillon',
            'L' => 'Limousin', 'M' => 'Lorraine', 'P' => 'Lower Normandy',
            'N' => 'Midi-Pyrénées', 'O' => 'Nord-Pas-de-Calais', 'R' => 'Pays de la Loire',
            'S' => 'Picardy', 'T' => 'Poitou-Charentes', 'U' => 'Provence-Alpes-Côte d Azur',
            'V' => 'Rhône-Alpes', 'Q' => 'Upper Normandy', 'J' => 'Île-de-France',
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
        return 'Paris';
    }
}
