<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Eritrea implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Eritrea';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ER';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '291';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'MA' => 'Al Awsaţ', 'DU' => 'Al Janūbĩ', 'AN' => 'Ansabā',
            'DK' => 'Janūbī al Baḩrī al Aḩmar', 'GB' => 'Qāsh-Barkah', 'SK' => 'Shimālī al Baḩrī al Aḩmar',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ti', 'ar', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ti';
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
        return 'ERN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Asmara';
    }
}
