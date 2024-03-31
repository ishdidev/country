<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Angola implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Angola';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '244';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BGO' => 'Bengo', 'BGU' => 'Benguela', 'BIE' => 'Bié',
            'CAB' => 'Cabinda', 'CNN' => 'Cunene', 'HUA' => 'Huambo',
            'HUI' => 'Huíla', 'CCU' => 'Kuando Kubango', 'CNO' => 'Kwanza Norte',
            'CUS' => 'Kwanza Sul', 'LUA' => 'Luanda', 'LNO' => 'Lunda Norte',
            'LSU' => 'Lunda Sul', 'MAL' => 'Malange', 'MOX' => 'Moxico',
            'NAM' => 'Namibe', 'UIG' => 'Uíge', 'ZAI' => 'Zaire',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'pt',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'pt';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'AOA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Luanda';
    }
}
