# NeosCMS EEL helper to encode strings to base64

## TL;DR

1. Install the package: `composer require onedrop/base64`


### Encode
``` javascript
prop = 'Bier'
prop.@process.encode = ${Onedrop.Base64.encode(value)} // Qmllcg==
```

### Decode
``` javascript
prop = 'Qmllcg=='
prop.@process.decode = ${Onedrop.Base64.decode(value)} // Bier
```
