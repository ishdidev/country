<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Italy implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Italy';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '39';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '65' => 'Abruzzo', '77' => 'Basilicata', '78' => 'Calabria',
            '72' => 'Campania', '45' => 'Emilia-Romagna', '36' => 'Friuli-Venezia Giulia',
            '62' => 'Lazio', '42' => 'Liguria', '25' => 'Lombardia',
            '57' => 'Marche', '67' => 'Molise', '21' => 'Piemonte',
            '75' => 'Puglia', '88' => 'Sardegna', '82' => 'Sicilia',
            '52' => 'Toscana', '32' => 'Trentino-Alto Adige',
            '55' => 'Umbria', '23' => 'Valle d Aosta', '34' => 'Veneto',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'it',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'it';
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
        return 'Rome';
    }
}
