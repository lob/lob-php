# Code Snippets

## Address Api

### Retrieve
```bash
curl https://api.lob.com/v1/addresses/adr_fa85158b26c3eb7c \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\AddressesApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("adr_fa85158b26c3eb7c");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/addresses/adr_43769b47aed248c2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\AddressesApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->delete("adr_43769b47aed248c2");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### Create
```bash
curl https://api.lob.com/v1/addresses \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Harry - Office" \
  -d "name=Harry Zhang" \
  -d "company=Lob" \
  -d "email=harry@lob.com" \
  -d "phone=5555555555" \
  -d "address_line1=210 King St" \
  -d "address_line2=# 6100" \
  -d "address_city=San Francisco" \
  -d "address_state=CA" \
  -d "address_zip=94107" \
  -d "address_country=US" \
```

```php
$apiInstance = new OpenAPI\Client\Api\AddressesApi($config, new GuzzleHttp\Client());
$address_editable = new OpenAPI\Client\Model\AddressEditable(
  array(
    "description"     => "Harry - Office",
    "name"     => "Harry Zhang",
    "company"     => "Lob",
    "email"     => "harry@lob.com",
    "phone"     => "5555555555",
    "address_line1"     => "210 King St",
    "address_line2"     => "# 6100",
    "address_city"     => "San Francisco",
    "address_state"     => "CA",
    "address_zip"     => "94107",
    "address_country"     => "US",
  )
);

