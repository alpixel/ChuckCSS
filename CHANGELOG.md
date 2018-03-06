# ChuckCSS Changelog

## 3.1.0
* Updated : FontAwesome CDN with v5.0.8
* Updated : Normalize.css v8.0.0
* Fixed : 
    * FontAwesome 5 compatibilities (Free version) with "far", "fal", "fas", "fab" class

## 3.0.8
* Added : add CDN libraries in front.less file (normalize, font-awesome, ionicons)
* Removed : 
	* Bower support (NPM only) and bower.json file
	* Vagrantfile (ChuckCSS works with Homestead now)
	* normalize.less file in core folder (Normalize is now included width CDN in front.less file)
	
## 3.0.7
* Added : new settings for links/buttons :
    * @links-btn-bw => default border-width
    * @links-btn-pa => default padding
* Fixed : force border-radius for input[type="checkbox"] to 2px without taking the @input-br var

## 3.0.6
* Removed : 'modal-close' class on closure button (modal) and replaced by 'data-close-modal' attribute
* Changed : chuckcss.js file for modals closures ('.modal-close' selector removed)

## 3.0.5
* Added: 'data-fullscreen' attribute for modals
* Changed: 'data-close-modal' attribute binded by chuckcss.js file for closing modals

## 3.0.4
* Fixed: add 'cc-X-xs' class for tiny screens in grids container

## 3.0.1
* Fixed: add an overflow hidden to html element when modal is opened
* Added: `cc-responsive` for tables

## 3.0.0
* Changed: breakpoints, mobile-first. v3.0.0 is not compatible with lower versions.
