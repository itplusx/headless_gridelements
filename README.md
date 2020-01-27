# headless_gridelements
This extension extends EXT:gridelements (https://gitlab.com/coderscare/gridelements) to be used with EXT:headless (https://github.com/TYPO3-Initiatives/headless/)

NOTE: This is a work in progress!

## Installation
Since this extension isn't publicly available at this point you have to add the following object to the "repositories" array in your `composer.json`:
```json
{
  "type": "vcs",
  "url": "https://github.com/itplusx/headless_gridelements.git"
}
```

After that you can install it via:
```shell script
$ composer require itplusx/headless-gridelements ^1.0@dev
```

## Usage
Just include the TypoScript of this package after the gridelements TypoScript and you are ready to go.

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