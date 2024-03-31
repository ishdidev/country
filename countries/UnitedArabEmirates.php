<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class UnitedArabEmirates implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'United Arab Emirates';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '971';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AJ' => 'Ajman', 'AZ' => 'Abu Dhabi', 'FU' => 'Fujairah', 'SH' => 'Sharjah',
            'DU' => 'Dubai', 'RK' => 'Ras al-Khaimah', 'UQ' => 'Umm al-Quwain',
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
        return 'AED';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Abu Dhabi';
    }
}
