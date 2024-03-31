<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Iraq implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Iraq';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IQ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '964';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AN' => 'Al Anbār', 'BA' => 'Al Başrah', 'MU' => 'Al Muthanná',
            'QA' => 'Al Qādisīyah', 'NA' => 'An Najaf', 'AR' => 'Arbīl',
            'SU' => 'As Sulaymānīyah', 'TS' => 'At Ta mīm', 'BG' => 'Baghdād',
            'BB' => 'Bābil', 'DA' => 'Dahūk', 'DQ' => 'Dhī Qār',
            'DI' => 'Diyālá', 'KA' => 'Karbalā ', 'MA' => 'Maysān',
            'NI' => 'Nīnawá', 'WA' => 'Wāsiţ', 'SD' => 'Şalāḩ ad Dīn',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ar', 'ku',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ar';
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
        return 'IQD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Baghdad';
    }
}
