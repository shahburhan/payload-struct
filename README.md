# payload-struct
A simple utility to create payloads in an easy object oriented construct and transform it into different structures viz. array, objects, string(json).

### Usage:

Create a new PayloadStruct instance

```$payload = new PayloadStruct;```

Set Items:
```
$payload->setName('Jane Doe');
$payload->setEmail('jane@example.com');
$payload->setPhone('1234567890');
$payload->setWebsite('example.com');
```
You can also chain the setters:
```
$payload->setName('Jane Doe')
  ->setEmail('jane@example.com')
  ->setPhone('1234567890')
  ->setWebsite('example.com');
```  
Or use assignment notation:
```
$payload->language = 'English';
```

And get the final payload in different structures:
```
$payload->getArray();
```
Output: 
```
Array
(
    [name] => Jane Doe
    [email] => jane@example.com
    [phone] => 1234567890
    [website] => example.com
    [language] => English
)
```
---
```
$payload->getJson();
```
Output:
```
{"name":"Jane Doe","email":"jane@example.com","phone":"1234567890","website":"example.com","language":"English"}
```
---
```
$payload->getObject();
```
Output:
```
stdClass Object
(
    [name] => Jane Doe
    [email] => jane@example.com
    [phone] => 1234567890
    [website] => example.com
    [language] => English
)
```
--- 
You can also access individual items with getter notation or direct property access notation as follows:

```
$payload->getName(); //Outputs Jane Doe
$payload->name; //Outputs Jane Doe
``` 