try {
    $result = $apiInstance->create($address_editable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### List
```bash
curl -X GET "https://api.lob.com/v1/addresses?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\AddressesApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```






































## Postcards Api

### Retrieve
```bash
curl https://api.lob.com/v1/postcards/psc_5c002b86ce47537a \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\PostcardsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("psc_5c002b86ce47537a");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/postcards/psc_5c002b86ce47537a" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\PostcardsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->cancel("psc_5c002b86ce47537a");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### Create
```bash
curl https://api.lob.com/v1/postcards \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Demo Postcard job" \
  -d "from=adr_210a8d4b0b76d77b" \
  --data-urlencode "front=<html style='padding: 1in; font-size: 50;'>Front HTML for {{name}}</html>" \
  --data-urlencode "back=<html style='padding: 1in; font-size: 20;'>Back HTML for {{name}}</html>" \
  -d "to[name]=Harry Zhang" \
  -d "to[address_line1]=210 King St" \
  -d "to[address_line2]=# 6100" \
  -d "to[address_city]=San Francisco" \
  -d "to[address_state]=CA" \
  -d "to[address_zip]=94107" \
  -d "merge_variables[name]=Harry" \
```

```php
$to = new OpenAPI\Client\Model\AddressEditable(
  array(
    "name"     => "Harry Zhang",
    "address_line1"     => "210 King St",
    "address_line2"     => "# 6100",
    "address_city"     => "San Francisco",
    "address_state"     => "CA",
    "address_zip"     => "94107",
  )
);

$merge_variables = new stdClass;
$merge_variables->name = "Harry";

$apiInstance = new OpenAPI\Client\Api\PostcardsApi($config, new GuzzleHttp\Client());
$postcard_editable = new OpenAPI\Client\Model\PostcardEditable(
  array(
    "description"     => "Demo Postcard job",
    "from"     => "adr_210a8d4b0b76d77b",
    "front"     => "<html style='padding: 1in; font-size: 50;'>Front HTML for {{name}}</html>",
    "back"     => "<html style='padding: 1in; font-size: 20;'>Back HTML for {{name}}</html>",
    "to"     => $to,
    "merge_variables"     => $merge_variables,
  )
);

try {
    $result = $apiInstance->create($postcard_editable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### List
```bash
curl -X GET "https://api.lob.com/v1/postcards?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\PostcardsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



## SelfMailers Api

### Retrieve
```bash
curl https://api.lob.com/v1/self_mailers/sfm_8ffbe811dea49dcf \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\SelfMailersApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("sfm_8ffbe811dea49dcf");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/self_mailers/sfm_8ffbe811dea49dcf" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\SelfMailersApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->delete("sfm_8ffbe811dea49dcf");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### Create
```bash
curl https://api.lob.com/v1/self_mailers \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Demo Self Mailer job" \
  -d "from=adr_210a8d4b0b76d77b" \
  --data-urlencode "inside=<html style='padding: 1in; font-size: 50;'>Inside HTML for {{name}}</html>" \
  --data-urlencode "outside=<html style='padding: 1in; font-size: 20;'>Outside HTML for {{name}}</html>" \
  -d "to[name]=Harry Zhang" \
  -d "to[address_line1]=210 King St" \
  -d "to[address_line2]=# 6100" \
  -d "to[address_city]=San Francisco" \
  -d "to[address_state]=CA" \
  -d "to[address_zip]=94107" \
  -d "merge_variables[name]=Harry" \
```

```php
$to = new OpenAPI\Client\Model\AddressEditable(
  array(
    "name"     => "Harry Zhang",
    "address_line1"     => "210 King St",
    "address_line2"     => "# 6100",
    "address_city"     => "San Francisco",
    "address_state"     => "CA",
    "address_zip"     => "94107",
  )
);

$merge_variables = new stdClass;
$merge_variables->name = "Harry";

$apiInstance = new OpenAPI\Client\Api\SelfMailersApi($config, new GuzzleHttp\Client());
$self_mailer_editable = new OpenAPI\Client\Model\SelfMailerEditable(
  array(
    "description"     => "Demo Self Mailer job",
    "from"     => "adr_210a8d4b0b76d77b",
    "inside"     => "<html style='padding: 1in; font-size: 50;'>Inside HTML for {{name}}</html>",
    "outside"     => "<html style='padding: 1in; font-size: 20;'>Outside HTML for {{name}}</html>",
    "to"     => $to,
    "merge_variables"     => $merge_variables,
  )
);

try {
    $result = $apiInstance->create($self_mailer_editable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### List
```bash
curl -X GET "https://api.lob.com/v1/self_mailers?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\SelfMailersApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



## Letters Api

### Retrieve
```bash
curl https://api.lob.com/v1/letters/ltr_4868c3b754655f90 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\LettersApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("ltr_4868c3b754655f90");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/letters/ltr_4868c3b754655f90" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\LettersApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->cancel("ltr_4868c3b754655f90");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### Create
```bash
curl https://api.lob.com/v1/letters \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Demo Letter" \
  -d "from=adr_210a8d4b0b76d77b" \
  --data-urlencode "file=<html style='padding-top: 3in; margin: .5in;'>HTML Letter for {{name}}</html>" \
  -d "color=true" \
  -d "to[name]=Harry Zhang" \
  -d "to[address_line1]=210 King St" \
  -d "to[address_line2]=# 6100" \
  -d "to[address_city]=San Francisco" \
  -d "to[address_state]=CA" \
  -d "to[address_zip]=94107" \
  -d "merge_variables[name]=Harry" \
  -d "cards[]=card_c51ae96f5cebf3e"
  -d "cards[]=card_thingy"
```

```php
$to = new OpenAPI\Client\Model\AddressEditable(
  array(
    "name"     => "Harry Zhang",
    "address_line1"     => "210 King St",
    "address_line2"     => "# 6100",
    "address_city"     => "San Francisco",
    "address_state"     => "CA",
    "address_zip"     => "94107",
  )
);

$merge_variables = new stdClass;
$merge_variables->name = "Harry";

$apiInstance = new OpenAPI\Client\Api\LettersApi($config, new GuzzleHttp\Client());
$letter_editable = new OpenAPI\Client\Model\LetterEditable(
  array(
    "description"     => "Demo Letter",
    "from"     => "adr_210a8d4b0b76d77b",
    "file"     => "<html style='padding-top: 3in; margin: .5in;'>HTML Letter for {{name}}</html>",
    "color"     => "true",
    "to"     => $to,
    "merge_variables"     => $merge_variables,
    "cards"     => array(
      "card_c51ae96f5cebf3e",
      "card_thingy",
    ),
  )
);

try {
    $result = $apiInstance->create($letter_editable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### List
```bash
curl -X GET "https://api.lob.com/v1/letters?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\LettersApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



## Checks Api

### Retrieve
```bash
curl https://api.lob.com/v1/checks/chk_534f10783683daa0 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\ChecksApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("chk_534f10783683daa0");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/checks/chk_534f10783683daa0" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\ChecksApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->cancel("chk_534f10783683daa0");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### Create
```bash
curl https://api.lob.com/v1/checks \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Demo Check" \
  -d "bank_account=bank_8cad8df5354d33f" \
  -d "amount=22.5" \
  -d "memo=rent" \
  --data-urlencode "logo=https://s3-us-west-2.amazonaws.com/public.lob.com/assets/check_logo.png" \
  --data-urlencode "check_bottom=<h1 style='padding-top:4in;'>Demo Check for {{name}}</h1>" \
  -d "from=adr_210a8d4b0b76d77b" \
  -d "to[name]=Harry Zhang" \
  -d "to[address_line1]=210 King St" \
  -d "to[address_line2]=# 6100" \
  -d "to[address_city]=San Francisco" \
  -d "to[address_state]=CA" \
  -d "to[address_zip]=94107" \
  -d "merge_variables[name]=Harry" \
```

```php
$to = new OpenAPI\Client\Model\AddressEditable(
  array(
    "name"     => "Harry Zhang",
    "address_line1"     => "210 King St",
    "address_line2"     => "# 6100",
    "address_city"     => "San Francisco",
    "address_state"     => "CA",
    "address_zip"     => "94107",
  )
);

$merge_variables = new stdClass;
$merge_variables->name = "Harry";

$apiInstance = new OpenAPI\Client\Api\ChecksApi($config, new GuzzleHttp\Client());
$check_editable = new OpenAPI\Client\Model\CheckEditable(
  array(
    "description"     => "Demo Check",
    "bank_account"     => "bank_8cad8df5354d33f",
    "amount"     => "22.5",
    "memo"     => "rent",
    "logo"     => "https://s3-us-west-2.amazonaws.com/public.lob.com/assets/check_logo.png",
    "check_bottom"     => "<h1 style='padding-top:4in;'>Demo Check for {{name}}</h1>",
    "from"     => "adr_210a8d4b0b76d77b",
    "to"     => $to,
    "merge_variables"     => $merge_variables,
  )
);

try {
    $result = $apiInstance->create($check_editable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### List
```bash
curl -X GET "https://api.lob.com/v1/checks?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\ChecksApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



## BankAccounts Api

### Retrieve
```bash
curl https://api.lob.com/v1/bank_accounts/bank_8cad8df5354d33f \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\BankAccountsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("bank_8cad8df5354d33f");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/bank_accounts/bank_3e64d9904356b20" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\BankAccountsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->delete("bank_3e64d9904356b20");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```


### List
```bash
curl -X GET "https://api.lob.com/v1/bank_accounts?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\BankAccountsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```




### Verify
```bash
curl https://api.lob.com/v1/bank_accounts/bank_dfceb4a2a05b57e/verify \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \ 
  -d "amounts[]=25" \ 
  -d "amounts[]=63" \ 
```

```php
$apiInstance = new OpenAPI\Client\Api\BankAccountsApi($config, new GuzzleHttp\Client());

$bankVerify = new OpenAPI\Client\Model\BankAccountVerify();
$bankVerify->setAmounts([
  25,
  63,
]);

try {
    $result = $apiInstance->verify(
      "bank_dfceb4a2a05b57e", $bankVerify
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```






### Create
```bash
curl https://api.lob.com/v1/bank_accounts \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Test Bank Account" \
  -d "routing_number=322271627" \
  -d "account_number=123456789" \
  -d "signatory=John Doe" \
  -d "account_type=company" \
```

```php
$apiInstance = new OpenAPI\Client\Api\BankAccountsApi($config, new GuzzleHttp\Client());
$bank_account_writable = new OpenAPI\Client\Model\BankAccountWritable(
  array(
    "description"     => "Test Bank Account",
    "routing_number"     => "322271627",
    "account_number"     => "123456789",
    "signatory"     => "John Doe",
    "account_type"     => "company",
  )
);

try {
    $result = $apiInstance->create($bank_account_writable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```


## Templates Api

### Retrieve
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplatesApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("tmpl_c94e83ca2cd5121");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/templates/tmpl_df934eeda694203" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplatesApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->delete("tmpl_df934eeda694203");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```


### List
```bash
curl -X GET "https://api.lob.com/v1/templates?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplatesApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Update
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Updated description" \
  -d "published_version=vrsn_362184d96d9b0c9"
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplatesApi($config, new GuzzleHttp\Client());

$templateUpdate = new OpenAPI\Client\Model\TemplateUpdate(array(
    "description" =>  "Updated description",
    "published_version" =>  "vrsn_362184d96d9b0c9"
));

try {
    $result = $apiInstance->update("tmpl_c94e83ca2cd5121", $templateUpdate);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### Create
```bash
curl https://api.lob.com/v1/templates \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Test Template" \
  --data-urlencode "html=<html>HTML for {{name}}</html>" \
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplatesApi($config, new GuzzleHttp\Client());
$template_writable = new OpenAPI\Client\Model\TemplateWritable(
  array(
    "description"     => "Test Template",
    "html"     => "<html>HTML for {{name}}</html>",
  )
);

try {
    $result = $apiInstance->create($template_writable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```


## TemplateVersions Api

### Retrieve
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121/versions/vrsn_534e339882d2282 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->get("tmpl_c94e83ca2cd5121", "vrsn_534e339882d2282");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Delete
```bash
curl -X DELETE "https://api.lob.com/v1/templates/tmpl_4aa14648113e45b/versions/vrsn_534e339882d2282" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->delete("tmpl_4aa14648113e45b", "vrsn_534e339882d2282");
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```


### List
```bash
curl -X GET "https://api.lob.com/v1/templates/tmpl_dadaaf7b76c9f25/versions?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi($config, new GuzzleHttp\Client());

try {
    $result = $apiInstance->list(
      tmpl_dadaaf7b76c9f25, // tmplId 
      2, // limit 
    );
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```







### Update
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121/versions/vrsn_534e339882d2282 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Updated description"
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi($config, new GuzzleHttp\Client());

$templateVersionUpdate = new OpenAPI\Client\Model\TemplateUpdate(array(
    "description" =>  "Updated template version"
));

try {
    $result = $apiInstance->update("tmpl_c94e83ca2cd5121", "vrsn_534e339882d2282", $templateVersionUpdate);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```



### Create
```bash
curl https://api.lob.com/v1/templates/tmpl_4aa14648113e45b/versions \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Second Version" \
  --data-urlencode "html=<html>Second HTML for {{name}}</html>" \
```

```php
$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi($config, new GuzzleHttp\Client());
$template_version_writable = new OpenAPI\Client\Model\TemplateVersionWritable(
  array(
    "description"     => "Second Version",
    "html"     => "<html>Second HTML for {{name}}</html>",
  )
);

try {
    $result = $apiInstance->create("tmpl_4aa14648113e45b", $template_version_writable);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```


## UsVerifications Api

### Bulk Verify
```bash
curl https://api.lob.com/v1/bulk/us_verifications \
  -u <YOUR LIVE API KEY>: \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --data-urlencode 'addresses[0][primary_line]=210 King Street' \
  --data-urlencode 'addresses[0][city]=San Francisco' \
  --data-urlencode 'addresses[0][state]=CA' \
  --data-urlencode 'addresses[0][zip_code]=94017' \
  --data-urlencode 'addresses[1][primary_line]=185 BERRY ST STE 6600' \
  --data-urlencode 'addresses[1][city]=SAN FRANCISCO' \
  --data-urlencode 'addresses[1][state]=CA' \
  --data-urlencode 'addresses[1][zip_code]=94017' \
```

```php

$verificationData0 = new OpenAPI\Client\Model\MultipleComponents(array( 
  'primary_line'     => '210 King Street',
  'city'     => 'San Francisco',
  'state'     => 'CA',
  'zip_code'     => '94017',
));

$verificationData1 = new OpenAPI\Client\Model\MultipleComponents(array( 
  'primary_line'     => '185 BERRY ST STE 6600',
  'city'     => 'SAN FRANCISCO',
  'state'     => 'CA',
  'zip_code'     => '94017',
));

$addressList = new OpenAPI\Client\Model\MultipleComponentsList(array(
  'addresses'     => [
    $verificationData0,
    $verificationData1,
  ]
));

try {
    $result = $apiInstance->verifyBulk($addressList);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```

### Single Verify
```bash
curl https://api.lob.com/v1/us_verifications \
  -u <YOUR_LIVE_API_KEY>: \
  -d "primary_line=210 King Street" \
  -d "city=San Francisco" \
  -d "state=CA" \
  -d "zip_code=94017" \
```

```php
$apiInstance = new OpenAPI\Client\Api\UsVerificationsApi($config, new GuzzleHttp\Client());

$verificationData = new OpenAPI\Client\Model\UsVerificationsWritable(array(
  'primary_line'     => '210 King Street',
  'city'     => 'San Francisco',
  'state'     => 'CA',
  'zip_code'     => '94017',
));

try {
    $result = $apiInstance->verifySingle($verificationData);
        print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```

## IntlAutocompletion Api

### IntlAutocompletion
```bash
curl https://api.lob.com/v1/intl_autocompletions \
  -u <YOUR_LIVE_API_KEY>: \
  -d "address_prefix=340 Wat" \
  -d "city=Summerside" \
  -d "state=Prince Edward Island" \
  -d "zip_code=C1N 1C4" \
  -d "country=CA" \
```

```php
$apiInstance = new OpenAPI\Client\Api\IntlAutocompletionsApi($config, new GuzzleHttp\Client());

$autoCompletionData = new OpenAPI\Client\Model\IntlAutocompletionsWritable(array(
    "address_prefix" =>  "340 Wat",
    "city" =>  "Summerside",
    "state" =>  "Prince Edward Island",
    "zip_code" =>  "C1N 1C4",
    "country" =>  "CA",
));

try {
    $result = $apiInstance->autocomplete($autoCompletionData);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```

## ZipLookups Api

### ZipLookup
```bash
curl https://api.lob.com/v1/us_zip_lookups \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "zip_code=94107"
```

```php
$apiInstance = new OpenAPI\Client\Api\ZipLookupsApi($config, new GuzzleHttp\Client());

$zipRequest = new OpenAPI\Client\Model\ZipEditable(array(
    "zip_code"  =>  '94107'
));

try {
    $result = $apiInstance->lookup($zipRequest);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```

## Reverse Geocode Lookups Api

### Reverse Geocode Lookup
```bash
curl https://api.lob.com/v1/us_reverse_geocode_lookups \
  -u <YOUR_LIVE_API_KEY>: \
  -d "latitude=37.7749" \
  -d "longitude=122.4194" \
```

```php
$apiInstance = new OpenAPI\Client\Api\ReverseGeocodeLookupsApi($config, new GuzzleHttp\Client());

$coordinates = new OpenAPI\Client\Model\Location(array(
    "latitude" =>  "37.7749",
    "longitude" =>  "122.4194",
));

try {
    $result = $apiInstance->lookup($coordinates);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```

### Reverse Geocode Lookup
```bash
curl https://api.lob.com/v1/us_reverse_geocode_lookups \
  -u <YOUR_LIVE_API_KEY>: \
```

```php
$apiInstance = new OpenAPI\Client\Api\ReverseGeocodeLookupsApi($config, new GuzzleHttp\Client());

$coordinates = new OpenAPI\Client\Model\Location(array(
));

try {
    $result = $apiInstance->lookup($coordinates);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```

## USAutoCompletions Api

### Autocomplete
```bash
curl https://api.lob.com/v1/us_autocompletions \
  -u <YOUR_LIVE_API_KEY>: \
  -d "address_prefix=185 B" \
  -d "city=San Francisco" \
  -d "state=CA" \
  -d "zip_code=94017" \
```

```php
$apiInstance = new OpenAPI\Client\Api\UsAutocompletionsApi($config, new GuzzleHttp\Client());

$autocompletionData = new OpenAPI\Client\Model\UsAutocompletionsWritable(array(
    "address_prefix" =>  "185 B",
    "city" =>  "San Francisco",
    "state" =>  "CA",
    "zip_code" =>  "94017",
));

try {
    $result = $apiInstance->autocomplete($autocompletionData);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}
```
