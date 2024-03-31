<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class UnitedKingdom implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'United Kingdom';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GB';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '44';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BDG' => 'Barking and Dagenham', 'BNE' => 'Barnet', 'BEX' => 'Bexley',
            'BEN' => 'Brent', 'BRY' => 'Bromley', 'CMD' => 'Camden',
            'CRY' => 'Croydon', 'EAL' => 'Ealing', 'ENF' => 'Enfield',
            'GRE' => 'Greenwich', 'HCK' => 'Hackney', 'HMF' => 'Hammersmith and Fulham',
            'HRY' => 'Haringey', 'HRW' => 'Harrow', 'HAV' => 'Havering', 'HIL' => 'Hillingdon',
            'HNS' => 'Hounslow', 'ISL' => 'Islington', 'KEC' => 'Kensington and Chelsea',
            'KTT' => 'Kingston upon Thames', 'LBH' => 'Lambeth', 'LEW' => 'Lewisham',
            'MRT' => 'Merton', 'NWM' => 'Newham', 'RDB' => 'Redbridge', 'RIC' => 'Richmond upon Thames',
            'SWK' => 'Southwark', 'STN' => 'Sutton', 'TWH' => 'Tower Hamlets', 'WFT' => 'Waltham Forest',
            'WND' => 'Wandsworth', 'WSM' => 'Westminster', 'EAW' => 'England and Wales',
            'GBN' => 'Great Britain', 'UKM' => 'United Kingdom', 'LND' => 'London, City of',
            'ABE' => 'Aberdeen City', 'ABD' => 'Aberdeenshire', 'ANS' => 'Angus',
            'AGB' => 'Argyll and Bute', 'CLK' => 'Clackmannanshire', 'DGY' => 'Dumfries and Galloway',
            'DND' => 'Dundee City', 'EAY' => 'East Ayrshire', 'EDU' => 'East Dunbartonshire',
            'ELN' => 'East Lothian', 'ERW' => 'East Renfrewshire', 'EDH' => 'Edinburgh, City of',
            'ELS' => 'Eilean Siar', 'FAL' => 'Falkirk', 'FIF' => 'Fife', 'GLG' => 'Glasgow City',
            'HLD' => 'Highland', 'IVC' => 'Inverclyde', 'MLN' => 'Midlothian',
            'MRY' => 'Moray', 'NAY' => 'North Ayrshire', 'NLK' => 'North Lanarkshire',
            'ORK' => 'Orkney Islands', 'PKN' => 'Perth and Kinross', 'RFW' => 'Renfrewshire',
            'SCB' => 'Scottish Borders, The', 'ZET' => 'Shetland Islands', 'SAY' => 'South Ayrshire',
            'SLK' => 'South Lanarkshire', 'STG' => 'Stirling', 'WDU' => 'West Dunbartonshire',
            'WLN' => 'West Lothian', 'ENG' => 'England', 'SCT' => 'Scotland', 'WLS' => 'Wales',
            'ANT' => 'Antrim', 'ARD' => 'Ards', 'ARM' => 'Armagh', 'BLA' => 'Ballymena',
            'BLY' => 'Ballymoney', 'BNB' => 'Banbridge', 'BFS' => 'Belfast',
            'CKF' => 'Carrickfergus', 'CSR' => 'Castlereagh', 'CLR' => 'Coleraine',
            'CKT' => 'Cookstown', 'CGV' => 'Craigavon', 'DRY' => 'Derry',
            'DOW' => 'Down', 'DGN' => 'Dungannon and South Tyrone', 'FER' => 'Fermanagh',
            'LRN' => 'Larne', 'LMV' => 'Limavady', 'LSB' => 'Lisburn',
            'MFT' => 'Magherafelt', 'MYL' => 'Moyle', 'NYM' => 'Newry and Mourne District',
            'NTA' => 'Newtownabbey', 'NDN' => 'North Down', 'OMH' => 'Omagh',
            'STB' => 'Strabane', 'BNS' => 'Barnsley', 'BIR' => 'Birmingham',
            'BOL' => 'Bolton', 'BRD' => 'Bradford', 'BUR' => 'Bury',
            'CLD' => 'Calderdale', 'COV' => 'Coventry', 'DNC' => 'Doncaster',
            'DUD' => 'Dudley', 'GAT' => 'Gateshead', 'KIR' => 'Kirklees',
            'KWL' => 'Knowsley', 'LDS' => 'Leeds', 'LIV' => 'Liverpool', 'MAN' => 'Manchester',
            'NET' => 'Newcastle upon Tyne', 'NTY' => 'North Tyneside', 'OLD' => 'Oldham',
            'RCH' => 'Rochdale', 'ROT' => 'Rotherham', 'SLF' => 'Salford', 'SAW' => 'Sandwell',
            'SFT' => 'Sefton', 'SHF' => 'Sheffield', 'SOL' => 'Solihull', 'STY' => 'South Tyneside',
            'SHN' => 'St. Helens', 'SKP' => 'Stockport', 'SND' => 'Sunderland',
            'TAM' => 'Tameside', 'TRF' => 'Trafford', 'WKF' => 'Wakefield',
            'WLL' => 'Walsall', 'WGN' => 'Wigan', 'WRL' => 'Wirral',
            'WLV' => 'Wolverhampton', 'NIR' => 'Northern Ireland', 'BKM' => 'Buckinghamshire',
            'CAM' => 'Cambridgeshire', 'CMA' => 'Cumbria', 'DBY' => 'Derbyshire',
            'DEV' => 'Devon', 'DOR' => 'Dorset', 'ESX' => 'East Sussex', 'ESS' => 'Essex',
            'GLS' => 'Gloucestershire', 'HAM' => 'Hampshire', 'HRT' => 'Hertfordshire',
            'KEN' => 'Kent', 'LAN' => 'Lancashire', 'LEC' => 'Leicestershire',
            'LIN' => 'Lincolnshire', 'NFK' => 'Norfolk', 'NYK' => 'North Yorkshire',
            'NTH' => 'Northamptonshire', 'NTT' => 'Nottinghamshire', 'OXF' => 'Oxfordshire',
            'SOM' => 'Somerset', 'STS' => 'Staffordshire', 'SFK' => 'Suffolk',
            'SRY' => 'Surrey', 'WAR' => 'Warwickshire', 'WSX' => 'West Sussex',
            'WOR' => 'Worcestershire', 'BAS' => 'Bath and North East Somerset',
            'BDF' => 'Bedford', 'BBD' => 'Blackburn with Darwen', 'BPL' => 'Blackpool',
            'BGW' => 'Blaenau Gwent', 'BMH' => 'Bournemouth', 'BRC' => 'Bracknell Forest',
            'BGE' => 'Bridgend', 'BNH' => 'Brighton and Hove', 'BST' => 'Bristol, City of',
            'CAY' => 'Caerphilly', 'CRF' => 'Cardiff', 'CMN' => 'Carmarthenshire',
            'CBF' => 'Central Bedfordshire', 'CGN' => 'Ceredigion', 'CHE' => 'Cheshire East',
            'CHW' => 'Cheshire West and Chester', 'CWY' => 'Conwy', 'CON' => 'Cornwall',
            'DAL' => 'Darlington', 'DEN' => 'Denbighshire', 'DER' => 'Derby',
            'DUR' => 'Durham, County', 'ERY' => 'East Riding of Yorkshire',
            'FLN' => 'Flintshire', 'GWN' => 'Gwynedd', 'HAL' => 'Halton',
            'HPL' => 'Hartlepool', 'HEF' => 'Herefordshire', 'AGY' => 'Isle of Anglesey',
            'IOW' => 'Isle of Wight', 'IOS' => 'Isles of Scilly', 'KHL' => 'Kingston upon Hull',
            'LCE' => 'Leicester', 'LUT' => 'Luton', 'MDW' => 'Medway', 'MTY' => 'Merthyr Tydfil',
            'MDB' => 'Middlesbrough', 'MIK' => 'Milton Keynes', 'MON' => 'Monmouthshire',
            'NTL' => 'Neath Port Talbot', 'NWP' => 'Newport', 'NEL' => 'North East Lincolnshire',
            'NLN' => 'North Lincolnshire', 'NSM' => 'North Somerset', 'NBL' => 'Northumberland',
            'NGM' => 'Nottingham', 'PEM' => 'Pembrokeshire', 'PTE' => 'Peterborough',
            'PLY' => 'Plymouth', 'POL' => 'Poole', 'POR' => 'Portsmouth', 'POW' => 'Powys',
            'RDG' => 'Reading', 'RCC' => 'Redcar and Cleveland', 'RCT' => 'Rhondda, Cynon, Taff',
            'RUT' => 'Rutland', 'SHR' => 'Shropshire', 'SLG' => 'Slough', 'SGC' => 'South Gloucestershire',
            'STH' => 'Southampton', 'SOS' => 'Southend-on-Sea', 'STT' => 'Stockton-on-Tees',
            'STE' => 'Stoke-on-Trent', 'SWA' => 'Swansea', 'SWD' => 'Swindon',
            'TFW' => 'Telford and Wrekin', 'THR' => 'Thurrock', 'TOB' => 'Torbay',
            'TOF' => 'Torfaen', 'VGL' => 'Vale of Glamorgan, The', 'WRT' => 'Warrington',
            'WBK' => 'West Berkshire', 'WIL' => 'Wiltshire', 'WNM' => 'Windsor and Maidenhead',
            'WOK' => 'Wokingham', 'WRX' => 'Wrexham', 'YOR' => 'York',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
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
        return 'GBP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'London';
    }
}
