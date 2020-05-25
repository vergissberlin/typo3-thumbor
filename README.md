# thumbor for TYPO3 CMS

[![Latest Stable Version](https://poser.pugx.org/vergissberlin/typo3-thumbor/v)](//packagist.org/packages/vergissberlin/typo3-thumbor) [![Total Downloads](https://poser.pugx.org/vergissberlin/typo3-thumbor/downloads)](//packagist.org/packages/vergissberlin/typo3-thumbor) [![Latest Unstable Version](https://poser.pugx.org/vergissberlin/typo3-thumbor/v/unstable)](//packagist.org/packages/vergissberlin/typo3-thumbor) [![License](https://poser.pugx.org/vergissberlin/typo3-thumbor/license)](//packagist.org/packages/vergissberlin/typo3-thumbor)
[![StyleCI](https://styleci.io/repos/266265891/shield?branch=master)](https://styleci.io/repos/266265891/)
[![Latest Stable Version](https://poser.pugx.org/vergissberlin/typo3-thumbor/v/stable)](https://packagist.org/packages/vergissberlin/typo3-thumbor)


TYPO3 CMS extension with fluid image view helpers to use thumbor as cropping service. It speeds up your thumbnail generation and adds some AI features like face recognition. \nTo use it, you have to start the service separately.

## Attributes

### tb:img

| key           | default   | description            |
| ------------- | --------- | ---------------------- |
| id            | _null_    | Identifier             |
| alt           | _null_    | Alternative text       |
| class         | _null_    | CSS class              |
| style         | _null_    | Inline css style       |
| lang          | _null_    | language               |
| title         | _null_    | Image title            |

## Usage

Include viehelper namespace

```html
<html xmlns:tb="Vergissberlin\Thumbor\ViewHelpers" data-namespace-typo3-fluid="true">
[…]
</html>
```

### Internal images

Images from TYPO3 CMS data storage.

#### TAG

```html
<tb:img uid="123" width="200" height="200" />
```

```html
{tb:img(uid: 123)}
```

#### URL

```html
<tb:img.url uid="123" width="200" height="200" />
```

```html
{tb:img.url(uid:123,width:200,height:200,alt:'Beautiful content')}
```

### External images

Images from external sources.

#### Tag

```html
<tb:external src="https://picsum.photos/1200/800" width="200" height="200" alt="Beautiful content" />
```

```html
{tb:external(src:'https://picsum.photos/200/300',width:200,height:200,alt:'Beautiful content')}
```
