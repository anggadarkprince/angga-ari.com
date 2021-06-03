
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('magnific-popup');
require('jquery-lazy');
require('jquery-validation');
window.mixitup = require('mixitup');
window.ScrollReveal = require('scrollreveal');

import BackToTop from './scripts/backToTop'
BackToTop();

import Cookie from './scripts/cookie'
Cookie();

import Validation from './scripts/validation'
Validation();

import Landing from './scripts/landing'
Landing();

import Misc from './scripts/misc'
Misc();