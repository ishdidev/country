<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Cuba implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Cuba';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '53';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '15' => 'Artemisa', '09' => 'Camagüey', '08' => 'Ciego de Ávila',
            '06' => 'Cienfuegos', '12' => 'Granma', '14' => 'Guantánamo',
            '11' => 'Holguín', '99' => 'Isla de la Juventud', '03' => 'La Habana',
            '10' => 'Las Tunas', '04' => 'Matanzas', '16' => 'Mayabeque',
            '01' => 'Pinar del Río', '07' => 'Sancti Spíritus', '13' => 'Santiago de Cuba',
            '05' => 'Villa Clara',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'es';
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
        return 'CUC,CUP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Havana';
    }
}
