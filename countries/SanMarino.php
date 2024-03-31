<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SanMarino implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'San Marino';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '378';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Acquaviva', '06' => 'Borgo Maggiore', '02' => 'Chiesanuova',
            '03' => 'Domagnano', '04' => 'Faetano', '05' => 'Fiorentino',
            '08' => 'Montegiardino', '07' => 'San Marino', '09' => 'Serravalle',
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
        return 'City of San Marino';
    }
}
