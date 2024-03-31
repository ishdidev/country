<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Croatia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Croatia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'HR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '385';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '07' => 'Bjelovarsko-bilogorska županija', '12' => 'Brodsko-posavska županija',
            '19' => 'Dubrovačko-neretvanska županija', '21' => 'Grad Zagreb', '18' => 'Istarska županija',
            '04' => 'Karlovačka županija', '06' => 'Koprivničko-križevačka županija',
            '02' => 'Krapinsko-zagorska županija', '09' => 'Ličko-senjska županija',
            '20' => 'Međimurska županija', '14' => 'Osječko-baranjska županija',
            '11' => 'Požeško-slavonska županija', '08' => 'Primorsko-goranska županija',
            '03' => 'Sisačko-moslavačka županija', '17' => 'Splitsko-dalmatinska županija',
            '05' => 'Varaždinska županija', '10' => 'Virovitičko-podravska županija',
            '16' => 'Vukovarsko-srijemska županija', '13' => 'Zadarska županija',
            '01' => 'Zagrebačka županija', '15' => 'Šibensko-kninska županija',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'hr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'hr';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'HRK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Zagreb';
    }
}
