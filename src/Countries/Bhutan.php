<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Bhutan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bhutan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '975';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '33' => 'Bumthang', '12' => 'Chhukha', '22' => 'Dagana',
            'GA' => 'Gasa', '13' => 'Ha', '44' => 'Lhuentse',
            '42' => 'Monggar', '11' => 'Paro', '43' => 'Pemagatshel',
            '23' => 'Punakha', '45' => 'Samdrup Jongkha', '14' => 'Samtse',
            '31' => 'Sarpang', '15' => 'Thimphu', 'TY' => 'Trashi Yangtse',
            '41' => 'Trashigang', '32' => 'Trongsa', '21' => 'Tsirang',
            '24' => 'Wangdue Phodrang', '34' => 'Zhemgang',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'dz',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'dz';
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
        return 'BTN,INR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Thimphu';
    }
}
