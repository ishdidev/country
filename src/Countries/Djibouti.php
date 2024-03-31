<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Djibouti implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Djibouti';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'DJ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '253';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AS' => 'Ali Sabieh', 'AR' => 'Arta', 'DI' => 'Dikhil',
            'DJ' => 'Djibouti', 'OB' => 'Obock', 'TA' => 'Tadjourah',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'ar',
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
        return 'DJF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Djibouti';
    }
}
