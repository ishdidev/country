<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Mali implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Mali';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ML';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '223';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BKO' => 'Bamako', '7' => 'Gao', '1' => 'Kayes',
            '8' => 'Kidal', '2' => 'Koulikoro', '5' => 'Mopti',
            '3' => 'Sikasso', '4' => 'Ségou', '6' => 'Tombouctou',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr',
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
        return 'Bamako';
    }
}
