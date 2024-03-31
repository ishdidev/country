<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Thailand implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Thailand';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '66';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '37' => 'Amnat Charoen', '15' => 'Ang Thong', '38' => 'Bueng Kan',
            '31' => 'Buri Ram', '24' => 'Chachoengsao', '18' => 'Chai Nat',
            '36' => 'Chaiyaphum', '22' => 'Chanthaburi', '50' => 'Chiang Mai',
            '57' => 'Chiang Rai', '20' => 'Chon Buri', '86' => 'Chumphon',
            '46' => 'Kalasin', '62' => 'Kamphaeng Phet', '71' => 'Kanchanaburi',
            '40' => 'Khon Kaen', '81' => 'Krabi', '10' => 'Krung Thep Maha Nakhon',
            '52' => 'Lampang', '51' => 'Lamphun', '42' => 'Loei',
            '16' => 'Lop Buri', '58' => 'Mae Hong Son', '44' => 'Maha Sarakham',
            '49' => 'Mukdahan', '26' => 'Nakhon Nayok', '73' => 'Nakhon Pathom',
            '48' => 'Nakhon Phanom', '30' => 'Nakhon Ratchasima', '60' => 'Nakhon Sawan',
            '80' => 'Nakhon Si Thammarat', '55' => 'Nan', '96' => 'Narathiwat',
            '39' => 'Nong Bua Lam Phu', '43' => 'Nong Khai', '12' => 'Nonthaburi',
            '13' => 'Pathum Thani', '94' => 'Pattani', '82' => 'Phangnga',
            '93' => 'Phatthalung', 'S' => 'Phatthaya', '56' => 'Phayao',
            '67' => 'Phetchabun', '76' => 'Phetchaburi', '66' => 'Phichit',
            '65' => 'Phitsanulok', '14' => 'Phra Nakhon Si Ayutthaya',
            '54' => 'Phrae', '83' => 'Phuket', '25' => 'Prachin Buri',
            '77' => 'Prachuap Khiri Khan', '85' => 'Ranong', '70' => 'Ratchaburi',
            '21' => 'Rayong', '45' => 'Roi Et', '27' => 'Sa Kaeo',
            '47' => 'Sakon Nakhon', '11' => 'Samut Prakan', '74' => 'Samut Sakhon',
            '75' => 'Samut Songkhram', '19' => 'Saraburi', '91' => 'Satun',
            '33' => 'Si Sa Ket', '17' => 'Sing Buri', '90' => 'Songkhla',
            '64' => 'Sukhothai', '72' => 'Suphan Buri', '84' => 'Surat Thani',
            '32' => 'Surin', '63' => 'Tak', '92' => 'Trang',
            '23' => 'Trat', '34' => 'Ubon Ratchathani', '41' => 'Udon Thani',
            '61' => 'Uthai Thani', '53' => 'Uttaradit', '95' => 'Yala',
            '35' => 'Yasothon',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'th',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'th';
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
        return 'THB';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bangkok';
    }
}
