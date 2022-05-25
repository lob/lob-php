# # UsComponents

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primary_number** | **string** | The numeric or alphanumeric part of an address preceding the street name. Often the house, building, or PO Box number. | [optional]
**street_predirection** | **string** | Geographic direction preceding a street name (&#x60;N&#x60;, &#x60;S&#x60;, &#x60;E&#x60;, &#x60;W&#x60;, &#x60;NE&#x60;, &#x60;SW&#x60;, &#x60;SE&#x60;, &#x60;NW&#x60;). | [optional]
**street_name** | **string** | The name of the street. | [optional]
**street_suffix** | **string** | The standard USPS abbreviation for the street suffix (&#x60;ST&#x60;, &#x60;AVE&#x60;, &#x60;BLVD&#x60;, etc). | [optional]
**street_postdirection** | **string** | Geographic direction following a street name (&#x60;N&#x60;, &#x60;S&#x60;, &#x60;E&#x60;, &#x60;W&#x60;, &#x60;NE&#x60;, &#x60;SW&#x60;, &#x60;SE&#x60;, &#x60;NW&#x60;). | [optional]
**secondary_designator** | **string** | The standard USPS abbreviation describing the &#x60;components[secondary_number]&#x60; (&#x60;STE&#x60;, &#x60;APT&#x60;, &#x60;BLDG&#x60;, etc). | [optional]
**secondary_number** | **string** | Number of the apartment/unit/etc. | [optional]
**pmb_designator** | **string** | Designator of a [CMRA-authorized](https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency) private mailbox. | [optional]
**pmb_number** | **string** | Number of a [CMRA-authorized](https://en.wikipedia.org/wiki/Commercial_mail_receiving_agency) private mailbox. | [optional]
**extra_secondary_designator** | **string** | An extra (often unnecessary) secondary designator provided with the input address. | [optional]
**extra_secondary_number** | **string** | An extra (often unnecessary) secondary number provided with the input address. | [optional]
**city** | **string** |  | [optional]
**state** | **string** | The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) two letter code for the state. | [optional]
**zip_code** | **string** | The 5-digit ZIP code | [optional]
**zip_code_plus_4** | **string** |  | [optional]
**zip_code_type** | [**\OpenAPI\Client\Model\ZipCodeType**](ZipCodeType.md) |  | [optional]
**delivery_point_barcode** | **string** | A 12-digit identifier that uniquely identifies a delivery point (location where mail can be sent and received). It consists of the 5-digit ZIP code (&#x60;zip_code&#x60;), 4-digit ZIP+4 add-on (&#x60;zip_code_plus_4&#x60;), 2-digit delivery point, and 1-digit delivery point check digit. | [optional]
**address_type** | **string** | Uses USPS&#39;s [Residential Delivery Indicator (RDI)](https://www.usps.com/nationalpremieraccounts/rdi.htm) to identify whether an address is classified as residential or business. Possible values are: * &#x60;residential&#x60; –– The address is residential or a PO Box. * &#x60;commercial&#x60; –– The address is commercial. * &#x60;&#39;&#39;&#x60; –– Not enough information provided to be determined. | [optional]
**record_type** | **string** | A description of the type of address. Populated if a DPV match is made (&#x60;deliverability_analysis[dpv_confirmation]&#x60; is &#x60;Y&#x60;, &#x60;S&#x60;, or &#x60;D&#x60;). For more detailed information about each record type, see [US Verification Details](#tag/US-Verification-Types). | [optional]
**default_building_address** | **bool** | Designates whether or not the address is the default address for a building containing multiple delivery points. | [optional]
**county** | **string** | County name of the address city. | [optional]
**county_fips** | **string** | A 5-digit [FIPS county code](https://en.wikipedia.org/wiki/FIPS_county_code) which uniquely identifies &#x60;components[county]&#x60;. It consists of a 2-digit state code and a 3-digit county code. | [optional]
**carrier_route** | **string** | A 4-character code assigned to a mail delivery route within a ZIP code. | [optional]
**carrier_route_type** | **string** | The type of &#x60;components[carrier_route]&#x60;. For more detailed information about each carrier route type, see [US Verification Details](#tag/US-Verification-Types). | [optional]
**latitude** | **float** | A positive or negative decimal indicating the geographic latitude of the address, specifying the north-to-south position of a location. This should be used with &#x60;longitude&#x60; to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is &#x60;AA&#x60;, &#x60;AE&#x60;, or &#x60;AP&#x60;). | [optional]
**longitude** | **float** | A positive or negative decimal indicating the geographic longitude of the address, specifying the north-to-south position of a location. This should be used with &#x60;latitude&#x60; to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is &#x60;AA&#x60;, &#x60;AE&#x60;, or &#x60;AP&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
