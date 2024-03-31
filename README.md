# Getting started

This repository contains standalone PHP country classes. This can be used for listing countires, states, currency, continent, languages, phone code etc. 

#### Installation

```
composer require ishdidev/country
```

Available Methods
--------------------

```php
$country = new Country();

//List all countries
$countryList = $country->getCountries();

//Get Data
$countryName = $country->getData('IN', Country::COUNTRY_NAME);

$countryCode = $country->getData('India', Country::COUNTRY_CODE);

$phoneCode = $country->getData('IN', Country::COUNTRY_PHONE);

$countryState = $country->getData('IN', Country::COUNTRY_STATE);

$countryLanguages = $country->getData('IN', Country::COUNTRY_LANGUAGE_ALL);

$countryLanguage = $country->getData('IN', Country::COUNTRY_LANGUAGE_MAIN);

$countryContinent = $country->getData('IN', Country::COUNTRY_CONTINENT);

$countryCurrency = $country->getData('IN', Country::COUNTRY_CURRENCY);

$countryCapital = $country->getData('IN', Country::COUNTRY_CAPITAL);

//List all languages

$language = new Language();

$languageList = $language->list();

//List all currencies

$currency = new Currency();

$currencyList = $currency->list();

//List all continents

$continentList = $country->listContinent();

```

