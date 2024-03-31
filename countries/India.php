<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class India implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'India';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '91';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AN' => 'Andaman and Nicobar Islands', 'CH' => 'Chandigarh', 'DN' => 'Dadra and Nagar Haveli',
            'DD' => 'Daman and Diu', 'DL' => 'Delhi', 'LD' => 'Lakshadweep',
            'PY' => 'Puducherry', 'AP' => 'Andhra Pradesh', 'AR' => 'Arunachal Pradesh',
            'AS' => 'Assam', 'BR' => 'Bihar', 'CT' => 'Chhattisgarh', 'GA' => 'Goa',
            'GJ' => 'Gujarat', 'HR' => 'Haryana', 'HP' => 'Himachal Pradesh',
            'JK' => 'Jammu and Kashmir', 'JH' => 'Jharkhand', 'KA' => 'Karnataka',
            'KL' => 'Kerala', 'MP' => 'Madhya Pradesh', 'MH' => 'Maharashtra',
            'MN' => 'Manipur', 'ML' => 'Meghalaya', 'MZ' => 'Mizoram',
            'NL' => 'Nagaland', 'OR' => 'Odisha', 'PB' => 'Punjab',
            'RJ' => 'Rajasthan', 'SK' => 'Sikkim', 'TN' => 'Tamil Nadu',
            'TG' => 'Telangana', 'TR' => 'Tripura', 'UP' => 'Uttar Pradesh',
            'UT' => 'Uttarakhand', 'WB' => 'West Bengal',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'hi', 'en', 'bn', 'mr', 'te',
            'ta', 'gu', 'ur', 'kn', 'or',
            'ml', 'pa', 'as', 'sa',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'hi';
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
        return 'INR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'New Delhi';
    }
}
