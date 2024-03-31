<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Kuwait implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Kuwait';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '965';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AH' => 'Al Aḩmadi', 'FA' => 'Al Farwānīyah', 'JA' => 'Al Jahrā’',
            'KU' => 'Al Kuwayt', 'MU' => 'Mubārak al Kabīr', 'HA' => 'Ḩawallī',
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
        return 'KWD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kuwait City';
    }
}
