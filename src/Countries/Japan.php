<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Japan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Japan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'JP';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '81';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '23' => 'Aiti', '05' => 'Akita', '02' => 'Aomori',
            '38' => 'Ehime', '21' => 'Gihu', '10' => 'Gunma',
            '34' => 'Hirosima', '01' => 'Hokkaidô', '18' => 'Hukui',
            '40' => 'Hukuoka', '07' => 'Hukusima', '28' => 'Hyôgo',
            '08' => 'Ibaraki', '17' => 'Isikawa', '03' => 'Iwate',
            '37' => 'Kagawa', '46' => 'Kagosima', '14' => 'Kanagawa',
            '43' => 'Kumamoto', '26' => 'Kyôto', '39' => 'Kôti',
            '24' => 'Mie', '04' => 'Miyagi', '45' => 'Miyazaki',
            '20' => 'Nagano', '42' => 'Nagasaki', '29' => 'Nara',
            '15' => 'Niigata', '33' => 'Okayama', '47' => 'Okinawa',
            '41' => 'Saga', '11' => 'Saitama', '25' => 'Siga',
            '32' => 'Simane', '22' => 'Sizuoka', '12' => 'Tiba',
            '36' => 'Tokusima', '09' => 'Totigi', '31' => 'Tottori',
            '16' => 'Toyama', '13' => 'Tôkyô', '30' => 'Wakayama',
            '06' => 'Yamagata', '35' => 'Yamaguti', '19' => 'Yamanasi',
            '44' => 'Ôita', '27' => 'Ôsaka',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ja',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ja';
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
        return 'JPY';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tokyo';
    }
}
