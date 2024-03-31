<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Nigeria implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Nigeria';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '234';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AB' => 'Abia', 'FC' => 'Abuja Federal Capital Territory', 'AD' => 'Adamawa',
            'AK' => 'Akwa Ibom', 'AN' => 'Anambra', 'BA' => 'Bauchi',
            'BY' => 'Bayelsa', 'BE' => 'Benue', 'BO' => 'Borno',
            'CR' => 'Cross River', 'DE' => 'Delta', 'EB' => 'Ebonyi',
            'ED' => 'Edo', 'EK' => 'Ekiti', 'EN' => 'Enugu',
            'GO' => 'Gombe', 'IM' => 'Imo', 'JI' => 'Jigawa',
            'KD' => 'Kaduna', 'KN' => 'Kano', 'KT' => 'Katsina',
            'KE' => 'Kebbi', 'KO' => 'Kogi', 'KW' => 'Kwara',
            'LA' => 'Lagos', 'NA' => 'Nassarawa', 'NI' => 'Niger',
            'OG' => 'Ogun', 'ON' => 'Ondo', 'OS' => 'Osun',
            'OY' => 'Oyo', 'PL' => 'Plateau', 'RI' => 'Rivers',
            'SO' => 'Sokoto', 'TA' => 'Taraba', 'YO' => 'Yobe',
            'ZA' => 'Zamfara',
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
        return 'NGN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Abuja';
    }
}
