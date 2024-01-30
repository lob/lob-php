<?php
/**
 * CountryExtendedExpanded
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CountryExtendedExpanded Class Doc Comment
 *
 * @category Class
 * @description Full name of country
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum CountryExtendedExpanded: string
{
    /**
     * Possible values of this enum
     */
    case EMPTY = '';

    case AFGHANISTAN = 'AFGHANISTAN';

    case ALBANIA = 'ALBANIA';

    case ALGERIA = 'ALGERIA';

    case AMERICAN_SAMOA = 'AMERICAN SAMOA';

    case ANDORRA = 'ANDORRA';

    case ANGOLA = 'ANGOLA';

    case ANGUILLA = 'ANGUILLA';

    case ANTARCTICA = 'ANTARCTICA';

    case ANTIGUA_AND_BARBUDA = 'ANTIGUA AND BARBUDA';

    case ARGENTINA = 'ARGENTINA';

    case ARMENIA = 'ARMENIA';

    case ARUBA = 'ARUBA';

    case AUSTRALIA = 'AUSTRALIA';

    case AUSTRIA = 'AUSTRIA';

    case AZERBAIJAN = 'AZERBAIJAN';

    case BAHRAIN = 'BAHRAIN';

    case BANGLADESH = 'BANGLADESH';

    case BARBADOS = 'BARBADOS';

    case BELARUS = 'BELARUS';

    case BELGIUM = 'BELGIUM';

    case BELIZE = 'BELIZE';

    case BENIN = 'BENIN';

    case BERMUDA = 'BERMUDA';

    case BHUTAN = 'BHUTAN';

    case BOLIVIA__PLURINATIONAL_STATE_OF = 'BOLIVIA (PLURINATIONAL STATE OF)';

    case BONAIRE_SAINT_EUSTATIUS_AND_SABA = 'BONAIRE, SAINT EUSTATIUS AND SABA';

    case BOSNIA_AND_HERZEGOVINA = 'BOSNIA AND HERZEGOVINA';

    case BOTSWANA = 'BOTSWANA';

    case BRAZIL = 'BRAZIL';

    case BRITISH_INDIAN_OCEAN_TERRITORY = 'BRITISH INDIAN OCEAN TERRITORY';

    case BRITISH_VIRGIN_ISLANDS = 'BRITISH VIRGIN ISLANDS';

    case BRUNEI_DARUSSALAM = 'BRUNEI DARUSSALAM';

    case BULGARIA = 'BULGARIA';

    case BURKINA_FASO = 'BURKINA FASO';

    case BURUNDI = 'BURUNDI';

    case CABO_VERDE = 'CABO VERDE';

    case CAMBODIA = 'CAMBODIA';

    case CAMEROON = 'CAMEROON';

    case CANADA = 'CANADA';

    case CAYMAN_ISLANDS = 'CAYMAN ISLANDS';

    case CENTRAL_AFRICAN_REPUBLIC = 'CENTRAL AFRICAN REPUBLIC';

    case CHAD = 'CHAD';

    case CHILE = 'CHILE';

    case CHINA = 'CHINA';

    case COLOMBIA = 'COLOMBIA';

    case COMOROS = 'COMOROS';

    case CONGO = 'CONGO';

    case CONGO_DEMOCRATIC_REPUBLIC_OF_THE = 'CONGO, DEMOCRATIC REPUBLIC OF THE';

    case COOK_ISLANDS = 'COOK ISLANDS';

    case COSTA_RICA = 'COSTA RICA';

    case CTE_DIVOIRE = 'CÔTE D`IVOIRE';

    case CROATIA = 'CROATIA';

    case CUBA = 'CUBA';

    case CURAAO = 'CURAÇAO';

    case CYPRUS = 'CYPRUS';

    case CZECH_REPUBLIC = 'CZECH REPUBLIC';

    case DENMARK = 'DENMARK';

    case DJIBOUTI = 'DJIBOUTI';

    case DOMINICA = 'DOMINICA';

    case DOMINICAN_REPUBLIC = 'DOMINICAN REPUBLIC';

    case ECUADOR = 'ECUADOR';

    case EGYPT = 'EGYPT';

    case EL_SALVADOR = 'EL SALVADOR';

    case EQUATORIAL_GUINEA = 'EQUATORIAL GUINEA';

    case ERITREA = 'ERITREA';

    case ESTONIA = 'ESTONIA';

    case ESWATINI = 'ESWATINI';

    case ETHIOPIA = 'ETHIOPIA';

    case FALKLAND_ISLANDS__MALVINAS = 'FALKLAND ISLANDS (MALVINAS)';

    case FAROE_ISLANDS = 'FAROE ISLANDS';

    case FIJI = 'FIJI';

    case FINLAND = 'FINLAND';

    case FRANCE = 'FRANCE';

    case GABON = 'GABON';

    case GAMBIA = 'GAMBIA';

    case GEORGIA = 'GEORGIA';

    case GERMANY = 'GERMANY';

    case GHANA = 'GHANA';

    case GIBRALTAR = 'GIBRALTAR';

    case GREECE = 'GREECE';

    case GREENLAND = 'GREENLAND';

    case GRENADA = 'GRENADA';

    case GUATEMALA = 'GUATEMALA';

    case GUINEA = 'GUINEA';

    case GUINEA_BISSAU = 'GUINEA-BISSAU';

    case GUYANA = 'GUYANA';

    case HAITI = 'HAITI';

    case HOLY_SEE = 'HOLY SEE';

    case HONDURAS = 'HONDURAS';

    case HONG_KONG = 'HONG KONG';

    case HUNGARY = 'HUNGARY';

    case ICELAND = 'ICELAND';

    case INDIA = 'INDIA';

    case INDONESIA = 'INDONESIA';

    case IRAN__ISLAMIC_REPUBLIC_OF = 'IRAN (ISLAMIC REPUBLIC OF)';

    case IRAQ = 'IRAQ';

    case IRELAND = 'IRELAND';

    case ISRAEL = 'ISRAEL';

    case ITALY = 'ITALY';

    case JAMAICA = 'JAMAICA';

    case JAPAN = 'JAPAN';

    case JORDAN = 'JORDAN';

    case KAZAKHSTAN = 'KAZAKHSTAN';

    case KENYA = 'KENYA';

    case KIRIBATI = 'KIRIBATI';

    case KOREA__DEMOCRATIC_PEOPLES_REPUBLIC_OF = 'KOREA (DEMOCRATIC PEOPLE’S REPUBLIC OF)';

    case KOREA_REPUBLIC_OF = 'KOREA, REPUBLIC OF';

    case KUWAIT = 'KUWAIT';

    case KYRGYZSTAN = 'KYRGYZSTAN';

    case LAO_PEOPLES_DEMOCRATIC_REPUBLIC = 'LAO PEOPLE’S DEMOCRATIC REPUBLIC';

    case LATVIA = 'LATVIA';

    case LEBANON = 'LEBANON';

    case LESOTHO = 'LESOTHO';

    case LIBERIA = 'LIBERIA';

    case LIBYA = 'LIBYA';

    case LIECHTENSTEIN = 'LIECHTENSTEIN';

    case LITHUANIA = 'LITHUANIA';

    case LUXEMBOURG = 'LUXEMBOURG';

    case MACAO = 'MACAO';

    case MACEDONIA = 'MACEDONIA';

    case MADAGASCAR = 'MADAGASCAR';

    case MALAWI = 'MALAWI';

    case MALAYSIA = 'MALAYSIA';

    case MALDIVES = 'MALDIVES';

    case MALI = 'MALI';

    case MALTA = 'MALTA';

    case MAURITANIA = 'MAURITANIA';

    case MAURITIUS = 'MAURITIUS';

    case MEXICO = 'MEXICO';

    case MOLDOVA_REPUBLIC_OF = 'MOLDOVA, REPUBLIC OF';

    case MONACO = 'MONACO';

    case MONGOLIA = 'MONGOLIA';

    case MONTENEGRO = 'MONTENEGRO';

    case MONTSERRAT = 'MONTSERRAT';

    case MOROCCO = 'MOROCCO';

    case MOZAMBIQUE = 'MOZAMBIQUE';

    case MYANMAR = 'MYANMAR';

    case NAMIBIA = 'NAMIBIA';

    case NAURU = 'NAURU';

    case NEPAL = 'NEPAL';

    case NETHERLAND_ANTILLES = 'NETHERLAND ANTILLES';

    case NETHERLANDS = 'NETHERLANDS';

    case NEW_ZEALAND = 'NEW ZEALAND';

    case NICARAGUA = 'NICARAGUA';

    case NIGER = 'NIGER';

    case NIGERIA = 'NIGERIA';

    case NIUE = 'NIUE';

    case NORFOLK_ISLAND = 'NORFOLK ISLAND';

    case NORWAY = 'NORWAY';

    case OMAN = 'OMAN';

    case PAKISTAN = 'PAKISTAN';

    case PANAMA = 'PANAMA';

    case PAPUA_NEW_GUINEA = 'PAPUA NEW GUINEA';

    case PARAGUAY = 'PARAGUAY';

    case PERU = 'PERU';

    case PHILIPPINES = 'PHILIPPINES';

    case PITCAIRN = 'PITCAIRN';

    case POLAND = 'POLAND';

    case PORTUGAL = 'PORTUGAL';

    case QATAR = 'QATAR';

    case ROMANIA = 'ROMANIA';

    case RUSSIAN_FEDERATION = 'RUSSIAN FEDERATION';

    case RWANDA = 'RWANDA';

    case SAINT_HELENA = 'SAINT HELENA';

    case SAINT_KITTS_AND_NEVIS = 'SAINT KITTS AND NEVIS';

    case SAINT_LUCIA = 'SAINT LUCIA';

    case SAINT_VINCENT_AND_THE_GRENADINES = 'SAINT VINCENT AND THE GRENADINES';

    case SAMOA = 'SAMOA';

    case SAN_MARINO = 'SAN MARINO';

    case SAO_TOME_AND_PRINCIPE = 'SAO TOME AND PRINCIPE';

    case SAUDI_ARABIA = 'SAUDI ARABIA';

    case SENEGAL = 'SENEGAL';

    case SERBIA = 'SERBIA';

    case SEYCHELLES = 'SEYCHELLES';

    case SIERRA_LEONE = 'SIERRA LEONE';

    case SINGAPORE = 'SINGAPORE';

    case SINT_MAARTEN = 'SINT MAARTEN';

    case SLOVAKIA = 'SLOVAKIA';

    case SLOVENIA = 'SLOVENIA';

    case SOLOMON_ISLANDS = 'SOLOMON ISLANDS';

    case SOMALIA = 'SOMALIA';

    case SOUTH_AFRICA = 'SOUTH AFRICA';

    case SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS = 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS';

    case SOUTH_SUDAN = 'SOUTH SUDAN';

    case SPAIN = 'SPAIN';

    case SRI_LANKA = 'SRI LANKA';

    case SUDAN = 'SUDAN';

    case SURINAME = 'SURINAME';

    case SWEDEN = 'SWEDEN';

    case SWITZERLAND = 'SWITZERLAND';

    case SYRIAN_ARAB_REPUBLIC = 'SYRIAN ARAB REPUBLIC';

    case TAIWAN = 'TAIWAN';

    case TAJIKISTAN = 'TAJIKISTAN';

    case TANZANIA = 'TANZANIA';

    case THAILAND = 'THAILAND';

    case THE_BAHAMAS = 'THE BAHAMAS';

    case TIMOR_LESTE = 'TIMOR-LESTE';

    case TOGO = 'TOGO';

    case TOKELAU = 'TOKELAU';

    case TONGA = 'TONGA';

    case TRINIDAD_AND_TOBAGO = 'TRINIDAD AND TOBAGO';

    case TUNISIA = 'TUNISIA';

    case TURKEY = 'TURKEY';

    case TURKMENISTAN = 'TURKMENISTAN';

    case TURKS_AND_CAICOS_ISLANDS = 'TURKS AND CAICOS ISLANDS';

    case TUVALU = 'TUVALU';

    case UGANDA = 'UGANDA';

    case UKRAINE = 'UKRAINE';

    case UNITED_ARAB_EMIRATES = 'UNITED ARAB EMIRATES';

    case UNITED_KINGDOM = 'UNITED KINGDOM';

    case UNITED_STATES = 'UNITED STATES';

    case URUGUAY = 'URUGUAY';

    case UZBEKISTAN = 'UZBEKISTAN';

    case VANUATU = 'VANUATU';

    case VENEZUELA = 'VENEZUELA';

    case VIET_NAM = 'VIET NAM';

    case WESTERN_SAHARA = 'WESTERN SAHARA';

    case YEMEN = 'YEMEN';

    case ZAMBIA = 'ZAMBIA';

    case ZIMBABWE = 'ZIMBABWE';

}


