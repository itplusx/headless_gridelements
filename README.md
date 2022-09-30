# headless_gridelements
This extension makes it possible to use [EXT:gridelements](https://github.com/CodersCare/gridelements) with
[EXT:headless](https://github.com/TYPO3-Initiatives/headless/).

## Installation

### Installation with [`composer`](https://getcomposer.org/) (recommended)
```shell script
$ composer require itplusx/headless-gridelements
```

### Installation with the TYPO3 Extension Manager
see: [Extension Management](https://docs.typo3.org/m/typo3/reference-coreapi/11.5/en-us/ExtensionArchitecture/HowTo/ExtensionManagement.html#extension-management)

## Requirements and compatibility
| Requirement                                                | Version  |
|------------------------------------------------------------|----------|
| PHP                                                        | 7.4, 8.0 |
| TYPO3                                                      | 11.5     |
| [Headless](https://github.com/TYPO3-Headless/headless)     | 3        |
| [Gridelements](https://github.com/CodersCare/gridelements) | 11       |

## Usage
After a successful install just include the TypoScript of this package and you are ready to go.

**NOTE:  
Including the original Gridelements TypoScript might break the JSON output. Therefore it is not recommended to do so. 
The TypoScript of `headless_gridelements` is enough.**

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

## Contribution
Any help on this project is very welcome! May it be as code contribution or just an idea for improvement. But we would
like to ask you to follow some rules:

- **Issues:**  
  When adding issues please always describe the bug/feature/task as detailed as possible. Only providing a title is not
  enough. Please use issue templates.
- **Commits:**  
  Our team is following the [Conventional Commits](https://www.conventionalcommits.org/). We would like ask you stick to
  these rules whenever you want to contribute.
- **Pull Requests:**  
  Before you submit a PR please create an issue first and link it to the pull request or at least add a PR description 
  with detailed information about what this PR does. Otherwise we are not able to decide if this PR is worth going into
  the main branch.

---

<p align="center">
  <a href="https://itplusx.de" target="_blank" rel="noopener noreferrer">
    <img width="350" src="https://itplusx.de/banners/created-by-X-with-passion.svg" alt="ITplusX - Internetagentur & Systemhaus">
  </a>
</p>

---
