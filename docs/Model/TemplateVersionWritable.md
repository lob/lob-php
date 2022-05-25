# # TemplateVersionWritable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | An internal description that identifies this resource. Must be no longer than 255 characters. | [optional]
**html** | **string** | An HTML string of less than 100,000 characters to be used as the &#x60;published_version&#x60; of this template. See [here](#section/HTML-Examples) for guidance on designing HTML templates. Please see endpoint specific documentation for any other product-specific HTML details: - [Postcards](#operation/postcard_create) - &#x60;front&#x60; and &#x60;back&#x60; - [Self Mailers](#operation/self_mailer_create) - &#x60;inside&#x60; and &#x60;outside&#x60; - [Letters](#operation/letter_create) - &#x60;file&#x60; - [Checks](#operation/check_create) - &#x60;check_bottom&#x60; and &#x60;attachment&#x60; - [Cards](#operation/card_create) - &#x60;front&#x60; and &#x60;back&#x60;  If there is a syntax error with your variable names within your HTML, then an error will be thrown, e.g. using a &#x60;{{#users}}&#x60; opening tag without the corresponding closing tag &#x60;{{/users}}&#x60;. | [optional]
**engine** | [**\OpenAPI\Client\Model\EngineHtml**](EngineHtml.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
