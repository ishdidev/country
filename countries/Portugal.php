<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Portugal implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Portugal';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '351';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Aveiro', '02' => 'Beja', '03' => 'Braga',
            '04' => 'Bragança', '05' => 'Castelo Branco', '06' => 'Coimbra',
            '08' => 'Faro', '09' => 'Guarda', '10' => 'Leiria',
            '11' => 'Lisboa', '12' => 'Portalegre', '13' => 'Porto',
            '30' => 'Região Autónoma da Madeira', '20' => 'Região Autónoma dos Açores',
            '14' => 'Santarém', '15' => 'Setúbal', '16' => 'Viana do Castelo',
            '17' => 'Vila Real', '18' => 'Viseu', '07' => 'Évora',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'pt',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'pt';
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
        return 'Lisbon';
    }
}
