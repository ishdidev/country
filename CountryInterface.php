<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country;

interface CountryInterface
{
    /**
     * Get the name of country.
     */
    public function getName(): string;

    /**
     * Get the two-letter country code.
     */
    public function getCode(): string;

    /**
     * Get the country phone code.
     */
    public function getPhoneCode(): string;

    /**
     * Get the country states.
     *
     * @return array<int|string, string>
     */
    public function getStates(): array;

    /**
     * Get the languages using in the country.
     *
     * @return array<int|string, string>
     */
    public function getLanguages(): array;

    /**
     * Get the main language of the country.
     */
    public function getMainLanguage(): string;

    /**
     * Get the continent of the country.
     */
    public function getContinent(): string;

    /**
     * Get the currency code of the country.
     */
    public function getCurrencyCode(): string;

    /**
     * Get the capital of the country.
     */
    public function getCapital(): string;
}
