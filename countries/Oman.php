<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Oman implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Oman';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'OM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '968';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DA' => 'Ad Dākhilīyah', 'BU' => 'Al Buraymī', 'BA' => 'Al Bāţinah',
            'WU' => 'Al Wusţá', 'SH' => 'Ash Sharqīyah', 'ZA' => 'Az̧ Z̧āhirah',
            'MA' => 'Masqaţ', 'MU' => 'Musandam', 'ZU' => 'Z̧ufār',
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
        return 'OMR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Muscat';
    }
}
