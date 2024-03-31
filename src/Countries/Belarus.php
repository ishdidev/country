<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Belarus implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Belarus';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '375';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BR' => 'Brestskaya voblasts ', 'HO' => 'Homyel skaya voblasts ', 'HM' => 'Horad Minsk',
            'HR' => 'Hrodzenskaya voblasts ', 'MA' => 'Mahilyowskaya voblasts ', 'MI' => 'Minskaya voblasts ',
            'VI' => 'Vitsyebskaya voblasts ',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'be', 'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'be';
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
        return 'BYN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Minsk';
    }
}
