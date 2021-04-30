# PHP Examples

Here we have put together a hand full of PHP examples to help get you started. Please read through the official [API Documentation](../README.md#api-documentation) to get a complete sense of what to expect from each endpoint. As always, feel free to [contact us](https://lob.com/support) directly if you have any questions on implementation.

## Getting started
Before running these examples make sure you are in the `examples/` directory.
```
cd examples/
```

## Examples

### Create postcards from CSV

An example showing how to dynamically create postcards from a CSV using HTML, a custom font, merge variables, and Lob's [Postcard API](https://lob.com/services/postcards).

In order to run the program enter:

```
cd create_postcards_from_csv/
LOB_API_KEY=<YOUR_API_KEY_HERE> php create_postcards_from_csv.php input.csv
```

### Verify US addresses from CSV

An example showing how to verify US addresses from a CSV using Lob's [US Verification API](https://lob.com/docs/php#us_verifications).

Please note that if you are running this with a Test API Key, the verification API will always return [a dummy address](https://lob.com/docs#us_verifications_create).

```
cd verify_addresses_from_csv/
LOB_API_KEY=<YOUR_API_KEY_HERE> php verify.php input.csv
```

### Create a check
```
LOB_API_KEY=<YOUR_API_KEY_HERE> php create_check.php
```

### Create a letter
```
LOB_API_KEY=<YOUR_API_KEY_HERE> php create_letter.php
```

### Create a postcard
```
LOB_API_KEY=<YOUR_API_KEY_HERE> php create_postcard.php
```

### Create a self mailer
```
LOB_API_KEY=<YOUR_API_KEY_HERE> php create_self_mailer.php
```
