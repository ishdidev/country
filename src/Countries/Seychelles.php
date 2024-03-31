<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Seychelles implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Seychelles';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SC';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '248';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '02' => 'Anse Boileau', '03' => 'Anse Etoile', '05' => 'Anse Royale',
            '01' => 'Anse aux Pins', '04' => 'Au Cap', '06' => 'Baie Lazare',
            '07' => 'Baie Sainte Anne', '08' => 'Beau Vallon', '09' => 'Bel Air',
            '10' => 'Bel Ombre', '11' => 'Cascade', '16' => 'English River',
            '12' => 'Glacis', '13' => 'Grand Anse Mahe', '14' => 'Grand Anse Praslin',
            '15' => 'La Digue', '24' => 'Les Mamelles', '17' => 'Mont Buxton',
            '18' => 'Mont Fleuri', '19' => 'Plaisance', '20' => 'Pointe Larue',
            '21' => 'Port Glaud', '25' => 'Roche Caiman', '22' => 'Saint Louis',
            '23' => 'Takamaka',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'en',
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
        return 'SCR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Victoria';
    }
}
