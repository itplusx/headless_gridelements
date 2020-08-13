# headless_gridelements
This extension makes it possible to use [EXT:gridelements](https://gitlab.com/coderscare/gridelements) with
[EXT:headless](https://github.com/TYPO3-Initiatives/headless/).

It simply 

## Installation
```shell script
$ composer require itplusx/headless-gridelements
```

## Usage
After a successful install just include the TypoScript of this package after the gridelements TypoScript and you are
ready to go.

## Example json output
```json
{
  "id": 14,
  "pid": 8,
  "type": "structured_content",
  "colPos": 0,
  "categories": "",
  "appearance": {
    "layout": "default",
    "frameClass": "default",
    "spaceBefore": "",
    "spaceAfter": ""
  },
  "content": {
    "header": "",
    "subheader": "",
    "headerLayout": 0,
    "headerPosition": "",
    "headerLink": "",
    "structure": {
      "layout": "25-25-25-25",
      "rows": [
        {
          "columns": [
            {
              "config": {
                "name": "25%",
                "colPos": 401
              },
              "elements": [
                {"id": 123, "pid": 321, "type": "{CType}", ...},
                {...}
              ]
            },
            {
              "config": {
                "name": "25%",
                "colPos": 402
              },
              "elements": [
                {"id": 123, "pid": 321, "type": "{CType}", ...},
                {...}
              ]
            },
            {
              "config": {
                "name": "25%",
                "colPos": 403
              },
              "elements": [
                {"id": 123, "pid": 321, "type": "{CType}", ...},
                {...}
              ]
            },
            {
              "config": {
                "name": "25%",
                "colPos": 404
              },
              "elements": [
                {"id": 123, "pid": 321, "type": "{CType}", ...},
                {...}
              ]
            }
          ]
        }
      ]
    }
  }
}
```
