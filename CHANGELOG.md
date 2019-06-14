# ChuckCSS Changelog

## 4.0.0 & 4.0.1
* Added : 
    * Light version of ChuckCSS. The ChuckCSS Light is the same as ChuckCSS, but without :
        * grids
        * tabs
        * badges
        * purple, yellow, orange colors
        * outlined buttons when using `cc-bg-color`
    * Titles : 
        * Font-size definitions regarding screen width (mobile-first)
        * Color definition for each Hn element (in `settings.less` file)
    * Modals : 
        * When modal is opened, add a paddinr-right on HTML element to prevent the loss of the scrollbar

* NEW :
    * Loader : Sonar loader

* REMOVED : 
    * Loaders : Dots and Caterpillar loaders (spinner loader kept)
    * Messages : class `.message` does not exists anymore. Replaced by `.alert` class

* Changed :
    * Increase `sup` and `sub` font-size from 12px to 13px (inscrease Lighthouse accessibility score)
    * ChuckCSS vars is now defined using as maps of values in `settings.less` file

## 3.6.1 & 3.6.2
* Changed : 
    * Rename `core` folder to `main` folder

## 3.6.0
* REMOVED : 
    * 4 default colors : blue, purple, yellow, orange (descrease ChuckCSS weight)
    * CDN Normalize.css. Normalize is now included as an internal flie in `core` folder (inscrease "Google Lighthouse" performance)
* Added :
    * `showLazyImg` animation (smoothly fade appearances) for images loaded with a lazy loader library (Lozad.js for exemple)

## 3.5.1
* Changed : 
    * class prefix (`cc`) is set as a variable into `settings.less` file. You can now change it as you want.

## 3.5.0
* Changed : 
    * Rename `fontawesome.less` with `icons.less` (in `core` folder)
    * Replace class `modal-open` by attribute `data-modal="modal_id"` on buttons who fired modals
* Added :
	* `@modals-zi` and `@modals-zi-active` variables in `settings.less` for modals z-index property
	* `@icon-mal` and `@icon-mar` variables in `settings.less` for icons margin right and left when used with `icon-left` and `icon-right` class
* NEW :
	* Add openings effects for modals, binded with a data attribute : `data-open="slideInLeft"` and `data-open="slideInRight"`

## 3.4.0
* Changed : 
    * Badges default background-color (now `#3A3A3A`)
    * class `cc-w-{int}` with `int` from 0 to 100 (+1 increment)
    * Default font-family applied onto the body : now native font stack 
    * Alerts skins
    * Bindable attribute on alerts buttons in order to close alerts
* REMOVED :
	* class `cc-w-quarter`, `cc-w-half`, `cc-w-threequarter` (remplaced by class `cc-w-25`, `cc-w-50`, `cc-w-75`)
	* Masonry layouts
	* Messages (class `message message-{type}` are now the same as class `alert alert-{type}`)
* Fixed :
	* class `cc-bg-{color}` and `cc-{color}` onto `th` and `td` elements

## 3.3.1
* Added : 
    * Responsive texts aligments : class `cc-txt-{aligment}-{breakpoint}` (mobile-first respected)
    * Responsive padding and margin for block elements are completed : class `cc-pa-{breakpoint}`, `cc-ma-{breakpoint}`, `cc-pa{side}-{breakpoint}`, `cc-ma{side}-{breakpoint}` (mobile-first respected)

## 3.3.0
* Changed : changed default font-size for titles (Hn) in settings file (now in `rem` units)
* Added : 
    * HTML elements `nav`, `strong`, `em`, `code`, `small` are now concerned by `cc-bg-{color}` and `cc-{color}` class
    * Responsive font-weight : class `cc-fw-{number}-{breakpoint}` (mobile-first respected)
    * Responsive font-size : class `cc-fs-{number}-{breakpoint}` (mobile-first respected)
    * Responsive width for block elements : class `cc-w-{number}-{breakpoint}` (mobile-first respected)
    * Responsive padding and margin for block elements : class `cc-pa{direction}-{number}-{breakpoint}` (mobile-first respected)

## 3.2.3
* Added: class `cc-dotted` for dotted lists

## 3.2.2
* Added :
    * New mixin for Font-Weight generator
    * class `cc-fw-{number}` for font-weight (from 100 to 900 with increments of 100)
* REMOVED :
    * `@blockquotes-ic` var in settings.less file
* Fixed :
    * HTMl links - `a:not(.btn)` - are white written if they are included into a bg-colorized parent.

## 3.2.1
* Fixed font-size generator mixin in generator.less file

## 3.2.0
* Added : 
    * New mixin for Font-Size generator
    * class `cc-fs-{number}` for font-size (from 0rem to 10rem with increments of 0.1rem)
* REMOVED :
    * FontAwesome and Ionicons CDN in front.less (you have to include FA and/or Ionicons by yourself)
    * mixins : `fa()`, `io()`, `uppercase()` in functions.less
    * class `cc-quoted` for blockquotes
* Updated : Normalize.css v8.0.0

## 3.1.2
* Added : 
    * New mixins for FontAwesome icons generator, regarding the font-weight (fontAwesome 5)

## 3.1.1
* REMOVED : 
    * class `fa-` applied to another element but i
    * mixin `generateIcons` in generator.less

## 3.1.0
* Updated : FontAwesome CDN with v5.0.8
* Updated : Normalize.css v7.0.0
* Fixed : 
    * FontAwesome 5 compatibilities (Free version) with class `far`, `fal`, `fas`, `fab`

## 3.0.8
* Added : add CDN libraries in front.less file (normalize, font-awesome, ionicons)
* REMOVED : 
	* Bower support (NPM only) and bower.json file
	* Vagrantfile (ChuckCSS works with Homestead now)
	* normalize.less file in core folder (Normalize is now included width CDN in front.less file)
	
## 3.0.7
* Added : new settings for links/buttons :
    * `@links-btn-bw` => default border-width
    * `@links-btn-pa` => default padding
* Fixed : force border-radius for `input[type="checkbox"]` to 2px without taking the `@input-br` var

## 3.0.6
* REMOVED : class `modal-close` on closure button (modal) and replaced by `data-close-modal` attribute
* Changed : chuckcss.js file for modals closures (`.modal-close` selector REMOVED)

## 3.0.5
* Added: `data-fullscreen` attribute for modals
* Changed: `data-close-modal` attribute binded by chuckcss.js file for closing modals

## 3.0.4
* Fixed: add class `cc-{number}-xs` for tiny screens in grids container

## 3.0.1
* Fixed: add an overflow hidden to html element when modal is opened
* Added: `cc-responsive` for tables

## 3.0.0
* Changed: breakpoints, mobile-first. v3.0.0 is not compatible with lower versions.
