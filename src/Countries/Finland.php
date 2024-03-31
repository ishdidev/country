<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Finland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Finland';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'FI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '358';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Ahvenanmaan maakunta', '02' => 'Etelä-Karjala', '03' => 'Etelä-Pohjanmaa',
            '04' => 'Etelä-Savo', '05' => 'Kainuu', '06' => 'Kanta-Häme', '07' => 'Keski-Pohjanmaa',
            '08' => 'Keski-Suomi', '09' => 'Kymenlaakso', '10' => 'Lappi', '11' => 'Pirkanmaa',
            '12' => 'Pohjanmaa', '13' => 'Pohjois-Karjala', '14' => 'Pohjois-Pohjanmaa',
            '15' => 'Pohjois-Savo', '16' => 'Päijät-Häme', '17' => 'Satakunta',
            '18' => 'Uusimaa', '19' => 'Varsinais-Suomi',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fi', 'sv',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fi';
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
        return 'Helsinki';
    }
}
