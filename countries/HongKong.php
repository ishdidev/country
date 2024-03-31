<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class HongKong implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Hong Kong';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'HK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '852';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'NIS' => 'Islands District', 'KKC' => 'Kowloon City', 'NKT' => 'Kwai Tsing',
            'KKT' => 'Kwun Tong', 'NNO' => 'North', 'NSK' => 'Sai Kung District',
            'NST' => 'Sha Tin', 'KSS' => 'Sham Shui Po', 'HSO' => 'Southern',
            'NTW' => 'Tsuen Wan District', 'NTM' => 'Tuen Mun', 'HWC' => 'Wan Chai',
            'KWT' => 'Wong Tai Sin', 'KYT' => 'Yau Tsim Mong', 'NYL' => 'Yuen Long District',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'zh', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'zh';
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
        return 'HKD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'City of Victoria';
    }
}
