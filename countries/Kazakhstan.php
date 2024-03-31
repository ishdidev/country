<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Kazakhstan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Kazakhstan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '76,77';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'ALA' => 'Almaty', 'ALM' => 'Almaty oblysy', 'AKM' => 'Aqmola oblysy',
            'AKT' => 'Aqtöbe oblysy', 'AST' => 'Astana', 'ATY' => 'Atyraū oblysy',
            'ZAP' => 'Batys Qazaqstan oblysy', 'MAN' => 'Mangghystaū oblysy',
            'YUZ' => 'Ongtüstik Qazaqstan oblysy', 'PAV' => 'Pavlodar oblysy',
            'KAR' => 'Qaraghandy oblysy', 'KUS' => 'Qostanay oblysy',
            'KZY' => 'Qyzylorda oblysy', 'VOS' => 'Shyghys Qazaqstan oblysy',
            'SEV' => 'Soltüstik Qazaqstan oblysy', 'ZHA' => 'Zhambyl oblysy',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'kk', 'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'kk';
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
        return 'KZT';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Astana';
    }
}
