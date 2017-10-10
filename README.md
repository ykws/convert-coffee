# Convert CoffeeScript to JavaScript and insert in HTML

## Installation

* Node
* CoffeeScript
* Composer

## Use

```
$ php convert-coffee [html_file] [coffee_file] [script_id]
```

## Example

Convert `test.coffee` to JavaScript and insert at script id `#coffee` in `index.html`

```
$ php convert-coffee index.html test.coffee '#coffee'
```
