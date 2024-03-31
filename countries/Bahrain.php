<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Bahrain implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bahrain';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '973';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '14' => 'Al Janubiyah', '13' => 'Al Manamah', '15' => 'Al Muharraq', '16' => 'Al Wustá', '17' => 'Ash Shamaliyah',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ar',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ar';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'BHD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Manama';
    }
}
