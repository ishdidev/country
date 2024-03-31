<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SouthAfrica implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'South Africa';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ZA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '27';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'EC' => 'Eastern Cape', 'FS' => 'Free State', 'GT' => 'Gauteng',
            'NL' => 'KwaZulu-Natal', 'LP' => 'Limpopo', 'MP' => 'Mpumalanga',
            'NW' => 'North West', 'NC' => 'Northern Cape', 'WC' => 'Western Cape',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'af', 'en', 'nr', 'st', 'ss', 'tn', 'ts', 've', 'xh', 'zu',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'af';
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
        return 'ZAR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Pretoria';
    }
}
