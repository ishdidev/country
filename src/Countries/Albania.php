<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Albania implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Albania';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '355';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Berat', '09' => 'Dibër', '02' => 'Durrës',
            '03' => 'Elbasan', '04' => 'Fier', '05' => 'Gjirokastër',
            '06' => 'Korçë', '07' => 'Kukës', '08' => 'Lezhë',
            '10' => 'Shkodër', '11' => 'Tiranë', '12' => 'Vlorë',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sq',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sq';
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
        return 'ALL';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tirana';
    }
}
