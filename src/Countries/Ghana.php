<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Ghana implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Ghana';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '233';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AH' => 'Ashanti', 'BA' => 'Brong-Ahafo', 'CP' => 'Central',
            'EP' => 'Eastern', 'AA' => 'Greater Accra', 'NP' => 'Northern',
            'UE' => 'Upper East', 'UW' => 'Upper West', 'TV' => 'Volta',
            'WP' => 'Western',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
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
        return 'GHS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Accra';
    }
}
