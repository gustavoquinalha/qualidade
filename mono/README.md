# Monolog.js - v1.1.2
#####A simple, light weight, full screen and flexible modal written in full Vanilla JavaScript - no dependencies !

## What is Monolog.js ?
It's a simple library written in full Vanilla Javascript that allow you to manipulate full screen flexible modals. It has no dependencies (except Javascript enabled).

## How to install Monolog.js ?
Easy. With npm, you just have to type : 

`npm install monolog.js`

Don't forget the `--save` parameter if you want to save it to you package.json.

## How to use Monolog.js ?
Just need to import monolog.js (and monolog.css if you want some basics formatting) to your HTML :

`<script src="/path/to/monolog.js/dist/monolog.js"></script>`

`<link rel="stylesheet" href="/path/to/monolog.js/dist/monolog.css">`

Then to create your own modal : `var myModal = new Monolog(params)`

## List of features available
### Parameters
Monolog take one parameter (a simple object). Here the list of all parameters available :

| Param      | Type           | Description                                                                                    |
| -----------|----------------| -----------------------------------------------------------------------------------------------|
| content    | string         | The modal content. Plain text or HTML.                                                         |
| loader     | boolean (false)| Set true to show a loader when modal is displayed. Default false.                              |
| close      | boolean (true) | Set true to show the close cross in top right corner. Default true.                            |
| onOpening  | function       | Function to execute when the modal starts to open. You can access to the modal via 'this'.     |
| onOpened   | function       | Function to execute when the modal finished to open. You can access to the modal via 'this'.   |
| onClosing  | function       | Function to execute when the modal starts to close. You can access to the modal via 'this'.    |
| onClosed   | function       | Function to execute when the modal finished to close. You can access to the modal via 'this'.  |

### Methods
You can access to :

| Method                 | Description                                                 |
| ---------------------|---------------------------------------------------------------|
| show(time)           | Show the modal with fade.                                     |
| hide(time)           | Hide the modal with fade.                                     |
| close()              | Hide the modal with same fade that has been used for open it. |
| setContent(html)     | Define a new content.                                         |

##Example
For a complete example, see the [example.html](https://github.com/soywod/monolog/blob/master/example.html)