<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class BurkinaFaso implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Burkina Faso';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BF';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '226';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Boucle du Mouhoun', '02' => 'Cascades', '03' => 'Centre',
            '04' => 'Centre-Est', '05' => 'Centre-Nord', '06' => 'Centre-Ouest',
            '07' => 'Centre-Sud', '08' => 'Est', '09' => 'Hauts-Bassins',
            '10' => 'Nord', '11' => 'Plateau-Central', '12' => 'Sahel',
            '13' => 'Sud-Ouest',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'ff',
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
        return 'Ouagadougou';
    }
}
