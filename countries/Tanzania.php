<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Tanzania implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Tanzania';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '255';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Arusha', '02' => 'Dar es Salaam', '03' => 'Dodoma',
            '04' => 'Iringa', '05' => 'Kagera', '06' => 'Kaskazini Pemba',
            '07' => 'Kaskazini Unguja', '08' => 'Kigoma', '09' => 'Kilimanjaro',
            '10' => 'Kusini Pemba', '11' => 'Kusini Unguja', '12' => 'Lindi',
            '26' => 'Manyara', '13' => 'Mara', '14' => 'Mbeya',
            '15' => 'Mjini Magharibi', '16' => 'Morogoro', '17' => 'Mtwara',
            '18' => 'Mwanza', '19' => 'Pwani', '20' => 'Rukwa',
            '21' => 'Ruvuma', '22' => 'Shinyanga', '23' => 'Singida',
            '24' => 'Tabora', '25' => 'Tanga',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sw', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sw';
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
        return 'TZS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Dodoma';
    }
}
