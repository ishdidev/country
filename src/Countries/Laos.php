<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Laos implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Laos';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '856';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AT' => 'Attapu', 'BK' => 'Bokèo', 'BL' => 'Bolikhamxai',
            'CH' => 'Champasak', 'HO' => 'Houaphan', 'KH' => 'Khammouan',
            'LM' => 'Louang Namtha', 'LP' => 'Louangphabang', 'OU' => 'Oudômxai',
            'PH' => 'Phôngsali', 'SL' => 'Salavan', 'SV' => 'Savannakhét',
            'VT' => 'Vientiane', 'VI' => 'Vientiane', 'XA' => 'Xaignabouli',
            'XN' => 'Xaisômboun', 'XI' => 'Xiangkhoang', 'XE' => 'Xékong',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'lo',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'lo';
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
        return 'LAK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Vientiane';
    }
}
