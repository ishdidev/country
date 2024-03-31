<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Iceland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Iceland';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '354';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '7' => 'Austurland', '1' => 'Höfuðborgarsvæði utan Reykjavíkur', '6' => 'Norðurland eystra',
            '5' => 'Norðurland vestra', '0' => 'Reykjavík', '8' => 'Suðurland',
            '2' => 'Suðurnes', '4' => 'Vestfirðir', '3' => 'Vesturland',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'is',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'is';
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
        return 'ISK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Reykjavik';
    }
}
