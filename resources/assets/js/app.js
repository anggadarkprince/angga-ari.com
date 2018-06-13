
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('jquery.easing');
require('prismjs');
require('magnific-popup');
require('ckeditor');
require('jquery-validation');
require('croppie');
require('selectize');
require('jquery-lazy');
window.mixitup = require('mixitup');
window.Mustache = require('mustache');
window.Sortable = require('sortablejs');

import LibraryInitializer from './library.js'
LibraryInitializer.init();

import UploadAvatar from './scripts/avatar.js'
UploadAvatar.init();