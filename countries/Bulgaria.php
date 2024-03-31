<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Bulgaria implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bulgaria';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '359';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Blagoevgrad', '02' => 'Burgas', '08' => 'Dobrich',
            '07' => 'Gabrovo', '26' => 'Haskovo', '09' => 'Kardzhali',
            '10' => 'Kyustendil', '11' => 'Lovech', '12' => 'Montana',
            '13' => 'Pazardzhik', '14' => 'Pernik', '15' => 'Pleven',
            '16' => 'Plovdiv', '17' => 'Razgrad', '18' => 'Ruse',
            '27' => 'Shumen', '19' => 'Silistra', '20' => 'Sliven',
            '21' => 'Smolyan', '23' => 'Sofia', '22' => 'Sofia-Grad',
            '24' => 'Stara Zagora', '25' => 'Targovishte', '03' => 'Varna',
            '04' => 'Veliko Tarnovo', '05' => 'Vidin', '06' => 'Vratsa',
            '28' => 'Yambol',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'bg',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'bg';
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
        return 'BGN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Sofia';
    }
}
