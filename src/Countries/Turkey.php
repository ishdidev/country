<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Turkey implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Turkey';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '90';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Adana', '02' => 'Adıyaman', '03' => 'Afyonkarahisar',
            '68' => 'Aksaray', '05' => 'Amasya', '06' => 'Ankara',
            '07' => 'Antalya', '75' => 'Ardahan', '08' => 'Artvin',
            '09' => 'Aydın', '04' => 'Ağrı', '10' => 'Balıkesir',
            '74' => 'Bartın', '72' => 'Batman', '69' => 'Bayburt',
            '11' => 'Bilecik', '12' => 'Bingöl', '13' => 'Bitlis',
            '14' => 'Bolu', '15' => 'Burdur', '16' => 'Bursa',
            '20' => 'Denizli', '21' => 'Diyarbakır', '81' => 'Düzce',
            '22' => 'Edirne', '23' => 'Elazığ', '24' => 'Erzincan',
            '25' => 'Erzurum', '26' => 'Eskişehir', '27' => 'Gaziantep',
            '28' => 'Giresun', '29' => 'Gümüşhane', '30' => 'Hakkâri',
            '31' => 'Hatay', '32' => 'Isparta', '76' => 'Iğdır',
            '46' => 'Kahramanmaraş', '78' => 'Karabük', '70' => 'Karaman',
            '36' => 'Kars', '37' => 'Kastamonu', '38' => 'Kayseri',
            '79' => 'Kilis', '41' => 'Kocaeli', '42' => 'Konya',
            '43' => 'Kütahya', '39' => 'Kırklareli', '71' => 'Kırıkkale',
            '40' => 'Kırşehir', '44' => 'Malatya', '45' => 'Manisa',
            '47' => 'Mardin', '33' => 'Mersin', '48' => 'Muğla',
            '49' => 'Muş', '50' => 'Nevşehir', '51' => 'Niğde',
            '52' => 'Ordu', '80' => 'Osmaniye', '53' => 'Rize',
            '54' => 'Sakarya', '55' => 'Samsun', '56' => 'Siirt',
            '57' => 'Sinop', '58' => 'Sivas', '59' => 'Tekirdağ',
            '60' => 'Tokat', '61' => 'Trabzon', '62' => 'Tunceli',
            '64' => 'Uşak', '65' => 'Van', '77' => 'Yalova',
            '66' => 'Yozgat', '67' => 'Zonguldak', '17' => 'Çanakkale',
            '18' => 'Çankırı', '19' => 'Çorum', '34' => 'İstanbul',
            '35' => 'İzmir', '63' => 'Şanlıurfa', '73' => 'Şırnak',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'tr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'tr';
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
        return 'TRY';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Ankara';
    }
}
