<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Russia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Russia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'RU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '7';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AMU' => 'Amurskaya oblast', 'ARK' => 'Arkhangel skaya oblast', 'AST' => 'Astrakhanskaya oblast',
            'BEL' => 'Belgorodskaya oblast', 'BRY' => 'Bryanskaya oblast', 'CHE' => 'Chelyabinskaya oblast',
            'IRK' => 'Irkutskaya oblast', 'IVA' => 'Ivanovskaya oblast', 'KGD' => 'Kaliningradskaya oblast',
            'KLU' => 'Kaluzhskaya oblast', 'KEM' => 'Kemerovskaya oblast', 'KIR' => 'Kirovskaya oblast',
            'KOS' => 'Kostromskaya oblast', 'KGN' => 'Kurganskaya oblast', 'KRS' => 'Kurskaya oblast',
            'LEN' => 'Leningradskaya oblast', 'LIP' => 'Lipetskaya oblast', 'MAG' => 'Magadanskaya oblast',
            'MOS' => 'Moskovskaya oblast', 'MUR' => 'Murmanskaya oblast', 'NIZ' => 'Nizhegorodskaya oblast',
            'NGR' => 'Novgorodskaya oblast', 'NVS' => 'Novosibirskaya oblast', 'OMS' => 'Omskaya oblast',
            'ORE' => 'Orenburgskaya oblast', 'ORL' => 'Orlovskaya oblast', 'PNZ' => 'Penzenskaya oblast',
            'PSK' => 'Pskovskaya oblast', 'ROS' => 'Rostovskaya oblast', 'RYA' => 'Ryazanskaya oblast',
            'SAK' => 'Sakhalinskaya oblast', 'SAM' => 'Samarskaya oblast', 'SAR' => 'Saratovskaya oblast',
            'SMO' => 'Smolenskaya oblast', 'SVE' => 'Sverdlovskaya oblast', 'TAM' => 'Tambovskaya oblast',
            'TOM' => 'Tomskaya oblast', 'TUL' => 'Tul skaya oblast', 'TVE' => 'Tverskaya oblast',
            'TYU' => 'Tyumenskaya oblast', 'ULY' => 'Ul yanovskaya oblast', 'VLA' => 'Vladimirskaya oblast',
            'VGG' => 'Volgogradskaya oblast', 'VLG' => 'Vologodskaya oblast', 'VOR' => 'Voronezhskaya oblast',
            'YAR' => 'Yaroslavskaya oblast', 'ALT' => 'Altayskiy kray', 'KAM' => 'Kamchatskiy kray',
            'KHA' => 'Khabarovskiy kray', 'KDA' => 'Krasnodarskiy kray', 'KYA' => 'Krasnoyarskiy kray',
            'PER' => 'Permskiy kray', 'PRI' => 'Primorskiy kray', 'STA' => 'Stavropol skiy kray',
            'ZAB' => 'Zabaykal skiy kray', 'MOW' => 'Moskva', 'SPE' => 'Sankt-Peterburg',
            'CHU' => 'Chukotskiy avtonomnyy okrug', 'KHM' => 'Khanty-Mansiyskiy avtonomnyy okrug-Yugra',
            'NEN' => 'Nenetskiy avtonomnyy okrug', 'YAN' => 'Yamalo-Nenetskiy avtonomnyy okrug',
            'YEV' => 'Yevreyskaya avtonomnaya oblast', 'AD' => 'Adygeya, Respublika', 'AL' => 'Altay, Respublika',
            'BA' => 'Bashkortostan, Respublika', 'BU' => 'Buryatiya, Respublika', 'CE' => 'Chechenskaya Respublika',
            'CU' => 'Chuvashskaya Respublika', 'DA' => 'Dagestan, Respublika', 'IN' => 'Ingushetiya, Respublika',
            'KB' => 'Kabardino-Balkarskaya Respublika', 'KL' => 'Kalmykiya, Respublika', 'KC' => 'Karachayevo-Cherkesskaya Respublika',
            'KR' => 'Kareliya, Respublika', 'KK' => 'Khakasiya, Respublika', 'KO' => 'Komi, Respublika',
            'ME' => 'Mariy El, Respublika', 'MO' => 'Mordoviya, Respublika', 'SA' => 'Sakha, Respublika',
            'SE' => 'Severnaya Osetiya-Alaniya, Respublika', 'TA' => 'Tatarstan, Respublika',
            'TY' => 'Tyva, Respublika', 'UD' => 'Udmurtskaya Respublika',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ru';
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
        return 'RUB';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Moscow';
    }
}
