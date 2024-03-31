<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Taiwan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Taiwan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '886';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'CHA' => 'Changhua', 'CYQ' => 'Chiayi', 'CYI' => 'Chiayi',
            'HSZ' => 'Hsinchu', 'HSQ' => 'Hsinchu', 'HUA' => 'Hualien',
            'ILA' => 'Ilan', 'KHQ' => 'Kaohsiung', 'KHH' => 'Kaohsiung',
            'KEE' => 'Keelung', 'MIA' => 'Miaoli', 'NAN' => 'Nantou',
            'PEN' => 'Penghu', 'PIF' => 'Pingtung', 'TXG' => 'Taichung',
            'TXQ' => 'Taichung', 'TNN' => 'Tainan', 'TNQ' => 'Tainan',
            'TPE' => 'Taipei', 'TPQ' => 'Taipei', 'TTT' => 'Taitung',
            'TAO' => 'Taoyuan', 'YUN' => 'Yunlin',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'zh',
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
        return 'TWD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Taipei';
    }
}
