<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Ukraine implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Ukraine';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'UA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '380';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '43' => 'Avtonomna Respublika Krym', '71' => 'Cherkas ka Oblast',
            '74' => 'Chernihivs ka Oblast', '77' => 'Chernivets ka Oblast',
            '12' => 'Dnipropetrovs ka Oblast', '14' => 'Donets ka Oblast',
            '26' => 'Ivano-Frankivs ka Oblast', '63' => 'Kharkivs ka Oblast',
            '65' => 'Khersons ka Oblast', '68' => 'Khmel nyts ka Oblast',
            '35' => 'Kirovohrads ka Oblast', '30' => 'Kyïv', '32' => 'Kyïvs ka Oblast',
            '46' => 'L vivs ka Oblast', '09' => 'Luhans ka Oblast', '48' => 'Mykolaïvs ka Oblast',
            '51' => 'Odes ka Oblast', '53' => 'Poltavs ka Oblast', '56' => 'Rivnens ka Oblast',
            '40' => 'Sevastopol', '59' => 'Sums ka Oblast', '61' => 'Ternopil s ka Oblast',
            '05' => 'Vinnyts ka Oblast', '07' => 'Volyns ka Oblast', '21' => 'Zakarpats ka Oblast',
            '23' => 'Zaporiz ka Oblast', '18' => 'Zhytomyrs ka Oblast',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'uk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'uk';
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
        return 'UAH';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kyiv';
    }
}
