# Regenerate Client

Run the following snippet to regenerate the client

```
docker run --rm --user 1000:1000 -v ${PWD}:/local openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/soxyl/saferpay-openapi/master/openapi.yaml \
    -g php \
    -o /local \
    -c /local/config.yaml
```
