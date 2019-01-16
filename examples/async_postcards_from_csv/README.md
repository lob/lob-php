# Async Postcards From CSV

This is an example of using the Lob PHP library to concurrently create
postcards from a CSV. This script specifically uses
[Amp](https://github.com/amphp/amp) to achieve non-blocking concurrency, but
any library can be used.

## Running

Since this example has dependencies outside of those included in the Lob
library, this should be treated as a standalone example with its own set of
dependencies. This means they need to be installed before running it. Once
they've been installed, you can run `index.php` directly. **Make sure you pass
in your own Lob API key as an environment variable so that it can show up on
your own dashboard.** You can get your API key from [your settings
page](https://dashboard.lob.com/#/settings/keys).

```sh
$ composer install
$ LOB_API_KEY=test_XXX php index.php
```
