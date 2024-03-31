<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Montenegro implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Montenegro';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ME';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '382';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Andrijevica', '02' => 'Bar', '03' => 'Berane',
            '04' => 'Bijelo Polje', '05' => 'Budva', '06' => 'Cetinje',
            '07' => 'Danilovgrad', '22' => 'Gusinje', '08' => 'Herceg-Novi',
            '09' => 'Kolašin', '10' => 'Kotor', '11' => 'Mojkovac',
            '12' => 'Nikšić', '23' => 'Petnjica', '13' => 'Plav',
            '14' => 'Pljevlja', '15' => 'Plužine', '16' => 'Podgorica',
            '17' => 'Rožaje', '19' => 'Tivat', '20' => 'Ulcinj',
            '18' => 'Šavnik', '21' => 'Žabljak',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sr', 'bs', 'sq', 'hr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sr';
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
        return 'Podgorica';
    }
}
