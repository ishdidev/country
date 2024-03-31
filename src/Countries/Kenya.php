<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Kenya implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Kenya';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '254';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '200' => 'Central', '300' => 'Coast', '400' => 'Eastern',
            '110' => 'Nairobi', '500' => 'North-Eastern', '600' => 'Nyanza',
            '700' => 'Rift Valley', '800' => 'Western',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'sw',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
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
        return 'KES';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Nairobi';
    }
}
