<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
<meta name="theme-color" content="#ffffff">
<meta name="msvalidate.01" content="BAFEFCC2D225DD9706515B2162FF1D71" />
<meta name="p:domain_verify" content="79f1949805c90e9d8e15f318af06c4f9"/>
<title>@yield('title')</title>
<!-- Meta Keys -->
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />

@yield('preload')


@yield('extrahead')

<style>
/*!

 =========================================================
 * Now UI Kit Pro - v1.2.2
 =========================================================

 * Product Page: https://www.creative-tim.com/product/now-ui-kit-pro
 * Copyright 2018 Creative Tim (http://www.creative-tim.com)

 * Designed by www.invisionapp.com Coded by www.creative-tim.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

/*     brand Colors              */

/*      light colors         */

/* ========================================================================
 * bootstrap-switch - v3.3.2
 * http://www.bootstrap-switch.org
 * ========================================================================
 * Copyright 2012-2013 Mattia Larentis
 * http://www.apache.org/licenses/LICENSE-2.0
 */

.bootstrap-switch {
  display: inline-block;
  direction: ltr;
  cursor: pointer;
  border-radius: 30px;
  border: 0;
  position: relative;
  text-align: left;
  margin-bottom: 10px;
  line-height: 8px;
  width: 59px !important;
  height: 22px;
  outline: none;
  z-index: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  vertical-align: middle;
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  margin-right: 20px;
  background: rgba(44, 44, 44, 0.2);
}

.bootstrap-switch .bootstrap-switch-container {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  top: 0;
  height: 22px;
  border-radius: 4px;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  width: 100px !important;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off,
.bootstrap-switch .bootstrap-switch-label {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  cursor: pointer;
  display: inline-block !important;
  height: 100%;
  color: #fff;
  padding: 6px 12px;
  font-size: 11px;
  text-indent: -5px;
  line-height: 15px;
  -webkit-transition: 0.25s ease-out;
  transition: 0.25s ease-out;
}

.bootstrap-switch .bootstrap-switch-handle-on,
.bootstrap-switch .bootstrap-switch-handle-off {
  text-align: center;
  z-index: 1;
  float: left;
  line-height: 11px;
  width: 50% !important;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-brown,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-brown {
  color: #fff;
  background: #dc3741;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-blue,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-blue {
  color: #fff;
  background: #37DCD2;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-green,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-green {
  color: #fff;
  background: #18ce0f;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-orange,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-orange {
  background: #FFB236;
  color: #fff;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-red,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-red {
  color: #fff;
  background: #FF3636;
}

.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default {
  color: #fff;
}

.bootstrap-switch .bootstrap-switch-label {
  text-align: center;
  z-index: 100;
  color: #333333;
  background: #ffffff;
  width: 22px !important;
  height: 22px !important;
  margin: 0px -11px;
  border-radius: 20px;
  position: absolute;
  float: left;
  top: 0;
  left: 50%;
  padding: 0;
  -webkit-box-shadow: 0 1px 11px rgba(0, 0, 0, 0.25);
          box-shadow: 0 1px 11px rgba(0, 0, 0, 0.25);
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label {
  background-color: rgba(23, 23, 23, 0.4);
}

.bootstrap-switch.bootstrap-switch-on:hover .bootstrap-switch-label {
  width: 27px !important;
  margin-left: -16px;
}

.bootstrap-switch.bootstrap-switch-off:hover .bootstrap-switch-label {
  width: 27px !important;
  margin-left: -11px;
}

.bootstrap-switch .bootstrap-switch-handle-on {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}

.bootstrap-switch .bootstrap-switch-handle-off {
  text-indent: 6px;
}

.bootstrap-switch input[type='radio'],
.bootstrap-switch input[type='checkbox'] {
  position: absolute !important;
  top: 0;
  left: 0;
  opacity: 0;
  filter: alpha(opacity=0);
  z-index: -1;
}

.bootstrap-switch input[type='radio'].form-control,
.bootstrap-switch input[type='checkbox'].form-control {
  height: auto;
}

.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}

.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
  padding: 6px 16px;
  font-size: 18px;
  line-height: 1.33;
}

.bootstrap-switch.bootstrap-switch-disabled,
.bootstrap-switch.bootstrap-switch-readonly,
.bootstrap-switch.bootstrap-switch-indeterminate {
  cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off,
.bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label,
.bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label {
  opacity: 0.5;
  filter: alpha(opacity=50);
  cursor: default !important;
}

.bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
  -webkit-transition: margin-left 0.5s;
  transition: margin-left 0.5s;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-container {
  margin-left: -2px !important;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-container {
  margin-left: -39px !important;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label:before {
  background-color: #FFFFFF;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-red ~ .bootstrap-switch-default {
  background-color: #FF3636;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-orange ~ .bootstrap-switch-default {
  background-color: #FFB236;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-green ~ .bootstrap-switch-default {
  background-color: #18ce0f;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-brown ~ .bootstrap-switch-default {
  background-color: #dc3741;
}

.bootstrap-switch.bootstrap-switch-on .bootstrap-switch-blue ~ .bootstrap-switch-default {
  background-color: #37DCD2;
}

.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-red,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-brown,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-blue,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-orange,
.bootstrap-switch.bootstrap-switch-off .bootstrap-switch-green {
  background-color: #E3E3E3;
}

.bootstrap-switch-off .bootstrap-switch-handle-on {
  opacity: 0;
}

.bootstrap-switch-on .bootstrap-switch-handle-off {
  opacity: 0;
}

/*! nouislider - 11.1.0 - 2018-04-02 11:18:13 */

/* Functional styling;
 * These styles are required for noUiSlider to function.
 * You don't need to change these rules to apply your design.
 */

.noUi-target,
.noUi-target * {
  -webkit-touch-callout: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-user-select: none;
  -ms-touch-action: none;
  touch-action: none;
  -ms-user-select: none;
  -moz-user-select: none;
  user-select: none;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.noUi-target {
  position: relative;
  direction: ltr;
}

.noUi-base,
.noUi-connects {
  width: 100%;
  height: 100%;
  position: relative;
  z-index: 1;
}

/* Wrapper for all connect elements.
 */

.noUi-connects {
  overflow: hidden;
  z-index: 0;
}

.noUi-connect,
.noUi-origin {
  will-change: transform;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
}

/* Offset direction
 */

html:not([dir="rtl"]) .noUi-horizontal .noUi-origin {
  left: auto;
  right: 0;
}

/* Give origins 0 height/width so they don't interfere with clicking the
 * connect elements.
 */

.noUi-vertical .noUi-origin {
  width: 0;
}

.noUi-horizontal .noUi-origin {
  height: 0;
}

.noUi-handle {
  position: absolute;
}

.noUi-state-tap .noUi-connect,
.noUi-state-tap .noUi-origin {
  -webkit-transition: transform 0.3s;
  -webkit-transition: -webkit-transform 0.3s;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
}

.noUi-state-drag * {
  cursor: inherit !important;
}

/* Slider size and handle placement;
 */

.noUi-horizontal {
  height: 1px;
}

.noUi-horizontal .noUi-handle {
  border-radius: 50%;
  background-color: #FFFFFF;
  -webkit-box-shadow: 0 1px 13px 0 rgba(0, 0, 0, 0.2);
          box-shadow: 0 1px 13px 0 rgba(0, 0, 0, 0.2);
  height: 15px;
  width: 15px;
  cursor: pointer;
  outline: 0;
}

.noUi-horizontal .noUi-handle:before,
.noUi-horizontal .noUi-handle:after {
  display: none;
}

.noUi-vertical {
  width: 18px;
}

.noUi-vertical .noUi-handle {
  width: 28px;
  height: 34px;
  left: -6px;
  top: -17px;
}

html:not([dir="rtl"]) .noUi-horizontal .noUi-handle {
  right: -10px;
  top: -7px;
  left: auto;
}

/* Styling;
 * Giving the connect element a border radius causes issues with using transform: scale
 */

.noUi-target {
  background-color: rgba(182, 182, 182, 0.3);
  border-radius: 3px;
}

.noUi-connects {
  border-radius: 3px;
}

.noUi-connect {
  background: #3FB8AF;
}

/* Handles and cursors;
 */

.noUi-draggable {
  cursor: ew-resize;
}

.noUi-vertical .noUi-draggable {
  cursor: ns-resize;
}

.noUi-handle {
  border-radius: 3px;
  background: #FFF;
  cursor: default;
  -webkit-transition: 300ms ease 0s;
  -moz-transition: 300ms ease 0s;
  -ms-transition: 300ms ease 0s;
  -o-transform: 300ms ease 0s;
  transition: 300ms ease 0s;
}

.noUi-active {
  -webkit-transform: scale3d(1.5, 1.5, 1);
  transform: scale3d(1.5, 1.5, 1);
}

/* Handle stripes;
 */

.noUi-handle:before,
.noUi-handle:after {
  content: "";
  display: block;
  position: absolute;
  height: 14px;
  width: 1px;
  background: #E8E7E6;
  left: 14px;
  top: 6px;
}

.noUi-handle:after {
  left: 17px;
}

.noUi-vertical .noUi-handle:before,
.noUi-vertical .noUi-handle:after {
  width: 14px;
  height: 1px;
  left: 6px;
  top: 14px;
}

.noUi-vertical .noUi-handle:after {
  top: 17px;
}

/* Disabled state;
 */

[disabled] .noUi-connect {
  background: #B8B8B8;
}

[disabled].noUi-target,
[disabled].noUi-handle,
[disabled] .noUi-handle {
  cursor: not-allowed;
}

/* Base;
 *
 */

.noUi-pips,
.noUi-pips * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.noUi-pips {
  position: absolute;
  color: #999;
}

/* Values;
 *
 */

.noUi-value {
  position: absolute;
  white-space: nowrap;
  text-align: center;
}

.noUi-value-sub {
  color: #ccc;
  font-size: 10px;
}

/* Markings;
 *
 */

.noUi-marker {
  position: absolute;
  background: #CCC;
}

.noUi-marker-sub {
  background: #AAA;
}

.noUi-marker-large {
  background: #AAA;
}

/* Horizontal layout;
 *
 */

.noUi-pips-horizontal {
  padding: 10px 0;
  height: 80px;
  top: 100%;
  left: 0;
  width: 100%;
}

.noUi-value-horizontal {
  -webkit-transform: translate(-50%, 50%);
  transform: translate(-50%, 50%);
}

.noUi-rtl .noUi-value-horizontal {
  -webkit-transform: translate(50%, 50%);
  transform: translate(50%, 50%);
}

.noUi-marker-horizontal.noUi-marker {
  margin-left: -1px;
  width: 2px;
  height: 5px;
}

.noUi-marker-horizontal.noUi-marker-sub {
  height: 10px;
}

.noUi-marker-horizontal.noUi-marker-large {
  height: 15px;
}

/* Vertical layout;
 *
 */

.noUi-pips-vertical {
  padding: 0 10px;
  height: 100%;
  top: 0;
  left: 100%;
}

.noUi-value-vertical {
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%, 0);
  padding-left: 25px;
}

.noUi-rtl .noUi-value-vertical {
  -webkit-transform: translate(0, 50%);
  transform: translate(0, 50%);
}

.noUi-marker-vertical.noUi-marker {
  width: 5px;
  height: 2px;
  margin-top: -1px;
}

.noUi-marker-vertical.noUi-marker-sub {
  width: 10px;
}

.noUi-marker-vertical.noUi-marker-large {
  width: 15px;
}

.noUi-tooltip {
  display: block;
  position: absolute;
  border: 1px solid #D9D9D9;
  border-radius: 3px;
  background: #fff;
  color: #000;
  padding: 5px;
  text-align: center;
  white-space: nowrap;
}

.noUi-horizontal .noUi-tooltip {
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
  left: 50%;
  bottom: 120%;
}

.noUi-vertical .noUi-tooltip {
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  top: 50%;
  right: 120%;
}

.slider .noUi-connect {
  background-color: #888888;
}

.slider.slider-neutral .noUi-connect {
  background-color: #FFFFFF;
}

.slider.slider-neutral.noUi-target {
  background-color: rgba(255, 255, 255, 0.3);
}

.slider.slider-neutral .noUi-handle {
  background-color: #FFFFFF;
}

.slider.slider-primary .noUi-connect,
.slider.slider-primary.noUi-connect {
  background-color: #dc3741;
}

.slider.slider-primary.noUi-target {
  background-color: rgba(220, 55, 65, 0.3);
}

.slider.slider-primary .noUi-handle {
  background-color: #dc3741;
}

.slider.slider-info .noUi-connect,
.slider.slider-info.noUi-connect {
  background-color: #37DCD2;
}

.slider.slider-info.noUi-target {
  background-color: rgba(55, 220, 210, 0.3);
}

.slider.slider-info .noUi-handle {
  background-color: #37DCD2;
}

.slider.slider-success .noUi-connect,
.slider.slider-success.noUi-connect {
  background-color: #18ce0f;
}

.slider.slider-success.noUi-target {
  background-color: rgba(24, 206, 15, 0.3);
}

.slider.slider-success .noUi-handle {
  background-color: #18ce0f;
}

.slider.slider-warning .noUi-connect,
.slider.slider-warning.noUi-connect {
  background-color: #FFB236;
}

.slider.slider-warning.noUi-target {
  background-color: rgba(255, 178, 54, 0.3);
}

.slider.slider-warning .noUi-handle {
  background-color: #FFB236;
}

.slider.slider-danger .noUi-connect,
.slider.slider-danger.noUi-connect {
  background-color: #FF3636;
}

.slider.slider-danger.noUi-target {
  background-color: rgba(255, 54, 54, 0.3);
}

.slider.slider-danger .noUi-handle {
  background-color: #FF3636;
}

/*!
 * Bootstrap-select v1.12.2 (http://silviomoreto.github.io/bootstrap-select)
 *
 * Copyright 2013-2017 bootstrap-select
 * Licensed under MIT (https://github.com/silviomoreto/bootstrap-select/blob/master/LICENSE)
 */

select.bs-select-hidden,
select.selectpicker {
  display: none !important;
}

.bootstrap-select {
  min-width: 100%;
}

.bootstrap-select .btn {
  margin-top: 10px;
  margin-bottom: 0;
}

.bootstrap-select > .dropdown-toggle {
  width: 100%;
  padding-right: 25px;
  z-index: 1;
}

.bootstrap-select > .dropdown-toggle:after {
  margin-left: -10px;
}

.bootstrap-select > select {
  position: absolute !important;
  bottom: 0;
  left: 50%;
  display: block !important;
  width: 0.5px !important;
  height: 100% !important;
  padding: 0 !important;
  opacity: 0 !important;
  border: none;
}

.bootstrap-select > select.mobile-device {
  top: 0;
  left: 0;
  display: block !important;
  width: 100% !important;
  z-index: 2;
}

.has-error .bootstrap-select .dropdown-toggle,
.error .bootstrap-select .dropdown-toggle {
  border-color: #b94a48;
}

.bootstrap-select.fit-width {
  width: auto !important;
}

.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 100%;
}

.bootstrap-select.form-control {
  margin-bottom: 0;
  padding: 0;
  border: none;
}

.bootstrap-select.form-control:not([class*="col-"]) {
  width: 100%;
}

.bootstrap-select.btn-block {
  width: 100%;
}

.bootstrap-select.form-control.input-group-btn {
  z-index: auto;
}

.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}

.bootstrap-select.btn-group:not(.input-group-btn),
.bootstrap-select.btn-group[class*="col-"] {
  float: none;
  display: inline-block;
  margin-left: 0;
}

.bootstrap-select.btn-group.dropdown-menu-right,
.bootstrap-select.btn-group[class*="col-"].dropdown-menu-right,
.row .bootstrap-select.btn-group[class*="col-"].dropdown-menu-right {
  float: right;
}

.form-inline .bootstrap-select.btn-group,
.form-horizontal .bootstrap-select.btn-group,
.form-group .bootstrap-select.btn-group {
  margin-bottom: 0;
}

.form-group-lg .bootstrap-select.btn-group.form-control,
.form-group-sm .bootstrap-select.btn-group.form-control {
  padding: 0;
}

.form-group-lg .bootstrap-select.btn-group.form-control .dropdown-toggle,
.form-group-sm .bootstrap-select.btn-group.form-control .dropdown-toggle {
  height: 100%;
  font-size: inherit;
  line-height: inherit;
  border-radius: inherit;
}

.form-inline .bootstrap-select.btn-group .form-control {
  width: 100%;
}

.bootstrap-select.btn-group.disabled,
.bootstrap-select.btn-group > .disabled {
  cursor: not-allowed;
}

.bootstrap-select.btn-group.disabled:focus,
.bootstrap-select.btn-group > .disabled:focus {
  outline: none !important;
}

.bootstrap-select.btn-group.bs-container {
  position: absolute;
  height: 0 !important;
  padding: 0 !important;
}

.bootstrap-select.btn-group.bs-container .dropdown-menu {
  z-index: 1060;
}

.bootstrap-select.btn-group .dropdown-toggle .filter-option {
  display: inline-block;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
  text-align: left;
}

.bootstrap-select.btn-group .dropdown-toggle .caret {
  display: none;
}

.bootstrap-select.btn-group[class*="col-"] .dropdown-toggle {
  width: 100%;
}

.bootstrap-select.btn-group .dropdown-menu {
  min-width: 100%;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  max-height: 265px !important;
}

.bootstrap-select.btn-group .dropdown-menu.inner {
  position: static;
  float: none;
  border: 0;
  padding: 0;
  margin: 0;
  border-radius: 0;
  display: block;
  max-height: 245px !important;
  overflow-y: scroll;
  -ms-overflow-style: auto;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.bootstrap-select.btn-group .dropdown-menu li {
  position: relative;
}

.bootstrap-select.btn-group .dropdown-menu li.active small {
  color: #fff;
}

.bootstrap-select.btn-group .dropdown-menu li.disabled a {
  cursor: not-allowed;
}

.bootstrap-select.btn-group .dropdown-menu li a {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.bootstrap-select.btn-group .dropdown-menu li a.opt {
  position: relative;
  padding-left: 2.25em;
}

.bootstrap-select.btn-group .dropdown-menu li a span.check-mark {
  display: none;
}

.bootstrap-select.btn-group .dropdown-menu li a span.text {
  display: inline-block;
}

.bootstrap-select.btn-group .dropdown-menu li small {
  padding-left: 0.5em;
}

.bootstrap-select.btn-group .dropdown-menu .notify {
  position: absolute;
  bottom: 5px;
  width: 96%;
  margin: 0 2%;
  min-height: 26px;
  padding: 3px 5px;
  background: #f5f5f5;
  border: 1px solid #e3e3e3;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  pointer-events: none;
  opacity: 0.9;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.bootstrap-select.btn-group .no-results {
  padding: 3px;
  background: #f5f5f5;
  margin: 0 5px;
  white-space: nowrap;
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
  position: static;
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
  position: static;
  top: auto;
  margin-top: -1px;
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a span.check-mark {
  position: absolute;
  display: inline-block;
  right: 15px;
  margin-top: 5px;
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
  margin-right: 34px;
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle {
  z-index: 1061;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
  content: '';
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid rgba(204, 204, 204, 0.2);
  position: absolute;
  bottom: -4px;
  left: 9px;
  display: none;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid white;
  position: absolute;
  bottom: -4px;
  left: 10px;
  display: none;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
  bottom: auto;
  top: -3px;
  border-top: 7px solid rgba(204, 204, 204, 0.2);
  border-bottom: 0;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
  bottom: auto;
  top: -3px;
  border-top: 6px solid white;
  border-bottom: 0;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
  right: 12px;
  left: auto;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
  right: 13px;
  left: auto;
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before,
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {
  display: block;
}

.bs-searchbox,
.bs-actionsbox,
.bs-donebutton {
  padding: 4px 8px;
}

.bs-actionsbox {
  width: 100%;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.bs-actionsbox .btn-group button {
  width: 50%;
}

.bs-donebutton {
  float: left;
  width: 100%;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.bs-donebutton .btn-group button {
  width: 100%;
}

.bs-searchbox + .bs-actionsbox {
  padding: 0 8px 4px;
}

.bs-searchbox .form-control {
  margin-bottom: 0;
  width: 100%;
  float: none;
}

.bootstrap-select .dropdown-menu.inner li a {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  display: block;
  outline: none;
  color: #292b2c;
}

.bootstrap-select .dropdown-menu.inner li.disabled a {
  color: rgba(182, 182, 182, 0.6);
}

.bootstrap-select .dropdown-menu.inner li.disabled a:hover,
.bootstrap-select .dropdown-menu.inner li.disabled a:focus {
  background-color: transparent;
}

.bootstrap-select .dropdown-menu.open {
  overflow: visible !important;
}

/*
 * bootstrap-tagsinput v0.8.0
 *
 */

.bootstrap-tagsinput {
  display: inline-block;
  padding: 4px 6px;
  max-width: 100%;
  line-height: 22px;
  background-color: transparent !important;
}

.bootstrap-tagsinput input {
  border: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: none;
  background-color: transparent;
  margin: 0;
  width: 74px;
  max-width: inherit;
}

.bootstrap-tagsinput input:focus {
  border: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.bootstrap-tagsinput.form-control input::-moz-placeholder {
  color: #777;
  opacity: 1;
}

.bootstrap-tagsinput.form-control input:-ms-input-placeholder,
.bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
  color: #777;
}

.bootstrap-tagsinput .tag {
  cursor: pointer;
  margin: 5px 3px 5px 0;
  position: relative;
  padding: 3px 8px;
  border-radius: 12px;
  color: #FFFFFF;
  font-weight: 500;
  font-size: 0.75em;
  text-transform: uppercase;
  display: inline-block;
  line-height: 1.5em;
  padding-left: 0.8em;
}

.bootstrap-tagsinput .tag:hover {
  padding-right: 22px;
}

.bootstrap-tagsinput .tag:hover [data-role="remove"] {
  opacity: 1;
  padding-right: 4px;
}

.bootstrap-tagsinput .tag [data-role="remove"] {
  cursor: pointer;
  position: absolute;
  top: 3px;
  right: 0px;
  opacity: 0;
  background-color: transparent;
}

.bootstrap-tagsinput .tag [data-role="remove"]:after {
  font-family: 'Nucleo Outline';
  content: "\EA53";
  padding: 0px 2px;
}

.bootstrap-tagsinput.badge-primary .badge {
  background-color: #dc3741;
  color: #FFFFFF;
  border: none;
}

.bootstrap-tagsinput.badge-primary .badge .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.badge-primary .badge .tagsinput-add {
  color: #dc3741;
}

.bootstrap-tagsinput.badge-info .badge {
  background-color: #37DCD2;
  color: #FFFFFF;
  border: none;
}

.bootstrap-tagsinput.badge-info .badge .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.badge-info .badge .tagsinput-add {
  color: #37DCD2;
}

.bootstrap-tagsinput.badge-success .badge {
  background-color: #18ce0f;
  color: #FFFFFF;
  border: none;
}

.bootstrap-tagsinput.badge-success .badge .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.badge-success .badge .tagsinput-add {
  color: #18ce0f;
}

.bootstrap-tagsinput.badge-warning .badge {
  background-color: #FFB236;
  color: #FFFFFF;
  border: none;
}

.bootstrap-tagsinput.badge-warning .badge .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.badge-warning .badge .tagsinput-add {
  color: #FFB236;
}

.bootstrap-tagsinput.badge-danger .badge {
  background-color: #FF3636;
  color: #FFFFFF;
  border: none;
}

.bootstrap-tagsinput.badge-danger .badge .tagsinput-remove-link {
  color: #FFFFFF;
}

.bootstrap-tagsinput.badge-danger .badge .tagsinput-add {
  color: #FF3636;
}

.btn-file {
  position: relative;
  overflow: hidden;
  vertical-align: middle;
}

.btn-file > input {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  margin: 0;
  font-size: 23px;
  cursor: pointer;
  filter: alpha(opacity=0);
  opacity: 0;
  direction: ltr;
}

.fileinput {
  display: inline-block;
  margin-bottom: 9px;
}

.fileinput .form-control {
  display: inline-block;
  padding-top: 7px;
  padding-bottom: 5px;
  margin-bottom: 0;
  vertical-align: middle;
  cursor: text;
}

.fileinput .thumbnail {
  display: inline-block;
  margin-bottom: 10px;
  overflow: hidden;
  text-align: center;
  vertical-align: middle;
  max-width: 360px;
}

.fileinput .thumbnail.img-circle {
  border-radius: 50%;
  max-width: 100px;
}

.fileinput .thumbnail > img {
  max-height: 100%;
}

.fileinput .btn {
  vertical-align: middle;
}

.fileinput-exists .fileinput-new,
.fileinput-new .fileinput-exists {
  display: none;
}

.fileinput-inline .fileinput-controls {
  display: inline;
}

.fileinput-filename {
  display: inline-block;
  overflow: hidden;
  vertical-align: middle;
}

.form-control .fileinput-filename {
  vertical-align: bottom;
}

.fileinput.input-group {
  display: table;
}

.fileinput.input-group > * {
  position: relative;
  z-index: 2;
}

.fileinput.input-group > .btn-file {
  z-index: 1;
}

.fileinput-new.input-group .btn-file,
.fileinput-new .input-group .btn-file {
  border-radius: 0 4px 4px 0;
}

.fileinput-new.input-group .btn-file.btn-xs,
.fileinput-new .input-group .btn-file.btn-xs,
.fileinput-new.input-group .btn-file.btn-sm,
.fileinput-new .input-group .btn-file.btn-sm {
  border-radius: 0 3px 3px 0;
}

.fileinput-new.input-group .btn-file.btn-lg,
.fileinput-new .input-group .btn-file.btn-lg {
  border-radius: 0 6px 6px 0;
}

.form-group.has-warning .fileinput .fileinput-preview {
  color: #FFB236;
}

.form-group.has-warning .fileinput .thumbnail {
  border-color: #FFB236;
}

.form-group.has-error .fileinput .fileinput-preview {
  color: #FF3636;
}

.form-group.has-error .fileinput .thumbnail {
  border-color: #FF3636;
}

.form-group.has-success .fileinput .fileinput-preview {
  color: #18ce0f;
}

.form-group.has-success .fileinput .thumbnail {
  border-color: #18ce0f;
}

.input-group-text:not(:first-child) {
  border-left: 0;
}

.thumbnail {
  border: 0 none;
  border-radius: 0;
  padding: 0;
}

.sr-only,
.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after,
.bootstrap-datetimepicker-widget .btn[data-action="today"]::after,
.bootstrap-datetimepicker-widget .picker-switch::after,
.bootstrap-datetimepicker-widget table th.prev::after,
.bootstrap-datetimepicker-widget table th.next::after {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}

.bootstrap-datetimepicker-widget {
  list-style: none;
}

.bootstrap-datetimepicker-widget a .btn:hover {
  background-color: transparent;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
  padding: 8px 6px;
  width: 254px;
  max-width: 254px;
}

.bootstrap-datetimepicker-widget.dropdown-menu .now-ui-icons {
  opacity: 1;
  top: 2px;
}

@media (min-width: 768px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}

@media (min-width: 992px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}

@media (min-width: 1200px) {
  .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
    width: 38em;
  }
}

.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: -5px;
  left: 10px;
  right: auto;
  color: #FFFFFF;
  border-bottom: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top:before {
  display: none;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top:after {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: auto;
  bottom: -6px;
  right: auto;
  left: 10px;
  color: #FFFFFF;
  border-top: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:before {
  left: auto;
  right: 6px;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:after {
  left: auto;
  right: 7px;
}

.bootstrap-datetimepicker-widget .list-unstyled {
  margin: 0;
}

.bootstrap-datetimepicker-widget a[data-action] {
  padding: 0;
  border-width: 0;
  color: #66615B;
  background-color: transparent;
}

.bootstrap-datetimepicker-widget a[data-action="togglePicker"],
.bootstrap-datetimepicker-widget a[data-action="togglePicker"]:hover {
  color: #dc3741;
}

.bootstrap-datetimepicker-widget a[data-action]:hover {
  background-color: transparent;
}

.bootstrap-datetimepicker-widget a[data-action]:active {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.bootstrap-datetimepicker-widget .timepicker-hour,
.bootstrap-datetimepicker-widget .timepicker-minute,
.bootstrap-datetimepicker-widget .timepicker-second {
  width: 40px;
  height: 40px;
  line-height: 40px;
  font-weight: 300;
  font-size: 1.5em;
  margin: 3px;
  border-radius: 50%;
}

.bootstrap-datetimepicker-widget button[data-action] {
  width: 38px;
  background-color: #dc3741;
  height: 38px;
  padding: 0;
  -webkit-box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
}

.bootstrap-datetimepicker-widget .btn {
  margin: 0 !important;
}

.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after {
  content: "Increment Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after {
  content: "Increment Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after {
  content: "Decrement Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after {
  content: "Decrement Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after {
  content: "Show Hours";
}

.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after {
  content: "Show Minutes";
}

.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after {
  content: "Toggle AM/PM";
}

.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after {
  content: "Clear the picker";
}

.bootstrap-datetimepicker-widget .btn[data-action="today"]::after {
  content: "Set the date to today";
}

.bootstrap-datetimepicker-widget .picker-switch {
  text-align: center;
  border-radius: 3px;
  color: #dc3741;
}

.bootstrap-datetimepicker-widget .picker-switch::after {
  content: "Toggle Date and Time Screens";
}

.bootstrap-datetimepicker-widget .picker-switch td {
  padding: 0;
  margin: 0;
  height: auto;
  width: auto;
  line-height: inherit;
}

.bootstrap-datetimepicker-widget .picker-switch td span {
  line-height: 2.5;
  height: 2.5em;
  width: 100%;
  border-radius: 3px;
  margin: 2px 0px !important;
}

.bootstrap-datetimepicker-widget table {
  width: 100%;
  margin: 0;
  text-align: center;
}

.bootstrap-datetimepicker-widget table td > div,
.bootstrap-datetimepicker-widget table th > div {
  text-align: center;
}

.bootstrap-datetimepicker-widget table th {
  height: 20px;
  line-height: 20px;
  width: 20px;
  font-weight: 300;
}

.bootstrap-datetimepicker-widget table th.picker-switch {
  width: 145px;
}

.bootstrap-datetimepicker-widget table th.disabled,
.bootstrap-datetimepicker-widget table th.disabled:hover {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget table th.prev span,
.bootstrap-datetimepicker-widget table th.next span {
  border-radius: 4px;
  height: 27px;
  width: 27px;
  line-height: 28px;
  font-size: 12px;
  border-radius: 50%;
  text-align: center;
  color: #dc3741;
}

.bootstrap-datetimepicker-widget table th.prev::after {
  content: "Previous Month";
}

.bootstrap-datetimepicker-widget table th.next::after {
  content: "Next Month";
}

.bootstrap-datetimepicker-widget table th.dow {
  text-align: center;
  color: #dc3741;
  padding-bottom: 5px;
  padding-top: 10px;
}

.bootstrap-datetimepicker-widget table thead tr:first-child th {
  cursor: pointer;
}

.bootstrap-datetimepicker-widget table thead tr:first-child th:hover span,
.bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover {
  background: #eee;
}

.bootstrap-datetimepicker-widget table td.cw > div {
  font-size: .8em;
  height: 20px;
  line-height: 20px;
  color: #cfcfca;
}

.bootstrap-datetimepicker-widget table td.day > div,
.bootstrap-datetimepicker-widget table td.minute > div,
.bootstrap-datetimepicker-widget table td.hour > div {
  height: 30px;
  line-height: 2.2;
  width: 30px;
  text-align: center;
  padding: 0px;
  border-radius: 50%;
  margin: 0 auto;
  z-index: -1;
  position: relative;
  font-weight: 300;
  font-size: 14px;
  border: none;
  cursor: pointer;
  -webkit-transition: all 300ms ease 0s;
  transition: all 300ms ease 0s;
}

.bootstrap-datetimepicker-widget table td.day:hover > div,
.bootstrap-datetimepicker-widget table td.hour:hover > div,
.bootstrap-datetimepicker-widget table td.minute:hover > div,
.bootstrap-datetimepicker-widget table td.second:hover > div {
  background: #eee;
  cursor: pointer;
}

.bootstrap-datetimepicker-widget table td.old > div,
.bootstrap-datetimepicker-widget table td.new > div {
  color: #888888;
}

.bootstrap-datetimepicker-widget table td.today > div:before {
  content: '';
  display: inline-block;
  border: 0 0 7px 7px solid transparent;
  border-bottom-color: #68B3C8;
  border-top-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  bottom: 4px;
  right: 4px;
}

.bootstrap-datetimepicker-widget table td.active > div,
.bootstrap-datetimepicker-widget table td.active:hover > div {
  background-color: #dc3741;
  color: #FFFFFF;
  -webkit-box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.2);
}

.bootstrap-datetimepicker-widget table td.active.today:before > div {
  border-bottom-color: #FFFFFF;
}

.bootstrap-datetimepicker-widget table td.disabled > div,
.bootstrap-datetimepicker-widget table td.disabled:hover > div {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget table td span {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  margin: 0 3px;
  cursor: pointer;
  border-radius: 50%;
  text-align: center;
}

.bootstrap-datetimepicker-widget table td span:hover {
  background: #eee;
}

.bootstrap-datetimepicker-widget table td span.active {
  background-color: #dc3741;
  color: #FFFFFF;
}

.bootstrap-datetimepicker-widget table td span.old {
  color: #cfcfca;
}

.bootstrap-datetimepicker-widget table td span.disabled,
.bootstrap-datetimepicker-widget table td span.disabled:hover {
  background: none;
  color: #cfcfca;
  cursor: not-allowed;
}

.bootstrap-datetimepicker-widget .timepicker-picker span,
.bootstrap-datetimepicker-widget .timepicker-hours span,
.bootstrap-datetimepicker-widget .timepicker-minutes span {
  border-radius: 50% !important;
}

.bootstrap-datetimepicker-widget.usetwentyfour td.hour {
  height: 27px;
  line-height: 27px;
}

.input-group.date .input-group-text {
  cursor: pointer;
}

.table-condensed > tbody > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > thead > tr > th {
  padding: 1px;
  text-align: center;
  z-index: 1;
  cursor: pointer;
}

input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .picker-switch,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table th.prev span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table th.next span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.day > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget a[data-action="togglePicker"],
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget a[data-action="togglePicker"]:hover,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .timepicker-hours span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .timepicker-minutes span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget .separator,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.minute > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.hour > div {
  color: #FFFFFF;
}

input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table th.dow {
  color: rgba(255, 255, 255, 0.8);
}

input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.old > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.new > div {
  color: rgba(255, 255, 255, 0.4);
}

input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget button[data-action] {
  background-color: #FFFFFF;
}

input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.active:hover > div {
  background-color: #FFFFFF;
}

input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td:not(.active).day:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.hour:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.minute:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td.second:hover > div,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table td span:hover {
  background: rgba(255, 255, 255, 0.2);
}

input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table thead tr:first-child th:hover span,
input.datetimepicker[data-color] + .bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover {
  background-color: rgba(255, 255, 255, 0.2);
}

input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget {
  background-color: #dc3741;
}

input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="orange"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #dc3741;
}

input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget {
  background-color: #37DCD2;
}

input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="blue"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #37DCD2;
}

input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget {
  background-color: #18ce0f;
}

input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="green"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #18ce0f;
}

input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget {
  background-color: #FF3636;
}

input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="red"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #FF3636;
}

input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget {
  background-color: #FFB236;
}

input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget table td.active > div,
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget table td.active:hover > div,
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget button[data-action],
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget.dropdown-menu.top:after,
input.datetimepicker[data-color="yellow"] + .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before {
  color: #FFB236;
}

/* --------------------------------

Nucleo Outline Web Font - nucleoapp.com/
License - nucleoapp.com/license/
Created using IcoMoon - icomoon.io

-------------------------------- */

@font-face {
  font-family: 'Nucleo Outline';
  src: url(/fonts/nucleo-outline.eot?53a1bed7a3ec86d010fe100873828a89);
  src: url(/fonts/nucleo-outline.eot?53a1bed7a3ec86d010fe100873828a89) format("embedded-opentype"), url(/fonts/nucleo-outline.woff2?8ebec31f5ce59f908db84d86aed5947f) format("woff2"), url(/fonts/nucleo-outline.woff?24e2d6b43b1b0f84fdfaa06a4032f154) format("woff"), url(/fonts/nucleo-outline.ttf?22a0bffe789c286a9d78eb52670996a7) format("truetype");
  font-weight: normal;
  font-style: normal;
}

/*------------------------
	base class definition
-------------------------*/

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/*------------------------
  change icon size
-------------------------*/

/*----------------------------------
  add a square/circle background
-----------------------------------*/

.now-ui-icons.circle {
  padding: 0.33333333em;
  vertical-align: -16%;
  background-color: #eee;
}

.now-ui-icons.circle {
  border-radius: 50%;
}

/*------------------------
  list icons
-------------------------*/

.nc-icon-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}

.nc-icon-ul > li {
  position: relative;
}

.nc-icon-ul > li > .now-ui-icons {
  position: absolute;
  left: -1.57142857em;
  top: 0.14285714em;
  text-align: center;
}

.nc-icon-ul > li > .now-ui-icons.circle {
  top: -0.19047619em;
  left: -1.9047619em;
}

/*------------------------
  spinning icons
-------------------------*/

.now-ui-icons.spin {
  -webkit-animation: nc-icon-spin 2s infinite linear;
  animation: nc-icon-spin 2s infinite linear;
}

@-webkit-keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*------------------------
  rotated/flipped icons
-------------------------*/

/*------------------------
	font icons
-------------------------*/

.now-ui-icons.ui-1_check:before {
  content: "\EA22";
}

.now-ui-icons.ui-1_email-85:before {
  content: "\EA2A";
}

.now-ui-icons.arrows-1_cloud-download-93:before {
  content: "\EA21";
}

.now-ui-icons.arrows-1_cloud-upload-94:before {
  content: "\EA24";
}

.now-ui-icons.arrows-1_minimal-down:before {
  content: "\EA39";
}

.now-ui-icons.arrows-1_minimal-left:before {
  content: "\EA3A";
}

.now-ui-icons.arrows-1_minimal-right:before {
  content: "\EA3B";
}

.now-ui-icons.arrows-1_minimal-up:before {
  content: "\EA3C";
}

.now-ui-icons.arrows-1_refresh-69:before {
  content: "\EA44";
}

.now-ui-icons.arrows-1_share-66:before {
  content: "\EA4C";
}

.now-ui-icons.business_badge:before {
  content: "\EA09";
}

.now-ui-icons.business_bank:before {
  content: "\EA0A";
}

.now-ui-icons.business_briefcase-24:before {
  content: "\EA13";
}

.now-ui-icons.business_bulb-63:before {
  content: "\EA15";
}

.now-ui-icons.business_chart-bar-32:before {
  content: "\EA1E";
}

.now-ui-icons.business_chart-pie-36:before {
  content: "\EA1F";
}

.now-ui-icons.business_globe:before {
  content: "\EA2F";
}

.now-ui-icons.business_money-coins:before {
  content: "\EA40";
}

.now-ui-icons.clothes_tie-bow:before {
  content: "\EA5B";
}

.now-ui-icons.design_vector:before {
  content: "\EA61";
}

.now-ui-icons.design_app:before {
  content: "\EA08";
}

.now-ui-icons.design_bullet-list-67:before {
  content: "\EA14";
}

.now-ui-icons.design_image:before {
  content: "\EA33";
}

.now-ui-icons.design_palette:before {
  content: "\EA41";
}

.now-ui-icons.design_scissors:before {
  content: "\EA4A";
}

.now-ui-icons.design-2_html5:before {
  content: "\EA32";
}

.now-ui-icons.design-2_ruler-pencil:before {
  content: "\EA48";
}

.now-ui-icons.emoticons_satisfied:before {
  content: "\EA49";
}

.now-ui-icons.files_box:before {
  content: "\EA12";
}

.now-ui-icons.files_paper:before {
  content: "\EA43";
}

.now-ui-icons.files_single-copy-04:before {
  content: "\EA52";
}

.now-ui-icons.health_ambulance:before {
  content: "\EA07";
}

.now-ui-icons.loader_gear:before {
  content: "\EA4E";
}

.now-ui-icons.loader_refresh:before {
  content: "\EA44";
}

.now-ui-icons.location_bookmark:before {
  content: "\EA10";
}

.now-ui-icons.location_compass-05:before {
  content: "\EA25";
}

.now-ui-icons.location_map-big:before {
  content: "\EA3D";
}

.now-ui-icons.location_pin:before {
  content: "\EA47";
}

.now-ui-icons.location_world:before {
  content: "\EA63";
}

.now-ui-icons.media-1_album:before {
  content: "\EA02";
}

.now-ui-icons.media-1_button-pause:before {
  content: "\EA16";
}

.now-ui-icons.media-1_button-play:before {
  content: "\EA18";
}

.now-ui-icons.media-1_button-power:before {
  content: "\EA19";
}

.now-ui-icons.media-1_camera-compact:before {
  content: "\EA1C";
}

.now-ui-icons.media-2_note-03:before {
  content: "\EA3F";
}

.now-ui-icons.media-2_sound-wave:before {
  content: "\EA57";
}

.now-ui-icons.objects_diamond:before {
  content: "\EA29";
}

.now-ui-icons.objects_globe:before {
  content: "\EA2F";
}

.now-ui-icons.objects_key-25:before {
  content: "\EA38";
}

.now-ui-icons.objects_planet:before {
  content: "\EA46";
}

.now-ui-icons.objects_spaceship:before {
  content: "\EA55";
}

.now-ui-icons.objects_support-17:before {
  content: "\EA56";
}

.now-ui-icons.objects_umbrella-13:before {
  content: "\EA5F";
}

.now-ui-icons.education_agenda-bookmark:before {
  content: "\EA01";
}

.now-ui-icons.education_atom:before {
  content: "\EA0C";
}

.now-ui-icons.education_glasses:before {
  content: "\EA2D";
}

.now-ui-icons.education_hat:before {
  content: "\EA30";
}

.now-ui-icons.education_paper:before {
  content: "\EA42";
}

.now-ui-icons.shopping_bag-16:before {
  content: "\EA0D";
}

.now-ui-icons.shopping_basket:before {
  content: "\EA0B";
}

.now-ui-icons.shopping_box:before {
  content: "\EA11";
}

.now-ui-icons.shopping_cart-simple:before {
  content: "\EA1D";
}

.now-ui-icons.shopping_credit-card:before {
  content: "\EA28";
}

.now-ui-icons.shopping_delivery-fast:before {
  content: "\EA27";
}

.now-ui-icons.shopping_shop:before {
  content: "\EA50";
}

.now-ui-icons.shopping_tag-content:before {
  content: "\EA59";
}

.now-ui-icons.sport_trophy:before {
  content: "\EA5D";
}

.now-ui-icons.sport_user-run:before {
  content: "\EA60";
}

.now-ui-icons.tech_controller-modern:before {
  content: "\EA26";
}

.now-ui-icons.tech_headphones:before {
  content: "\EA31";
}

.now-ui-icons.tech_laptop:before {
  content: "\EA36";
}

.now-ui-icons.tech_mobile:before {
  content: "\EA3E";
}

.now-ui-icons.tech_tablet:before {
  content: "\EA58";
}

.now-ui-icons.tech_tv:before {
  content: "\EA5E";
}

.now-ui-icons.tech_watch-time:before {
  content: "\EA62";
}

.now-ui-icons.text_align-center:before {
  content: "\EA05";
}

.now-ui-icons.text_align-left:before {
  content: "\EA06";
}

.now-ui-icons.text_bold:before {
  content: "\EA0E";
}

.now-ui-icons.text_caps-small:before {
  content: "\EA1B";
}

.now-ui-icons.gestures_tap-01:before {
  content: "\EA5A";
}

.now-ui-icons.transportation_air-baloon:before {
  content: "\EA03";
}

.now-ui-icons.transportation_bus-front-12:before {
  content: "\EA17";
}

.now-ui-icons.travel_info:before {
  content: "\EA04";
}

.now-ui-icons.travel_istanbul:before {
  content: "\EA34";
}

.now-ui-icons.ui-1_bell-53:before {
  content: "\EA0F";
}

.now-ui-icons.ui-1_calendar-60:before {
  content: "\EA1A";
}

.now-ui-icons.ui-1_lock-circle-open:before {
  content: "\EA35";
}

.now-ui-icons.ui-1_send:before {
  content: "\EA4D";
}

.now-ui-icons.ui-1_settings-gear-63:before {
  content: "\EA4E";
}

.now-ui-icons.ui-1_simple-add:before {
  content: "\EA4F";
}

.now-ui-icons.ui-1_simple-delete:before {
  content: "\EA54";
}

.now-ui-icons.ui-1_simple-remove:before {
  content: "\EA53";
}

.now-ui-icons.ui-1_zoom-bold:before {
  content: "\EA64";
}

.now-ui-icons.ui-2_chat-round:before {
  content: "\EA20";
}

.now-ui-icons.ui-2_favourite-28:before {
  content: "\EA2B";
}

.now-ui-icons.ui-2_like:before {
  content: "\EA37";
}

.now-ui-icons.ui-2_settings-90:before {
  content: "\EA4B";
}

.now-ui-icons.ui-2_time-alarm:before {
  content: "\EA5C";
}

.now-ui-icons.users_circle-08:before {
  content: "\EA23";
}

.now-ui-icons.users_single-02:before {
  content: "\EA51";
}

.all-icons .font-icon-detail {
  text-align: center;
  padding: 45px 0px 30px;
  border: 1px solid #e5e5e5;
  border-radius: 0.1875rem;
  margin: 15px 0;
  min-height: 168px;
}

.all-icons [class*="now-ui-icons"] {
  font-size: 32px;
}

.all-icons .font-icon-detail p {
  margin: 25px auto 0;
  width: 100%;
  text-align: center;
  display: block;
  color: #B8B8B8;
  padding: 0 10px;
  font-size: 0.7142em;
}

.alert {
  border: 0;
  border-radius: 0;
  color: #FFFFFF;
  padding-top: .9rem;
  padding-bottom: .9rem;
}

.alert .alert-link {
  color: #FFFFFF;
  opacity: .8;
}

.alert.alert-success {
  background-color: rgba(24, 206, 15, 0.8);
}

.alert.alert-danger {
  background-color: rgba(255, 54, 54, 0.8);
}

.alert.alert-warning {
  background-color: rgba(255, 178, 54, 0.8);
}

.alert.alert-info {
  background-color: rgba(55, 220, 210, 0.8);
}

.alert.alert-primary {
  background-color: rgba(220, 55, 65, 0.8);
}

.alert .alert-icon {
  display: block;
  float: left;
  margin-right: 15px;
  margin-top: -1px;
}

.alert strong {
  text-transform: uppercase;
  font-size: 12px;
}

.alert i.fa,
.alert i.now-ui-icons {
  font-size: 20px;
}

.alert .close {
  color: #FFFFFF;
  opacity: .9;
  text-shadow: none;
  line-height: 0;
  outline: 0;
  display: inline-block;
  cursor: pointer;
}

.form-check {
  margin-top: .65rem;
  padding-left: 0;
}

.form-check .form-check-label {
  display: inline-block;
  position: relative;
  cursor: pointer;
  padding-left: 35px;
  line-height: 26px;
  margin-bottom: 0;
  -webkit-transition: color 0.3s linear;
  transition: color 0.3s linear;
}

.radio .form-check-sign {
  padding-left: 28px;
}

.form-check .form-check-sign::before,
.form-check .form-check-sign::after {
  content: " ";
  display: inline-block;
  position: absolute;
  width: 26px;
  height: 26px;
  left: 0;
  cursor: pointer;
  border-radius: 3px;
  top: 0;
  background-color: transparent;
  border: 1px solid #E3E3E3;
  -webkit-transition: opacity 0.3s linear;
  transition: opacity 0.3s linear;
}

.form-check .form-check-sign::after {
  font-family: 'Nucleo Outline';
  content: "\EA22";
  top: 0px;
  text-align: center;
  font-size: 14px;
  opacity: 0;
  color: #555555;
  border: 0;
  background-color: inherit;
}

.form-check.disabled .form-check-label,
.form-check.disabled .form-check-label {
  color: #9A9A9A;
  opacity: .5;
  cursor: not-allowed;
}

.form-check input[type="checkbox"],
.radio input[type="radio"] {
  opacity: 0;
  position: absolute;
  visibility: hidden;
}

.form-check input[type="checkbox"]:checked + .form-check-sign::after {
  opacity: 1;
}

.form-control input[type="checkbox"]:disabled + .form-check-sign::before,
.checkbox input[type="checkbox"]:disabled + .form-check-sign::after {
  cursor: not-allowed;
}

.form-check input[type="checkbox"]:disabled + .form-check-sign,
.form-check input[type="radio"]:disabled + .form-check-sign {
  pointer-events: none;
}

.form-check-radio .form-check-sign::before,
.form-check-radio .form-check-sign::after {
  content: " ";
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 1px solid #E3E3E3;
  display: inline-block;
  position: absolute;
  left: 3px;
  top: 3px;
  padding: 1px;
  -webkit-transition: opacity 0.3s linear;
  transition: opacity 0.3s linear;
}

.form-check-radio input[type="radio"] + .form-check-sign:after,
.form-check-radio input[type="radio"] {
  opacity: 0;
}

.form-check-radio input[type="radio"]:checked + .form-check-sign::after {
  width: 4px;
  height: 4px;
  background-color: #555555;
  border-color: #555555;
  top: 11px;
  left: 11px;
  opacity: 1;
}

.form-check-radio input[type="radio"]:checked + .form-check-sign::after {
  opacity: 1;
}

.form-check-radio input[type="radio"]:disabled + .form-check-sign {
  color: #9A9A9A;
}

.form-check-radio input[type="radio"]:disabled + .form-check-sign::before,
.form-check-radio input[type="radio"]:disabled + .form-check-sign::after {
  color: #9A9A9A;
}

/*           badges             */

.badge {
  border-radius: 8px;
  padding: 4px 8px;
  text-transform: uppercase;
  font-size: 0.7142em;
  line-height: 12px;
  background-color: transparent;
  border: 1px solid;
  margin-bottom: 5px;
  color: #FFFFFF;
  border-radius: 0.875rem;
}

.badge:hover,
.badge:focus {
  text-decoration: none;
}

.badge-icon {
  padding: 0.4em 0.55em;
}

.badge-icon i {
  font-size: 0.8em;
}

.badge-default,
.badge-default[href]:focus,
.badge-default[href]:hover {
  border-color: #888888;
  background-color: #888888;
  color: #FFFFFF;
}

.badge-primary,
.badge-primary[href]:focus,
.badge-primary[href]:hover {
  border-color: #dc3741;
  background-color: #dc3741;
  color: #FFFFFF;
}

.badge-info,
.badge-info[href]:focus,
.badge-info[href]:hover {
  border-color: #37DCD2;
  background-color: #37DCD2;
  color: #FFFFFF;
}

.badge-success,
.badge-success[href]:focus,
.badge-success[href]:hover {
  border-color: #18ce0f;
  background-color: #18ce0f;
  color: #FFFFFF;
}

.badge-warning,
.badge-warning[href]:focus,
.badge-warning[href]:hover {
  border-color: #FFB236;
  background-color: #FFB236;
  color: #FFFFFF;
}

.badge-danger,
.badge-danger[href]:focus,
.badge-danger[href]:hover {
  border-color: #FF3636;
  background-color: #FF3636;
  color: #FFFFFF;
}

.badge-neutral {
  color: inherit !important;
}

.badge-neutral,
.badge-neutral[href]:focus,
.badge-neutral[href]:hover {
  border-color: #FFFFFF;
  background-color: #FFFFFF;
  color: #FFFFFF;
}

.pagination .page-item .page-link {
  border: 0;
  border-radius: 30px !important;
  -webkit-transition: all .3s;
  transition: all .3s;
  padding: 0px 11px;
  margin: 0 3px;
  min-width: 30px;
  text-align: center;
  -webkit-box-shadow: none;
          box-shadow: none;
  height: 30px;
  line-height: 30px;
  color: #2c2c2c;
  cursor: pointer;
  font-size: 16px;
  text-transform: uppercase;
  background: transparent;
}

.pagination .page-item .page-link:hover,
.pagination .page-item .page-link:focus {
  color: #2c2c2c;
  background-color: rgba(222, 222, 222, 0.3);
  border: none;
}

.pagination .arrow-margin-left,
.pagination .arrow-margin-right {
  position: absolute;
}

.pagination .arrow-margin-right {
  right: 0;
}

.pagination .arrow-margin-left {
  left: 0;
}

.pagination .page-item.active > .page-link {
  color: #E3E3E3;
  -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.pagination .page-item.active > .page-link,
.pagination .page-item.active > .page-link:focus,
.pagination .page-item.active > .page-link:hover {
  background-color: #888888;
  border-color: #888888;
  color: #FFFFFF;
}

.pagination .page-item.disabled > .page-link {
  opacity: .5;
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.pagination.pagination-info .page-item.active > .page-link,
.pagination.pagination-info .page-item.active > .page-link:focus,
.pagination.pagination-info .page-item.active > .page-link:hover {
  background-color: #37DCD2;
  border-color: #37DCD2;
}

.pagination.pagination-success .page-item.active > .page-link,
.pagination.pagination-success .page-item.active > .page-link:focus,
.pagination.pagination-success .page-item.active > .page-link:hover {
  background-color: #18ce0f;
  border-color: #18ce0f;
}

.pagination.pagination-primary .page-item.active > .page-link,
.pagination.pagination-primary .page-item.active > .page-link:focus,
.pagination.pagination-primary .page-item.active > .page-link:hover {
  background-color: #dc3741;
  border-color: #dc3741;
}

.pagination.pagination-warning .page-item.active > .page-link,
.pagination.pagination-warning .page-item.active > .page-link:focus,
.pagination.pagination-warning .page-item.active > .page-link:hover {
  background-color: #FFB236;
  border-color: #FFB236;
}

.pagination.pagination-danger .page-item.active > .page-link,
.pagination.pagination-danger .page-item.active > .page-link:focus,
.pagination.pagination-danger .page-item.active > .page-link:hover {
  background-color: #FF3636;
  border-color: #FF3636;
}

.pagination.pagination-neutral .page-item > .page-link {
  color: #FFFFFF;
}

.pagination.pagination-neutral .page-item > .page-link:focus,
.pagination.pagination-neutral .page-item > .page-link:hover {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.pagination.pagination-neutral .page-item.active > .page-link,
.pagination.pagination-neutral .page-item.active > .page-link:focus,
.pagination.pagination-neutral .page-item.active > .page-link:hover {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
  color: #dc3741;
}

.pagination-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

button,
input,
optgroup,
select,
textarea {
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 400;
}

small {
  font-size: 60%;
}

a {
  color: #dc3741;
}

a:hover,
a:focus {
  color: #dc3741;
}

h1,
.h1 {
  font-size: 3.5em;
  line-height: 1.15;
  margin-bottom: 30px;
}

h1 small,
.h1 small {
  font-weight: 700;
  text-transform: uppercase;
  opacity: .8;
}

h2,
.h2 {
  font-size: 2.5em;
  margin-bottom: 30px;
}

h3,
.h3 {
  font-size: 1.825em;
  margin-bottom: 30px;
  line-height: 1.4em;
}

h4,
.h4 {
  font-size: 1.5em;
  line-height: 1.45em;
  margin-top: 30px;
  margin-bottom: 15px;
}

h4 + .category,
h4.title + .category,
.h4 + .category,
.h4.title + .category {
  margin-top: -5px;
}

h5,
.h5 {
  font-size: 1.3em;
  line-height: 1.4em;
  margin-bottom: 15px;
}

h5.category,
.h5.category {
  font-weight: 400;
}

h6,
.h6 {
  font-size: 0.9em;
  font-weight: 700;
  text-transform: uppercase;
}

p {
  line-height: 1.61em;
  font-weight: 300;
  font-size: 1.2em;
}

.title {
  font-weight: 700;
  padding-top: 30px;
}

.title.title-up {
  text-transform: uppercase;
}

.title.title-up a {
  color: #2c2c2c;
  text-decoration: none;
}

.title + .category {
  margin-top: -25px;
}

.description,
.card-description,
.footer-big p {
  color: #9A9A9A;
  font-weight: 300;
}

.category {
  text-transform: capitalize;
  font-weight: 700;
  color: #9A9A9A;
}

.text-primary {
  color: #dc3741 !important;
}

.text-info {
  color: #37DCD2 !important;
}

.text-success {
  color: #18ce0f !important;
}

.text-warning {
  color: #FFB236 !important;
}

.text-danger {
  color: #FF3636 !important;
}

.text-black {
  color: #444;
}

.blockquote {
  border-left: none;
  border: 1px solid #888888;
  padding: 20px;
  font-size: 1.1em;
  line-height: 1.8;
}

.blockquote small {
  color: #888888;
  font-size: 0.8571em;
  text-transform: uppercase;
}

.blockquote.blockquote-primary {
  border-color: #dc3741;
  color: #dc3741;
}

.blockquote.blockquote-primary small {
  color: #dc3741;
}

.blockquote.blockquote-danger {
  border-color: #FF3636;
  color: #FF3636;
}

.blockquote.blockquote-danger small {
  color: #FF3636;
}

.blockquote.blockquote-white {
  border-color: rgba(255, 255, 255, 0.8);
  color: #FFFFFF;
}

.blockquote.blockquote-white small {
  color: rgba(255, 255, 255, 0.8);
}

body {
  color: #2c2c2c;
  font-size: 16px;
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
  overflow-x: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}

.main {
  position: relative;
  background: #FFFFFF;
}

/* Animations */

.nav-pills .nav-link,
.nav-item .nav-link,
.navbar,
.nav-tabs .nav-link,
.tag,
.tag [data-role="remove"] {
  -webkit-transition: all 300ms ease 0s;
  transition: all 300ms ease 0s;
}

.card a,
.bootstrap-switch-label:before {
  -webkit-transition: all 150ms ease 0s;
  transition: all 150ms ease 0s;
}

.dropdown-toggle:after,
[data-toggle="collapse"][data-parent="#accordion"] i {
  -webkit-transition: transform 150ms ease 0s;
  -webkit-transition: -webkit-transform 150ms ease 0s;
  transition: -webkit-transform 150ms ease 0s;
  transition: transform 150ms ease 0s;
  transition: transform 150ms ease 0s, -webkit-transform 150ms ease 0s;
}

.dropdown-toggle[aria-expanded="true"]:after,
[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.button-bar {
  display: block;
  position: relative;
  width: 22px;
  height: 1px;
  border-radius: 1px;
  background: #FFFFFF;
}

.button-bar + .button-bar {
  margin-top: 7px;
}

.button-bar:nth-child(2) {
  width: 17px;
}

.separator-line {
  height: 2px;
  width: 44px;
  background-color: #888888;
  margin: 20px auto;
}

.separator-line.separator-primary {
  background-color: #dc3741;
}

.section-space {
  height: 62px;
  display: block;
}

.pull-left {
  float: left;
}

.pull-right {
  float: right;
}

.title-up {
  text-transform: uppercase;
}

.btn,
.navbar .navbar-nav > a.btn {
  border-width: 2px;
  font-weight: 400;
  font-size: 0.8571em;
  line-height: 1.35em;
  margin: 10px 1px;
  border: none;
  border-radius: 0.1875rem;
  padding: 11px 22px;
  cursor: pointer;
  background-color: #888888;
  color: #FFFFFF;
}

.btn:hover,
.btn:focus,
.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled).active,
.btn:not(:disabled):not(.disabled):active:focus,
.btn:not(:disabled):not(.disabled).active:focus,
.btn:active:hover,
.btn.active:hover,
.show > .btn.dropdown-toggle,
.show > .btn.dropdown-toggle:focus,
.show > .btn.dropdown-toggle:hover,
.navbar .navbar-nav > a.btn:hover,
.navbar .navbar-nav > a.btn:focus,
.navbar .navbar-nav > a.btn:not(:disabled):not(.disabled):active,
.navbar .navbar-nav > a.btn:not(:disabled):not(.disabled).active,
.navbar .navbar-nav > a.btn:not(:disabled):not(.disabled):active:focus,
.navbar .navbar-nav > a.btn:not(:disabled):not(.disabled).active:focus,
.navbar .navbar-nav > a.btn:active:hover,
.navbar .navbar-nav > a.btn.active:hover,
.show >
.navbar .navbar-nav > a.btn.dropdown-toggle,
.show >
.navbar .navbar-nav > a.btn.dropdown-toggle:focus,
.show >
.navbar .navbar-nav > a.btn.dropdown-toggle:hover {
  background-color: #979797;
  color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn:hover,
.navbar .navbar-nav > a.btn:hover {
  -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
          box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn.disabled,
.btn.disabled:hover,
.btn.disabled:focus,
.btn.disabled.focus,
.btn.disabled:active,
.btn.disabled.active,
.btn:disabled,
.btn:disabled:hover,
.btn:disabled:focus,
.btn:disabled.focus,
.btn:disabled:active,
.btn:disabled.active,
.btn[disabled],
.btn[disabled]:hover,
.btn[disabled]:focus,
.btn[disabled].focus,
.btn[disabled]:active,
.btn[disabled].active,
fieldset[disabled] .btn,
fieldset[disabled] .btn:hover,
fieldset[disabled] .btn:focus,
fieldset[disabled] .btn.focus,
fieldset[disabled] .btn:active,
fieldset[disabled] .btn.active,
.navbar .navbar-nav > a.btn.disabled,
.navbar .navbar-nav > a.btn.disabled:hover,
.navbar .navbar-nav > a.btn.disabled:focus,
.navbar .navbar-nav > a.btn.disabled.focus,
.navbar .navbar-nav > a.btn.disabled:active,
.navbar .navbar-nav > a.btn.disabled.active,
.navbar .navbar-nav > a.btn:disabled,
.navbar .navbar-nav > a.btn:disabled:hover,
.navbar .navbar-nav > a.btn:disabled:focus,
.navbar .navbar-nav > a.btn:disabled.focus,
.navbar .navbar-nav > a.btn:disabled:active,
.navbar .navbar-nav > a.btn:disabled.active,
.navbar .navbar-nav > a.btn[disabled],
.navbar .navbar-nav > a.btn[disabled]:hover,
.navbar .navbar-nav > a.btn[disabled]:focus,
.navbar .navbar-nav > a.btn[disabled].focus,
.navbar .navbar-nav > a.btn[disabled]:active,
.navbar .navbar-nav > a.btn[disabled].active,
fieldset[disabled]
.navbar .navbar-nav > a.btn,
fieldset[disabled]
.navbar .navbar-nav > a.btn:hover,
fieldset[disabled]
.navbar .navbar-nav > a.btn:focus,
fieldset[disabled]
.navbar .navbar-nav > a.btn.focus,
fieldset[disabled]
.navbar .navbar-nav > a.btn:active,
fieldset[disabled]
.navbar .navbar-nav > a.btn.active {
  background-color: #888888;
  border-color: #888888;
}

.btn.btn-simple,
.navbar .navbar-nav > a.btn.btn-simple {
  color: #888888;
  border-color: #888888;
}

.btn.btn-simple:hover,
.btn.btn-simple:focus,
.btn.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-simple:active:hover,
.btn.btn-simple.active:hover,
.show > .btn.btn-simple.dropdown-toggle,
.show > .btn.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-simple.dropdown-toggle:hover,
.navbar .navbar-nav > a.btn.btn-simple:hover,
.navbar .navbar-nav > a.btn.btn-simple:focus,
.navbar .navbar-nav > a.btn.btn-simple:not(:disabled):not(.disabled):active,
.navbar .navbar-nav > a.btn.btn-simple:not(:disabled):not(.disabled).active,
.navbar .navbar-nav > a.btn.btn-simple:not(:disabled):not(.disabled):active:focus,
.navbar .navbar-nav > a.btn.btn-simple:not(:disabled):not(.disabled).active:focus,
.navbar .navbar-nav > a.btn.btn-simple:active:hover,
.navbar .navbar-nav > a.btn.btn-simple.active:hover,
.show >
.navbar .navbar-nav > a.btn.btn-simple.dropdown-toggle,
.show >
.navbar .navbar-nav > a.btn.btn-simple.dropdown-toggle:focus,
.show >
.navbar .navbar-nav > a.btn.btn-simple.dropdown-toggle:hover {
  background-color: transparent;
  color: #979797;
  border-color: #979797;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn.btn-link,
.navbar .navbar-nav > a.btn.btn-link {
  color: #888888;
}

.btn.btn-link:hover,
.btn.btn-link:focus,
.btn.btn-link:not(:disabled):not(.disabled):active,
.btn.btn-link:not(:disabled):not(.disabled).active,
.btn.btn-link:not(:disabled):not(.disabled):active:focus,
.btn.btn-link:not(:disabled):not(.disabled).active:focus,
.btn.btn-link:active:hover,
.btn.btn-link.active:hover,
.show > .btn.btn-link.dropdown-toggle,
.show > .btn.btn-link.dropdown-toggle:focus,
.show > .btn.btn-link.dropdown-toggle:hover,
.navbar .navbar-nav > a.btn.btn-link:hover,
.navbar .navbar-nav > a.btn.btn-link:focus,
.navbar .navbar-nav > a.btn.btn-link:not(:disabled):not(.disabled):active,
.navbar .navbar-nav > a.btn.btn-link:not(:disabled):not(.disabled).active,
.navbar .navbar-nav > a.btn.btn-link:not(:disabled):not(.disabled):active:focus,
.navbar .navbar-nav > a.btn.btn-link:not(:disabled):not(.disabled).active:focus,
.navbar .navbar-nav > a.btn.btn-link:active:hover,
.navbar .navbar-nav > a.btn.btn-link.active:hover,
.show >
.navbar .navbar-nav > a.btn.btn-link.dropdown-toggle,
.show >
.navbar .navbar-nav > a.btn.btn-link.dropdown-toggle:focus,
.show >
.navbar .navbar-nav > a.btn.btn-link.dropdown-toggle:hover {
  background-color: transparent;
  color: #979797;
  text-decoration: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn:hover,
.btn:focus,
.navbar .navbar-nav > a.btn:hover,
.navbar .navbar-nav > a.btn:focus {
  opacity: 1;
  filter: alpha(opacity=100);
  outline: 0 !important;
}

.btn:active,
.btn.active,
.open > .btn.dropdown-toggle,
.navbar .navbar-nav > a.btn:active,
.navbar .navbar-nav > a.btn.active,
.open >
.navbar .navbar-nav > a.btn.dropdown-toggle {
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
}

.btn.btn-icon,
.navbar .navbar-nav > a.btn.btn-icon {
  height: 2.375rem;
  min-width: 2.375rem;
  width: 2.375rem;
  padding: 0;
  font-size: 0.9375rem;
  overflow: hidden;
  position: relative;
  line-height: normal;
}

.btn.btn-icon.btn-simple,
.navbar .navbar-nav > a.btn.btn-icon.btn-simple {
  padding: 0;
}

.btn.btn-icon.btn-sm,
.navbar .navbar-nav > a.btn.btn-icon.btn-sm {
  height: 1.875rem;
  min-width: 1.875rem;
  width: 1.875rem;
}

.btn.btn-icon.btn-sm i.fab,
.btn.btn-icon.btn-sm i.now-ui-icons,
.navbar .navbar-nav > a.btn.btn-icon.btn-sm i.fab,
.navbar .navbar-nav > a.btn.btn-icon.btn-sm i.now-ui-icons {
  font-size: 0.6875rem;
}

.btn.btn-icon.btn-lg,
.navbar .navbar-nav > a.btn.btn-icon.btn-lg {
  height: 3.6rem;
  min-width: 3.6rem;
  width: 3.6rem;
}

.btn.btn-icon.btn-lg i.now-ui-icons,
.btn.btn-icon.btn-lg i.fab,
.navbar .navbar-nav > a.btn.btn-icon.btn-lg i.now-ui-icons,
.navbar .navbar-nav > a.btn.btn-icon.btn-lg i.fab {
  font-size: 1.325rem;
}

.btn.btn-icon:not(.btn-footer) i.now-ui-icons,
.btn.btn-icon:not(.btn-footer) i.fab,
.navbar .navbar-nav > a.btn.btn-icon:not(.btn-footer) i.now-ui-icons,
.navbar .navbar-nav > a.btn.btn-icon:not(.btn-footer) i.fab {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-12px, -12px);
          transform: translate(-12px, -12px);
  line-height: 1.5626rem;
  width: 23px;
}

.btn:not(.btn-icon) .now-ui-icons,
.navbar .navbar-nav > a.btn:not(.btn-icon) .now-ui-icons {
  position: relative;
  top: 1px;
}

.btn-primary {
  background-color: #dc3741;
  color: #FFFFFF;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:active:hover,
.btn-primary.active:hover,
.show > .btn-primary.dropdown-toggle,
.show > .btn-primary.dropdown-toggle:focus,
.show > .btn-primary.dropdown-toggle:hover {
  background-color: #e1515a;
  color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-primary:hover {
  -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
          box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-primary.disabled,
.btn-primary.disabled:hover,
.btn-primary.disabled:focus,
.btn-primary.disabled.focus,
.btn-primary.disabled:active,
.btn-primary.disabled.active,
.btn-primary:disabled,
.btn-primary:disabled:hover,
.btn-primary:disabled:focus,
.btn-primary:disabled.focus,
.btn-primary:disabled:active,
.btn-primary:disabled.active,
.btn-primary[disabled],
.btn-primary[disabled]:hover,
.btn-primary[disabled]:focus,
.btn-primary[disabled].focus,
.btn-primary[disabled]:active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary:hover,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary.active {
  background-color: #dc3741;
  border-color: #dc3741;
}

.btn-primary.btn-simple {
  color: #dc3741;
  border-color: #dc3741;
}

.btn-primary.btn-simple:hover,
.btn-primary.btn-simple:focus,
.btn-primary.btn-simple:not(:disabled):not(.disabled):active,
.btn-primary.btn-simple:not(:disabled):not(.disabled).active,
.btn-primary.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn-primary.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn-primary.btn-simple:active:hover,
.btn-primary.btn-simple.active:hover,
.show > .btn-primary.btn-simple.dropdown-toggle,
.show > .btn-primary.btn-simple.dropdown-toggle:focus,
.show > .btn-primary.btn-simple.dropdown-toggle:hover {
  background-color: transparent;
  color: #e1515a;
  border-color: #e1515a;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-primary.btn-link {
  color: #dc3741;
}

.btn-primary.btn-link:hover,
.btn-primary.btn-link:focus,
.btn-primary.btn-link:not(:disabled):not(.disabled):active,
.btn-primary.btn-link:not(:disabled):not(.disabled).active,
.btn-primary.btn-link:not(:disabled):not(.disabled):active:focus,
.btn-primary.btn-link:not(:disabled):not(.disabled).active:focus,
.btn-primary.btn-link:active:hover,
.btn-primary.btn-link.active:hover,
.show > .btn-primary.btn-link.dropdown-toggle,
.show > .btn-primary.btn-link.dropdown-toggle:focus,
.show > .btn-primary.btn-link.dropdown-toggle:hover {
  background-color: transparent;
  color: #e1515a;
  text-decoration: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-success {
  background-color: #18ce0f;
  color: #FFFFFF;
}

.btn-success:hover,
.btn-success:focus,
.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:active:hover,
.btn-success.active:hover,
.show > .btn-success.dropdown-toggle,
.show > .btn-success.dropdown-toggle:focus,
.show > .btn-success.dropdown-toggle:hover {
  background-color: #1beb11;
  color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-success:hover {
  -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
          box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-success.disabled,
.btn-success.disabled:hover,
.btn-success.disabled:focus,
.btn-success.disabled.focus,
.btn-success.disabled:active,
.btn-success.disabled.active,
.btn-success:disabled,
.btn-success:disabled:hover,
.btn-success:disabled:focus,
.btn-success:disabled.focus,
.btn-success:disabled:active,
.btn-success:disabled.active,
.btn-success[disabled],
.btn-success[disabled]:hover,
.btn-success[disabled]:focus,
.btn-success[disabled].focus,
.btn-success[disabled]:active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success,
fieldset[disabled] .btn-success:hover,
fieldset[disabled] .btn-success:focus,
fieldset[disabled] .btn-success.focus,
fieldset[disabled] .btn-success:active,
fieldset[disabled] .btn-success.active {
  background-color: #18ce0f;
  border-color: #18ce0f;
}

.btn-success.btn-simple {
  color: #18ce0f;
  border-color: #18ce0f;
}

.btn-success.btn-simple:hover,
.btn-success.btn-simple:focus,
.btn-success.btn-simple:not(:disabled):not(.disabled):active,
.btn-success.btn-simple:not(:disabled):not(.disabled).active,
.btn-success.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn-success.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn-success.btn-simple:active:hover,
.btn-success.btn-simple.active:hover,
.show > .btn-success.btn-simple.dropdown-toggle,
.show > .btn-success.btn-simple.dropdown-toggle:focus,
.show > .btn-success.btn-simple.dropdown-toggle:hover {
  background-color: transparent;
  color: #1beb11;
  border-color: #1beb11;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-success.btn-link {
  color: #18ce0f;
}

.btn-success.btn-link:hover,
.btn-success.btn-link:focus,
.btn-success.btn-link:not(:disabled):not(.disabled):active,
.btn-success.btn-link:not(:disabled):not(.disabled).active,
.btn-success.btn-link:not(:disabled):not(.disabled):active:focus,
.btn-success.btn-link:not(:disabled):not(.disabled).active:focus,
.btn-success.btn-link:active:hover,
.btn-success.btn-link.active:hover,
.show > .btn-success.btn-link.dropdown-toggle,
.show > .btn-success.btn-link.dropdown-toggle:focus,
.show > .btn-success.btn-link.dropdown-toggle:hover {
  background-color: transparent;
  color: #1beb11;
  text-decoration: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-info {
  background-color: #37DCD2;
  color: #FFFFFF;
}

.btn-info:hover,
.btn-info:focus,
.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus,
.btn-info:active:hover,
.btn-info.active:hover,
.show > .btn-info.dropdown-toggle,
.show > .btn-info.dropdown-toggle:focus,
.show > .btn-info.dropdown-toggle:hover {
  background-color: #51e1d8;
  color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-info:hover {
  -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
          box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-info.disabled,
.btn-info.disabled:hover,
.btn-info.disabled:focus,
.btn-info.disabled.focus,
.btn-info.disabled:active,
.btn-info.disabled.active,
.btn-info:disabled,
.btn-info:disabled:hover,
.btn-info:disabled:focus,
.btn-info:disabled.focus,
.btn-info:disabled:active,
.btn-info:disabled.active,
.btn-info[disabled],
.btn-info[disabled]:hover,
.btn-info[disabled]:focus,
.btn-info[disabled].focus,
.btn-info[disabled]:active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info,
fieldset[disabled] .btn-info:hover,
fieldset[disabled] .btn-info:focus,
fieldset[disabled] .btn-info.focus,
fieldset[disabled] .btn-info:active,
fieldset[disabled] .btn-info.active {
  background-color: #37DCD2;
  border-color: #37DCD2;
}

.btn-info.btn-simple {
  color: #37DCD2;
  border-color: #37DCD2;
}

.btn-info.btn-simple:hover,
.btn-info.btn-simple:focus,
.btn-info.btn-simple:not(:disabled):not(.disabled):active,
.btn-info.btn-simple:not(:disabled):not(.disabled).active,
.btn-info.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn-info.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn-info.btn-simple:active:hover,
.btn-info.btn-simple.active:hover,
.show > .btn-info.btn-simple.dropdown-toggle,
.show > .btn-info.btn-simple.dropdown-toggle:focus,
.show > .btn-info.btn-simple.dropdown-toggle:hover {
  background-color: transparent;
  color: #51e1d8;
  border-color: #51e1d8;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-info.btn-link {
  color: #37DCD2;
}

.btn-info.btn-link:hover,
.btn-info.btn-link:focus,
.btn-info.btn-link:not(:disabled):not(.disabled):active,
.btn-info.btn-link:not(:disabled):not(.disabled).active,
.btn-info.btn-link:not(:disabled):not(.disabled):active:focus,
.btn-info.btn-link:not(:disabled):not(.disabled).active:focus,
.btn-info.btn-link:active:hover,
.btn-info.btn-link.active:hover,
.show > .btn-info.btn-link.dropdown-toggle,
.show > .btn-info.btn-link.dropdown-toggle:focus,
.show > .btn-info.btn-link.dropdown-toggle:hover {
  background-color: transparent;
  color: #51e1d8;
  text-decoration: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-warning {
  background-color: #FFB236;
  color: #FFFFFF;
}

.btn-warning:hover,
.btn-warning:focus,
.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus,
.btn-warning:active:hover,
.btn-warning.active:hover,
.show > .btn-warning.dropdown-toggle,
.show > .btn-warning.dropdown-toggle:focus,
.show > .btn-warning.dropdown-toggle:hover {
  background-color: #ffbe55;
  color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-warning:hover {
  -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
          box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-warning.disabled,
.btn-warning.disabled:hover,
.btn-warning.disabled:focus,
.btn-warning.disabled.focus,
.btn-warning.disabled:active,
.btn-warning.disabled.active,
.btn-warning:disabled,
.btn-warning:disabled:hover,
.btn-warning:disabled:focus,
.btn-warning:disabled.focus,
.btn-warning:disabled:active,
.btn-warning:disabled.active,
.btn-warning[disabled],
.btn-warning[disabled]:hover,
.btn-warning[disabled]:focus,
.btn-warning[disabled].focus,
.btn-warning[disabled]:active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning,
fieldset[disabled] .btn-warning:hover,
fieldset[disabled] .btn-warning:focus,
fieldset[disabled] .btn-warning.focus,
fieldset[disabled] .btn-warning:active,
fieldset[disabled] .btn-warning.active {
  background-color: #FFB236;
  border-color: #FFB236;
}

.btn-warning.btn-simple {
  color: #FFB236;
  border-color: #FFB236;
}

.btn-warning.btn-simple:hover,
.btn-warning.btn-simple:focus,
.btn-warning.btn-simple:not(:disabled):not(.disabled):active,
.btn-warning.btn-simple:not(:disabled):not(.disabled).active,
.btn-warning.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn-warning.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn-warning.btn-simple:active:hover,
.btn-warning.btn-simple.active:hover,
.show > .btn-warning.btn-simple.dropdown-toggle,
.show > .btn-warning.btn-simple.dropdown-toggle:focus,
.show > .btn-warning.btn-simple.dropdown-toggle:hover {
  background-color: transparent;
  color: #ffbe55;
  border-color: #ffbe55;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-warning.btn-link {
  color: #FFB236;
}

.btn-warning.btn-link:hover,
.btn-warning.btn-link:focus,
.btn-warning.btn-link:not(:disabled):not(.disabled):active,
.btn-warning.btn-link:not(:disabled):not(.disabled).active,
.btn-warning.btn-link:not(:disabled):not(.disabled):active:focus,
.btn-warning.btn-link:not(:disabled):not(.disabled).active:focus,
.btn-warning.btn-link:active:hover,
.btn-warning.btn-link.active:hover,
.show > .btn-warning.btn-link.dropdown-toggle,
.show > .btn-warning.btn-link.dropdown-toggle:focus,
.show > .btn-warning.btn-link.dropdown-toggle:hover {
  background-color: transparent;
  color: #ffbe55;
  text-decoration: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-danger {
  background-color: #FF3636;
  color: #FFFFFF;
}

.btn-danger:hover,
.btn-danger:focus,
.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus,
.btn-danger:active:hover,
.btn-danger.active:hover,
.show > .btn-danger.dropdown-toggle,
.show > .btn-danger.dropdown-toggle:focus,
.show > .btn-danger.dropdown-toggle:hover {
  background-color: #ff5555;
  color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-danger:hover {
  -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
          box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-danger.disabled,
.btn-danger.disabled:hover,
.btn-danger.disabled:focus,
.btn-danger.disabled.focus,
.btn-danger.disabled:active,
.btn-danger.disabled.active,
.btn-danger:disabled,
.btn-danger:disabled:hover,
.btn-danger:disabled:focus,
.btn-danger:disabled.focus,
.btn-danger:disabled:active,
.btn-danger:disabled.active,
.btn-danger[disabled],
.btn-danger[disabled]:hover,
.btn-danger[disabled]:focus,
.btn-danger[disabled].focus,
.btn-danger[disabled]:active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger,
fieldset[disabled] .btn-danger:hover,
fieldset[disabled] .btn-danger:focus,
fieldset[disabled] .btn-danger.focus,
fieldset[disabled] .btn-danger:active,
fieldset[disabled] .btn-danger.active {
  background-color: #FF3636;
  border-color: #FF3636;
}

.btn-danger.btn-simple {
  color: #FF3636;
  border-color: #FF3636;
}

.btn-danger.btn-simple:hover,
.btn-danger.btn-simple:focus,
.btn-danger.btn-simple:not(:disabled):not(.disabled):active,
.btn-danger.btn-simple:not(:disabled):not(.disabled).active,
.btn-danger.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn-danger.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn-danger.btn-simple:active:hover,
.btn-danger.btn-simple.active:hover,
.show > .btn-danger.btn-simple.dropdown-toggle,
.show > .btn-danger.btn-simple.dropdown-toggle:focus,
.show > .btn-danger.btn-simple.dropdown-toggle:hover {
  background-color: transparent;
  color: #ff5555;
  border-color: #ff5555;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-danger.btn-link {
  color: #FF3636;
}

.btn-danger.btn-link:hover,
.btn-danger.btn-link:focus,
.btn-danger.btn-link:not(:disabled):not(.disabled):active,
.btn-danger.btn-link:not(:disabled):not(.disabled).active,
.btn-danger.btn-link:not(:disabled):not(.disabled):active:focus,
.btn-danger.btn-link:not(:disabled):not(.disabled).active:focus,
.btn-danger.btn-link:active:hover,
.btn-danger.btn-link.active:hover,
.show > .btn-danger.btn-link.dropdown-toggle,
.show > .btn-danger.btn-link.dropdown-toggle:focus,
.show > .btn-danger.btn-link.dropdown-toggle:hover {
  background-color: transparent;
  color: #ff5555;
  text-decoration: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-neutral {
  background-color: #FFFFFF;
  color: #dc3741;
}

.btn-neutral:hover,
.btn-neutral:focus,
.btn-neutral:not(:disabled):not(.disabled):active,
.btn-neutral:not(:disabled):not(.disabled).active,
.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn-neutral:active:hover,
.btn-neutral.active:hover,
.show > .btn-neutral.dropdown-toggle,
.show > .btn-neutral.dropdown-toggle:focus,
.show > .btn-neutral.dropdown-toggle:hover {
  background-color: #FFFFFF;
  color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-neutral:hover {
  -webkit-box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
          box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-neutral.disabled,
.btn-neutral.disabled:hover,
.btn-neutral.disabled:focus,
.btn-neutral.disabled.focus,
.btn-neutral.disabled:active,
.btn-neutral.disabled.active,
.btn-neutral:disabled,
.btn-neutral:disabled:hover,
.btn-neutral:disabled:focus,
.btn-neutral:disabled.focus,
.btn-neutral:disabled:active,
.btn-neutral:disabled.active,
.btn-neutral[disabled],
.btn-neutral[disabled]:hover,
.btn-neutral[disabled]:focus,
.btn-neutral[disabled].focus,
.btn-neutral[disabled]:active,
.btn-neutral[disabled].active,
fieldset[disabled] .btn-neutral,
fieldset[disabled] .btn-neutral:hover,
fieldset[disabled] .btn-neutral:focus,
fieldset[disabled] .btn-neutral.focus,
fieldset[disabled] .btn-neutral:active,
fieldset[disabled] .btn-neutral.active {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
}

.btn-neutral.btn-danger {
  color: #FF3636;
}

.btn-neutral.btn-danger:hover,
.btn-neutral.btn-danger:focus,
.btn-neutral.btn-danger:active {
  color: #ff5555;
}

.btn-neutral.btn-primary {
  color: #dc3741;
}

.btn-neutral.btn-primary:hover,
.btn-neutral.btn-primary:focus,
.btn-neutral.btn-primary:active {
  color: #e1515a;
}

.btn-neutral.btn-info {
  color: #37DCD2;
}

.btn-neutral.btn-info:hover,
.btn-neutral.btn-info:focus,
.btn-neutral.btn-info:active {
  color: #51e1d8;
}

.btn-neutral.btn-warning {
  color: #FFB236;
}

.btn-neutral.btn-warning:hover,
.btn-neutral.btn-warning:focus,
.btn-neutral.btn-warning:active {
  color: #ffbe55;
}

.btn-neutral.btn-success {
  color: #18ce0f;
}

.btn-neutral.btn-success:hover,
.btn-neutral.btn-success:focus,
.btn-neutral.btn-success:active {
  color: #1beb11;
}

.btn-neutral.btn-default {
  color: #888888;
}

.btn-neutral.btn-default:hover,
.btn-neutral.btn-default:focus,
.btn-neutral.btn-default:active {
  color: #979797;
}

.btn-neutral:hover,
.btn-neutral:focus,
.btn-neutral:not(:disabled):not(.disabled):active,
.btn-neutral:not(:disabled):not(.disabled).active,
.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn-neutral:active:hover,
.btn-neutral.active:hover,
.show > .btn-neutral.dropdown-toggle,
.show > .btn-neutral.dropdown-toggle:focus,
.show > .btn-neutral.dropdown-toggle:hover {
  background-color: #FFFFFF;
  color: #e1515a;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-neutral:hover,
.btn-neutral:focus {
  color: #e1515a;
}

.btn-neutral:hover:not(.nav-link),
.btn-neutral:focus:not(.nav-link) {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-neutral.btn-simple {
  color: #FFFFFF;
  border-color: #FFFFFF;
}

.btn-neutral.btn-simple:hover,
.btn-neutral.btn-simple:focus,
.btn-neutral.btn-simple:not(:disabled):not(.disabled):active,
.btn-neutral.btn-simple:not(:disabled):not(.disabled).active,
.btn-neutral.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn-neutral.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn-neutral.btn-simple:active:hover,
.btn-neutral.btn-simple.active:hover,
.show > .btn-neutral.btn-simple.dropdown-toggle,
.show > .btn-neutral.btn-simple.dropdown-toggle:focus,
.show > .btn-neutral.btn-simple.dropdown-toggle:hover {
  background-color: transparent;
  color: #FFFFFF;
  border-color: #FFFFFF;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-neutral.btn-link {
  color: #FFFFFF;
}

.btn-neutral.btn-link:hover,
.btn-neutral.btn-link:focus,
.btn-neutral.btn-link:not(:disabled):not(.disabled):active,
.btn-neutral.btn-link:not(:disabled):not(.disabled).active,
.btn-neutral.btn-link:not(:disabled):not(.disabled):active:focus,
.btn-neutral.btn-link:not(:disabled):not(.disabled).active:focus,
.btn-neutral.btn-link:active:hover,
.btn-neutral.btn-link.active:hover,
.show > .btn-neutral.btn-link.dropdown-toggle,
.show > .btn-neutral.btn-link.dropdown-toggle:focus,
.show > .btn-neutral.btn-link.dropdown-toggle:hover {
  background-color: transparent;
  color: #FFFFFF;
  text-decoration: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-round {
  border-width: 1px;
  border-radius: 30px !important;
  padding: 11px 23px;
}

.btn-round.btn-simple {
  padding: 10px 22px;
}

.btn-simple {
  border: 1px solid;
  border-color: #888888;
  padding: 10px 22px;
  background-color: transparent;
}

.btn-simple.disabled,
.btn-simple.disabled:hover,
.btn-simple.disabled:focus,
.btn-simple.disabled.focus,
.btn-simple.disabled:active,
.btn-simple.disabled.active,
.btn-simple:disabled,
.btn-simple:disabled:hover,
.btn-simple:disabled:focus,
.btn-simple:disabled.focus,
.btn-simple:disabled:active,
.btn-simple:disabled.active,
.btn-simple[disabled],
.btn-simple[disabled]:hover,
.btn-simple[disabled]:focus,
.btn-simple[disabled].focus,
.btn-simple[disabled]:active,
.btn-simple[disabled].active,
fieldset[disabled] .btn-simple,
fieldset[disabled] .btn-simple:hover,
fieldset[disabled] .btn-simple:focus,
fieldset[disabled] .btn-simple.focus,
fieldset[disabled] .btn-simple:active,
fieldset[disabled] .btn-simple.active,
.btn-link.disabled,
.btn-link.disabled:hover,
.btn-link.disabled:focus,
.btn-link.disabled.focus,
.btn-link.disabled:active,
.btn-link.disabled.active,
.btn-link:disabled,
.btn-link:disabled:hover,
.btn-link:disabled:focus,
.btn-link:disabled.focus,
.btn-link:disabled:active,
.btn-link:disabled.active,
.btn-link[disabled],
.btn-link[disabled]:hover,
.btn-link[disabled]:focus,
.btn-link[disabled].focus,
.btn-link[disabled]:active,
.btn-link[disabled].active,
fieldset[disabled]
.btn-link,
fieldset[disabled]
.btn-link:hover,
fieldset[disabled]
.btn-link:focus,
fieldset[disabled]
.btn-link.focus,
fieldset[disabled]
.btn-link:active,
fieldset[disabled]
.btn-link.active {
  background-color: transparent;
}

.btn-lg {
  font-size: 1em;
  border-radius: 0.25rem;
  padding: 15px 48px;
}

.btn-lg.btn-simple {
  padding: 14px 47px;
}

.btn-sm {
  font-size: 16px;
  border-radius: 0.1875rem;
  padding: 5px 15px;
}

.btn-sm.btn-simple {
  padding: 4px 14px;
}

.btn-link {
  border: 0;
  padding: 0.5rem 0.7rem;
  background-color: transparent;
}

.btn-wd {
  min-width: 140px;
}

.btn-group.select {
  width: 100%;
}

.btn-group.select .btn {
  text-align: left;
}

.btn-group.select .caret {
  position: absolute;
  top: 50%;
  margin-top: -1px;
  right: 8px;
}

.btn.btn-facebook {
  background-color: #3b5998;
  color: #fff;
}

.btn.btn-facebook:hover,
.btn.btn-facebook:focus,
.btn.btn-facebook:not(:disabled):not(.disabled):active,
.btn.btn-facebook:not(:disabled):not(.disabled).active,
.btn.btn-facebook:not(:disabled):not(.disabled):active:focus,
.btn.btn-facebook:not(:disabled):not(.disabled).active:focus,
.btn.btn-facebook:active:hover,
.btn.btn-facebook.active:hover,
.show > .btn.btn-facebook.dropdown-toggle,
.show > .btn.btn-facebook.dropdown-toggle:focus,
.show > .btn.btn-facebook.dropdown-toggle:hover {
  background-color: #4466ae;
  color: #fff;
}

.btn.btn-facebook.btn-simple {
  color: #3b5998;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #3b5998;
}

.btn.btn-facebook.btn-simple:hover,
.btn.btn-facebook.btn-simple:focus,
.btn.btn-facebook.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-facebook.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-facebook.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-facebook.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-facebook.btn-simple:active:hover,
.btn.btn-facebook.btn-simple.active:hover,
.show > .btn.btn-facebook.btn-simple.dropdown-toggle,
.show > .btn.btn-facebook.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-facebook.btn-simple.dropdown-toggle:hover {
  color: #4466ae;
  border-color: #4466ae;
  background-color: transparent;
}

.btn.btn-facebook.btn-neutral {
  color: #3b5998;
  background-color: #FFFFFF;
}

.btn.btn-facebook.btn-neutral:hover,
.btn.btn-facebook.btn-neutral:focus,
.btn.btn-facebook.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-facebook.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-facebook.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-facebook.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-facebook.btn-neutral:active:hover,
.btn.btn-facebook.btn-neutral.active:hover,
.show > .btn.btn-facebook.btn-neutral.dropdown-toggle,
.show > .btn.btn-facebook.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-facebook.btn-neutral.dropdown-toggle:hover {
  color: #4466ae;
  background-color: #FFFFFF;
}

.btn.btn-twitter {
  background-color: #55acee;
  color: #fff;
}

.btn.btn-twitter:hover,
.btn.btn-twitter:focus,
.btn.btn-twitter:not(:disabled):not(.disabled):active,
.btn.btn-twitter:not(:disabled):not(.disabled).active,
.btn.btn-twitter:not(:disabled):not(.disabled):active:focus,
.btn.btn-twitter:not(:disabled):not(.disabled).active:focus,
.btn.btn-twitter:active:hover,
.btn.btn-twitter.active:hover,
.show > .btn.btn-twitter.dropdown-toggle,
.show > .btn.btn-twitter.dropdown-toggle:focus,
.show > .btn.btn-twitter.dropdown-toggle:hover {
  background-color: #71baf1;
  color: #fff;
}

.btn.btn-twitter.btn-simple {
  color: #55acee;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #55acee;
}

.btn.btn-twitter.btn-simple:hover,
.btn.btn-twitter.btn-simple:focus,
.btn.btn-twitter.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-twitter.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-twitter.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-twitter.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-twitter.btn-simple:active:hover,
.btn.btn-twitter.btn-simple.active:hover,
.show > .btn.btn-twitter.btn-simple.dropdown-toggle,
.show > .btn.btn-twitter.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-twitter.btn-simple.dropdown-toggle:hover {
  color: #71baf1;
  border-color: #71baf1;
  background-color: transparent;
}

.btn.btn-twitter.btn-neutral {
  color: #55acee;
  background-color: #FFFFFF;
}

.btn.btn-twitter.btn-neutral:hover,
.btn.btn-twitter.btn-neutral:focus,
.btn.btn-twitter.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-twitter.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-twitter.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-twitter.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-twitter.btn-neutral:active:hover,
.btn.btn-twitter.btn-neutral.active:hover,
.show > .btn.btn-twitter.btn-neutral.dropdown-toggle,
.show > .btn.btn-twitter.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-twitter.btn-neutral.dropdown-toggle:hover {
  color: #71baf1;
  background-color: #FFFFFF;
}

.btn.btn-pinterest {
  background-color: #cc2127;
  color: #fff;
}

.btn.btn-pinterest:hover,
.btn.btn-pinterest:focus,
.btn.btn-pinterest:not(:disabled):not(.disabled):active,
.btn.btn-pinterest:not(:disabled):not(.disabled).active,
.btn.btn-pinterest:not(:disabled):not(.disabled):active:focus,
.btn.btn-pinterest:not(:disabled):not(.disabled).active:focus,
.btn.btn-pinterest:active:hover,
.btn.btn-pinterest.active:hover,
.show > .btn.btn-pinterest.dropdown-toggle,
.show > .btn.btn-pinterest.dropdown-toggle:focus,
.show > .btn.btn-pinterest.dropdown-toggle:hover {
  background-color: #dd2e34;
  color: #fff;
}

.btn.btn-pinterest.btn-simple {
  color: #cc2127;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #cc2127;
}

.btn.btn-pinterest.btn-simple:hover,
.btn.btn-pinterest.btn-simple:focus,
.btn.btn-pinterest.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-pinterest.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-pinterest.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-pinterest.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-pinterest.btn-simple:active:hover,
.btn.btn-pinterest.btn-simple.active:hover,
.show > .btn.btn-pinterest.btn-simple.dropdown-toggle,
.show > .btn.btn-pinterest.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-pinterest.btn-simple.dropdown-toggle:hover {
  color: #dd2e34;
  border-color: #dd2e34;
  background-color: transparent;
}

.btn.btn-pinterest.btn-neutral {
  color: #cc2127;
  background-color: #FFFFFF;
}

.btn.btn-pinterest.btn-neutral:hover,
.btn.btn-pinterest.btn-neutral:focus,
.btn.btn-pinterest.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-pinterest.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-pinterest.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-pinterest.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-pinterest.btn-neutral:active:hover,
.btn.btn-pinterest.btn-neutral.active:hover,
.show > .btn.btn-pinterest.btn-neutral.dropdown-toggle,
.show > .btn.btn-pinterest.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-pinterest.btn-neutral.dropdown-toggle:hover {
  color: #dd2e34;
  background-color: #FFFFFF;
}

.btn.btn-google {
  background-color: #dd4b39;
  color: #fff;
}

.btn.btn-google:hover,
.btn.btn-google:focus,
.btn.btn-google:not(:disabled):not(.disabled):active,
.btn.btn-google:not(:disabled):not(.disabled).active,
.btn.btn-google:not(:disabled):not(.disabled):active:focus,
.btn.btn-google:not(:disabled):not(.disabled).active:focus,
.btn.btn-google:active:hover,
.btn.btn-google.active:hover,
.show > .btn.btn-google.dropdown-toggle,
.show > .btn.btn-google.dropdown-toggle:focus,
.show > .btn.btn-google.dropdown-toggle:hover {
  background-color: #e16353;
  color: #fff;
}

.btn.btn-google.btn-simple {
  color: #dd4b39;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #dd4b39;
}

.btn.btn-google.btn-simple:hover,
.btn.btn-google.btn-simple:focus,
.btn.btn-google.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-google.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-google.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-google.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-google.btn-simple:active:hover,
.btn.btn-google.btn-simple.active:hover,
.show > .btn.btn-google.btn-simple.dropdown-toggle,
.show > .btn.btn-google.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-google.btn-simple.dropdown-toggle:hover {
  color: #e16353;
  border-color: #e16353;
  background-color: transparent;
}

.btn.btn-google.btn-neutral {
  color: #dd4b39;
  background-color: #FFFFFF;
}

.btn.btn-google.btn-neutral:hover,
.btn.btn-google.btn-neutral:focus,
.btn.btn-google.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-google.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-google.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-google.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-google.btn-neutral:active:hover,
.btn.btn-google.btn-neutral.active:hover,
.show > .btn.btn-google.btn-neutral.dropdown-toggle,
.show > .btn.btn-google.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-google.btn-neutral.dropdown-toggle:hover {
  color: #e16353;
  background-color: #FFFFFF;
}

.btn.btn-linkedin {
  background-color: #0077B5;
  color: #fff;
}

.btn.btn-linkedin:hover,
.btn.btn-linkedin:focus,
.btn.btn-linkedin:not(:disabled):not(.disabled):active,
.btn.btn-linkedin:not(:disabled):not(.disabled).active,
.btn.btn-linkedin:not(:disabled):not(.disabled):active:focus,
.btn.btn-linkedin:not(:disabled):not(.disabled).active:focus,
.btn.btn-linkedin:active:hover,
.btn.btn-linkedin.active:hover,
.show > .btn.btn-linkedin.dropdown-toggle,
.show > .btn.btn-linkedin.dropdown-toggle:focus,
.show > .btn.btn-linkedin.dropdown-toggle:hover {
  background-color: #008bd4;
  color: #fff;
}

.btn.btn-linkedin.btn-simple {
  color: #0077B5;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #0077B5;
}

.btn.btn-linkedin.btn-simple:hover,
.btn.btn-linkedin.btn-simple:focus,
.btn.btn-linkedin.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-linkedin.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-linkedin.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-linkedin.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-linkedin.btn-simple:active:hover,
.btn.btn-linkedin.btn-simple.active:hover,
.show > .btn.btn-linkedin.btn-simple.dropdown-toggle,
.show > .btn.btn-linkedin.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-linkedin.btn-simple.dropdown-toggle:hover {
  color: #008bd4;
  border-color: #008bd4;
  background-color: transparent;
}

.btn.btn-linkedin.btn-neutral {
  color: #0077B5;
  background-color: #FFFFFF;
}

.btn.btn-linkedin.btn-neutral:hover,
.btn.btn-linkedin.btn-neutral:focus,
.btn.btn-linkedin.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-linkedin.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-linkedin.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-linkedin.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-linkedin.btn-neutral:active:hover,
.btn.btn-linkedin.btn-neutral.active:hover,
.show > .btn.btn-linkedin.btn-neutral.dropdown-toggle,
.show > .btn.btn-linkedin.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-linkedin.btn-neutral.dropdown-toggle:hover {
  color: #008bd4;
  background-color: #FFFFFF;
}

.btn.btn-dribbble {
  background-color: #ea4c89;
  color: #fff;
}

.btn.btn-dribbble:hover,
.btn.btn-dribbble:focus,
.btn.btn-dribbble:not(:disabled):not(.disabled):active,
.btn.btn-dribbble:not(:disabled):not(.disabled).active,
.btn.btn-dribbble:not(:disabled):not(.disabled):active:focus,
.btn.btn-dribbble:not(:disabled):not(.disabled).active:focus,
.btn.btn-dribbble:active:hover,
.btn.btn-dribbble.active:hover,
.show > .btn.btn-dribbble.dropdown-toggle,
.show > .btn.btn-dribbble.dropdown-toggle:focus,
.show > .btn.btn-dribbble.dropdown-toggle:hover {
  background-color: #ed679b;
  color: #fff;
}

.btn.btn-dribbble.btn-simple {
  color: #ea4c89;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #ea4c89;
}

.btn.btn-dribbble.btn-simple:hover,
.btn.btn-dribbble.btn-simple:focus,
.btn.btn-dribbble.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-dribbble.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-dribbble.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-dribbble.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-dribbble.btn-simple:active:hover,
.btn.btn-dribbble.btn-simple.active:hover,
.show > .btn.btn-dribbble.btn-simple.dropdown-toggle,
.show > .btn.btn-dribbble.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-dribbble.btn-simple.dropdown-toggle:hover {
  color: #ed679b;
  border-color: #ed679b;
  background-color: transparent;
}

.btn.btn-dribbble.btn-neutral {
  color: #ea4c89;
  background-color: #FFFFFF;
}

.btn.btn-dribbble.btn-neutral:hover,
.btn.btn-dribbble.btn-neutral:focus,
.btn.btn-dribbble.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-dribbble.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-dribbble.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-dribbble.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-dribbble.btn-neutral:active:hover,
.btn.btn-dribbble.btn-neutral.active:hover,
.show > .btn.btn-dribbble.btn-neutral.dropdown-toggle,
.show > .btn.btn-dribbble.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-dribbble.btn-neutral.dropdown-toggle:hover {
  color: #ed679b;
  background-color: #FFFFFF;
}

.btn.btn-github {
  background-color: #333333;
  color: #fff;
}

.btn.btn-github:hover,
.btn.btn-github:focus,
.btn.btn-github:not(:disabled):not(.disabled):active,
.btn.btn-github:not(:disabled):not(.disabled).active,
.btn.btn-github:not(:disabled):not(.disabled):active:focus,
.btn.btn-github:not(:disabled):not(.disabled).active:focus,
.btn.btn-github:active:hover,
.btn.btn-github.active:hover,
.show > .btn.btn-github.dropdown-toggle,
.show > .btn.btn-github.dropdown-toggle:focus,
.show > .btn.btn-github.dropdown-toggle:hover {
  background-color: #424242;
  color: #fff;
}

.btn.btn-github.btn-simple {
  color: #333333;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #333333;
}

.btn.btn-github.btn-simple:hover,
.btn.btn-github.btn-simple:focus,
.btn.btn-github.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-github.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-github.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-github.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-github.btn-simple:active:hover,
.btn.btn-github.btn-simple.active:hover,
.show > .btn.btn-github.btn-simple.dropdown-toggle,
.show > .btn.btn-github.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-github.btn-simple.dropdown-toggle:hover {
  color: #424242;
  border-color: #424242;
  background-color: transparent;
}

.btn.btn-github.btn-neutral {
  color: #333333;
  background-color: #FFFFFF;
}

.btn.btn-github.btn-neutral:hover,
.btn.btn-github.btn-neutral:focus,
.btn.btn-github.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-github.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-github.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-github.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-github.btn-neutral:active:hover,
.btn.btn-github.btn-neutral.active:hover,
.show > .btn.btn-github.btn-neutral.dropdown-toggle,
.show > .btn.btn-github.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-github.btn-neutral.dropdown-toggle:hover {
  color: #424242;
  background-color: #FFFFFF;
}

.btn.btn-youtube {
  background-color: #e52d27;
  color: #fff;
}

.btn.btn-youtube:hover,
.btn.btn-youtube:focus,
.btn.btn-youtube:not(:disabled):not(.disabled):active,
.btn.btn-youtube:not(:disabled):not(.disabled).active,
.btn.btn-youtube:not(:disabled):not(.disabled):active:focus,
.btn.btn-youtube:not(:disabled):not(.disabled).active:focus,
.btn.btn-youtube:active:hover,
.btn.btn-youtube.active:hover,
.show > .btn.btn-youtube.dropdown-toggle,
.show > .btn.btn-youtube.dropdown-toggle:focus,
.show > .btn.btn-youtube.dropdown-toggle:hover {
  background-color: #e84842;
  color: #fff;
}

.btn.btn-youtube.btn-simple {
  color: #e52d27;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #e52d27;
}

.btn.btn-youtube.btn-simple:hover,
.btn.btn-youtube.btn-simple:focus,
.btn.btn-youtube.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-youtube.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-youtube.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-youtube.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-youtube.btn-simple:active:hover,
.btn.btn-youtube.btn-simple.active:hover,
.show > .btn.btn-youtube.btn-simple.dropdown-toggle,
.show > .btn.btn-youtube.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-youtube.btn-simple.dropdown-toggle:hover {
  color: #e84842;
  border-color: #e84842;
  background-color: transparent;
}

.btn.btn-youtube.btn-neutral {
  color: #e52d27;
  background-color: #FFFFFF;
}

.btn.btn-youtube.btn-neutral:hover,
.btn.btn-youtube.btn-neutral:focus,
.btn.btn-youtube.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-youtube.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-youtube.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-youtube.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-youtube.btn-neutral:active:hover,
.btn.btn-youtube.btn-neutral.active:hover,
.show > .btn.btn-youtube.btn-neutral.dropdown-toggle,
.show > .btn.btn-youtube.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-youtube.btn-neutral.dropdown-toggle:hover {
  color: #e84842;
  background-color: #FFFFFF;
}

.btn.btn-instagram {
  background-color: #125688;
  color: #fff;
}

.btn.btn-instagram:hover,
.btn.btn-instagram:focus,
.btn.btn-instagram:not(:disabled):not(.disabled):active,
.btn.btn-instagram:not(:disabled):not(.disabled).active,
.btn.btn-instagram:not(:disabled):not(.disabled):active:focus,
.btn.btn-instagram:not(:disabled):not(.disabled).active:focus,
.btn.btn-instagram:active:hover,
.btn.btn-instagram.active:hover,
.show > .btn.btn-instagram.dropdown-toggle,
.show > .btn.btn-instagram.dropdown-toggle:focus,
.show > .btn.btn-instagram.dropdown-toggle:hover {
  background-color: #1667a3;
  color: #fff;
}

.btn.btn-instagram.btn-simple {
  color: #125688;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #125688;
}

.btn.btn-instagram.btn-simple:hover,
.btn.btn-instagram.btn-simple:focus,
.btn.btn-instagram.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-instagram.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-instagram.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-instagram.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-instagram.btn-simple:active:hover,
.btn.btn-instagram.btn-simple.active:hover,
.show > .btn.btn-instagram.btn-simple.dropdown-toggle,
.show > .btn.btn-instagram.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-instagram.btn-simple.dropdown-toggle:hover {
  color: #1667a3;
  border-color: #1667a3;
  background-color: transparent;
}

.btn.btn-instagram.btn-neutral {
  color: #125688;
  background-color: #FFFFFF;
}

.btn.btn-instagram.btn-neutral:hover,
.btn.btn-instagram.btn-neutral:focus,
.btn.btn-instagram.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-instagram.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-instagram.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-instagram.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-instagram.btn-neutral:active:hover,
.btn.btn-instagram.btn-neutral.active:hover,
.show > .btn.btn-instagram.btn-neutral.dropdown-toggle,
.show > .btn.btn-instagram.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-instagram.btn-neutral.dropdown-toggle:hover {
  color: #1667a3;
  background-color: #FFFFFF;
}

.btn.btn-reddit {
  background-color: #ff4500;
  color: #fff;
}

.btn.btn-reddit:hover,
.btn.btn-reddit:focus,
.btn.btn-reddit:not(:disabled):not(.disabled):active,
.btn.btn-reddit:not(:disabled):not(.disabled).active,
.btn.btn-reddit:not(:disabled):not(.disabled):active:focus,
.btn.btn-reddit:not(:disabled):not(.disabled).active:focus,
.btn.btn-reddit:active:hover,
.btn.btn-reddit.active:hover,
.show > .btn.btn-reddit.dropdown-toggle,
.show > .btn.btn-reddit.dropdown-toggle:focus,
.show > .btn.btn-reddit.dropdown-toggle:hover {
  background-color: #ff5b1f;
  color: #fff;
}

.btn.btn-reddit.btn-simple {
  color: #ff4500;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #ff4500;
}

.btn.btn-reddit.btn-simple:hover,
.btn.btn-reddit.btn-simple:focus,
.btn.btn-reddit.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-reddit.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-reddit.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-reddit.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-reddit.btn-simple:active:hover,
.btn.btn-reddit.btn-simple.active:hover,
.show > .btn.btn-reddit.btn-simple.dropdown-toggle,
.show > .btn.btn-reddit.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-reddit.btn-simple.dropdown-toggle:hover {
  color: #ff5b1f;
  border-color: #ff5b1f;
  background-color: transparent;
}

.btn.btn-reddit.btn-neutral {
  color: #ff4500;
  background-color: #FFFFFF;
}

.btn.btn-reddit.btn-neutral:hover,
.btn.btn-reddit.btn-neutral:focus,
.btn.btn-reddit.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-reddit.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-reddit.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-reddit.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-reddit.btn-neutral:active:hover,
.btn.btn-reddit.btn-neutral.active:hover,
.show > .btn.btn-reddit.btn-neutral.dropdown-toggle,
.show > .btn.btn-reddit.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-reddit.btn-neutral.dropdown-toggle:hover {
  color: #ff5b1f;
  background-color: #FFFFFF;
}

.btn.btn-tumblr {
  background-color: #35465c;
  color: #fff;
}

.btn.btn-tumblr:hover,
.btn.btn-tumblr:focus,
.btn.btn-tumblr:not(:disabled):not(.disabled):active,
.btn.btn-tumblr:not(:disabled):not(.disabled).active,
.btn.btn-tumblr:not(:disabled):not(.disabled):active:focus,
.btn.btn-tumblr:not(:disabled):not(.disabled).active:focus,
.btn.btn-tumblr:active:hover,
.btn.btn-tumblr.active:hover,
.show > .btn.btn-tumblr.dropdown-toggle,
.show > .btn.btn-tumblr.dropdown-toggle:focus,
.show > .btn.btn-tumblr.dropdown-toggle:hover {
  background-color: #40556f;
  color: #fff;
}

.btn.btn-tumblr.btn-simple {
  color: #35465c;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #35465c;
}

.btn.btn-tumblr.btn-simple:hover,
.btn.btn-tumblr.btn-simple:focus,
.btn.btn-tumblr.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-tumblr.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-tumblr.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-tumblr.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-tumblr.btn-simple:active:hover,
.btn.btn-tumblr.btn-simple.active:hover,
.show > .btn.btn-tumblr.btn-simple.dropdown-toggle,
.show > .btn.btn-tumblr.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-tumblr.btn-simple.dropdown-toggle:hover {
  color: #40556f;
  border-color: #40556f;
  background-color: transparent;
}

.btn.btn-tumblr.btn-neutral {
  color: #35465c;
  background-color: #FFFFFF;
}

.btn.btn-tumblr.btn-neutral:hover,
.btn.btn-tumblr.btn-neutral:focus,
.btn.btn-tumblr.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-tumblr.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-tumblr.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-tumblr.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-tumblr.btn-neutral:active:hover,
.btn.btn-tumblr.btn-neutral.active:hover,
.show > .btn.btn-tumblr.btn-neutral.dropdown-toggle,
.show > .btn.btn-tumblr.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-tumblr.btn-neutral.dropdown-toggle:hover {
  color: #40556f;
  background-color: #FFFFFF;
}

.btn.btn-behance {
  background-color: #1769ff;
  color: #fff;
}

.btn.btn-behance:hover,
.btn.btn-behance:focus,
.btn.btn-behance:not(:disabled):not(.disabled):active,
.btn.btn-behance:not(:disabled):not(.disabled).active,
.btn.btn-behance:not(:disabled):not(.disabled):active:focus,
.btn.btn-behance:not(:disabled):not(.disabled).active:focus,
.btn.btn-behance:active:hover,
.btn.btn-behance.active:hover,
.show > .btn.btn-behance.dropdown-toggle,
.show > .btn.btn-behance.dropdown-toggle:focus,
.show > .btn.btn-behance.dropdown-toggle:hover {
  background-color: #367dff;
  color: #fff;
}

.btn.btn-behance.btn-simple {
  color: #1769ff;
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: transparent;
  border-color: #1769ff;
}

.btn.btn-behance.btn-simple:hover,
.btn.btn-behance.btn-simple:focus,
.btn.btn-behance.btn-simple:not(:disabled):not(.disabled):active,
.btn.btn-behance.btn-simple:not(:disabled):not(.disabled).active,
.btn.btn-behance.btn-simple:not(:disabled):not(.disabled):active:focus,
.btn.btn-behance.btn-simple:not(:disabled):not(.disabled).active:focus,
.btn.btn-behance.btn-simple:active:hover,
.btn.btn-behance.btn-simple.active:hover,
.show > .btn.btn-behance.btn-simple.dropdown-toggle,
.show > .btn.btn-behance.btn-simple.dropdown-toggle:focus,
.show > .btn.btn-behance.btn-simple.dropdown-toggle:hover {
  color: #367dff;
  border-color: #367dff;
  background-color: transparent;
}

.btn.btn-behance.btn-neutral {
  color: #1769ff;
  background-color: #FFFFFF;
}

.btn.btn-behance.btn-neutral:hover,
.btn.btn-behance.btn-neutral:focus,
.btn.btn-behance.btn-neutral:not(:disabled):not(.disabled):active,
.btn.btn-behance.btn-neutral:not(:disabled):not(.disabled).active,
.btn.btn-behance.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn.btn-behance.btn-neutral:not(:disabled):not(.disabled).active:focus,
.btn.btn-behance.btn-neutral:active:hover,
.btn.btn-behance.btn-neutral.active:hover,
.show > .btn.btn-behance.btn-neutral.dropdown-toggle,
.show > .btn.btn-behance.btn-neutral.dropdown-toggle:focus,
.show > .btn.btn-behance.btn-neutral.dropdown-toggle:hover {
  color: #367dff;
  background-color: #FFFFFF;
}

.form-control::-moz-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control:-moz-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control::-webkit-input-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control:-ms-input-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control {
  background-color: transparent;
  border: 1px solid #E3E3E3;
  border-radius: 30px;
  color: #2c2c2c;
  line-height: normal;
  font-size: 0.8571em;
  -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.has-success .form-control {
  border-color: #E3E3E3;
}

.form-control:focus {
  border: 1px solid #dc3741;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
  color: #2c2c2c;
}

.form-control:focus + .input-group-text,
.form-control:focus ~ .input-group-text {
  border: 1px solid #dc3741;
  border-left: none;
  background-color: transparent;
}

.has-success .form-control,
.has-error .form-control,
.has-success .form-control:focus,
.has-error .form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.has-success .form-control:focus {
  border-color: #1be611;
}

.has-danger .form-control.form-control-success,
.has-danger .form-control.form-control-danger,
.has-success .form-control.form-control-success,
.has-success .form-control.form-control-danger {
  background-image: none;
}

.has-danger .form-control {
  border-color: #ffcfcf;
  color: #FF3636;
  background-color: rgba(222, 222, 222, 0.1);
}

.has-danger .form-control:focus {
  background-color: #FFFFFF;
}

.form-control + .form-control-feedback {
  border-radius: 0.25rem;
  font-size: 16px;
  margin-top: -7px;
  position: absolute;
  right: 10px;
  top: 50%;
  vertical-align: middle;
}

.open .form-control {
  border-radius: 0.25rem 0.25rem 0 0;
  border-bottom-color: transparent;
}

.has-success:after,
.has-danger:after {
  font-family: 'Nucleo Outline';
  content: "\EA22";
  display: inline-block;
  position: absolute;
  right: 20px;
  top: 12px;
  color: #18ce0f;
  font-size: 11px;
}

.has-success.input-lg:after,
.has-danger.input-lg:after {
  font-size: 13px;
  top: 13px;
}

.has-danger:after {
  content: "\EA53";
  color: #FF3636;
}

.form-group.no-border.input-lg .input-group-text,
.input-group.no-border.input-lg .input-group-text {
  padding: 15px 0 15px 19px;
}

.form-group.no-border.input-lg .form-control,
.input-group.no-border.input-lg .form-control {
  padding: 15px 19px;
}

.form-group.no-border.input-lg .form-control + .input-group-text,
.input-group.no-border.input-lg .form-control + .input-group-text {
  padding: 15px 19px 15px 0;
}

.form-group.input-lg .form-control,
.input-group.input-lg .form-control {
  padding: 14px 18px;
}

.form-group.input-lg .form-control + .input-group-text,
.input-group.input-lg .form-control + .input-group-text {
  padding: 14px 18px 14px 0;
}

.form-group.input-lg .input-group-text,
.input-group.input-lg .input-group-text {
  padding: 14px 0 15px 18px;
}

.form-group.input-lg .input-group-text + .form-control,
.input-group.input-lg .input-group-text + .form-control {
  padding: 15px 18px 15px 16px;
}

.form-group.no-border .form-control,
.input-group.no-border .form-control {
  padding: 11px 19px;
}

.form-group.no-border .form-control + .input-group-text,
.input-group.no-border .form-control + .input-group-text {
  padding: 11px 19px 11px 0;
}

.form-group.no-border .input-group-text,
.input-group.no-border .input-group-text {
  padding: 11px 0 11px 19px;
}

.form-group .form-control,
.input-group .form-control {
  padding: 10px 18px 10px 18px;
}

.form-group .form-control + .input-group-text,
.input-group .form-control + .input-group-text {
  padding: 10px 18px 10px 0;
}

.form-group .input-group-text,
.input-group .input-group-text {
  padding: 10px 0 10px 18px;
}

.form-group .input-group-text + .form-control,
.form-group .input-group-text ~ .form-control,
.input-group .input-group-text + .form-control,
.input-group .input-group-text ~ .form-control {
  padding: 10px 19px 11px 16px;
}

.form-group.no-border .form-control,
.form-group.no-border .form-control + .input-group-text,
.input-group.no-border .form-control,
.input-group.no-border .form-control + .input-group-text {
  background-color: rgba(222, 222, 222, 0.3);
  border: medium none;
}

.form-group.no-border .form-control:focus,
.form-group.no-border .form-control:active,
.form-group.no-border .form-control:active,
.form-group.no-border .form-control + .input-group-text:focus,
.form-group.no-border .form-control + .input-group-text:active,
.form-group.no-border .form-control + .input-group-text:active,
.input-group.no-border .form-control:focus,
.input-group.no-border .form-control:active,
.input-group.no-border .form-control:active,
.input-group.no-border .form-control + .input-group-text:focus,
.input-group.no-border .form-control + .input-group-text:active,
.input-group.no-border .form-control + .input-group-text:active {
  border: medium none;
  background-color: rgba(222, 222, 222, 0.5);
}

.form-group.no-border .form-control:focus + .input-group-text,
.input-group.no-border .form-control:focus + .input-group-text {
  background-color: rgba(222, 222, 222, 0.5);
}

.form-group.no-border .input-group-prepend .input-group-text,
.input-group.no-border .input-group-prepend .input-group-text {
  background-color: rgba(222, 222, 222, 0.3);
  border: none;
  border-left: transparent !important;
}

.form-group.no-border.input-group-focus.no-border .input-group-text,
.input-group.no-border.input-group-focus.no-border .input-group-text {
  background-color: rgba(222, 222, 222, 0.5);
}

.has-error .form-control-feedback,
.has-error .control-label {
  color: #FF3636;
}

.has-success .form-control-feedback,
.has-success .control-label {
  color: #18ce0f;
}

.input-group-text {
  background-color: #FFFFFF;
  border: 1px solid #E3E3E3;
  border-radius: 30px;
  color: #555555;
  -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
}

.input-group-focus .input-group-text {
  background-color: #FFFFFF;
  border-color: #dc3741;
}

.has-success .input-group-text,
.has-danger .input-group-text {
  background-color: #FFFFFF;
}

.has-danger .form-control:focus + .input-group-text {
  color: #FF3636;
}

.has-success .form-control:focus + .input-group-text {
  color: #18ce0f;
}

.input-group-text + .form-control,
.input-group-text ~ .form-control {
  padding: -0.5rem 0.7rem;
  padding-left: 18px;
}

.input-group-text i {
  width: 17px;
}

.input-group,
.form-group {
  margin-bottom: 10px;
  position: relative;
}

.input-group[disabled] .input-group-text {
  background-color: #E3E3E3;
}

.input-group .input-group-prepend,
.form-group .input-group-prepend {
  margin-right: 0;
}

.input-group .input-group-prepend .input-group-text,
.form-group .input-group-prepend .input-group-text {
  border-left: 1px solid #E3E3E3;
}

.input-group .input-group-append .input-group-text,
.form-group .input-group-append .input-group-text {
  border-right: 1px solid #E3E3E3;
  padding: 10px 18px 10px 0;
}

.input-group.input-group-focus .input-group-prepend .input-group-text,
.form-group.input-group-focus .input-group-prepend .input-group-text {
  border-left: 1px solid #f96332;
}

.input-group.input-group-focus .input-group-append .input-group-text,
.form-group.input-group-focus .input-group-append .input-group-text {
  border-right: 1px solid #f96332;
}

.input-group.input-group-focus.no-border .input-group-prepend .input-group-text,
.form-group.input-group-focus.no-border .input-group-prepend .input-group-text {
  border-left: transparent;
}

.input-group .form-control:first-child,
.input-group-text:first-child,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  border-right: 0 none;
}

.input-group .form-control:last-child,
.input-group-text:last-child,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
  border-left: 0 none;
}

.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #E3E3E3;
  color: #888888;
  cursor: not-allowed;
}

.input-group-btn .btn {
  border-width: 1px;
  padding: 11px 0.7rem;
}

.input-group-btn .btn-default:not(.btn-fill) {
  border-color: #DDDDDD;
}

.input-group-btn:last-child > .btn {
  margin-left: 0;
}

textarea.form-control {
  max-width: 100%;
  max-height: 80px;
  padding: 10px 10px 0 0;
  resize: none;
  border: none;
  border-bottom: 1px solid #E3E3E3;
  border-radius: 0;
  line-height: 2;
}

textarea.form-control:focus,
textarea.form-control:active {
  border-left: none;
  border-top: none;
  border-right: none;
}

.has-success.form-group .form-control,
.has-success.form-group.no-border .form-control,
.has-danger.form-group .form-control,
.has-danger.form-group.no-border .form-control {
  padding-right: 40px;
}

.form.form-newsletter .form-group {
  float: left;
  width: 78%;
  margin-right: 2%;
  margin-top: 9px;
}

.input-group .input-group-btn {
  padding: 0 12px;
}

.form-group input[type=file] {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100;
}

.progress-container {
  position: relative;
}

.progress-container + .progress-container,
.progress-container ~ .progress-container {
  margin-top: 15px;
}

.progress-container .progress-badge {
  color: #888888;
  font-size: 0.8571em;
  text-transform: uppercase;
}

.progress-container .progress {
  height: 1px;
  border-radius: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
  background: rgba(222, 222, 222, 0.8);
  margin-top: 14px;
}

.progress-container .progress .progress-bar {
  -webkit-box-shadow: none;
          box-shadow: none;
  background-color: #888888;
}

.progress-container .progress .progress-value {
  position: absolute;
  top: 2px;
  right: 0;
  color: #888888;
  font-size: 0.8571em;
}

.progress-container.progress-neutral .progress {
  background: rgba(255, 255, 255, 0.3);
}

.progress-container.progress-neutral .progress-bar {
  background: #FFFFFF;
}

.progress-container.progress-neutral .progress-value,
.progress-container.progress-neutral .progress-badge {
  color: #FFFFFF;
}

.progress-container.progress-primary .progress {
  background: rgba(220, 55, 65, 0.3);
}

.progress-container.progress-primary .progress-bar {
  background: #dc3741;
}

.progress-container.progress-primary .progress-value,
.progress-container.progress-primary .progress-badge {
  color: #dc3741;
}

.progress-container.progress-info .progress {
  background: rgba(55, 220, 210, 0.3);
}

.progress-container.progress-info .progress-bar {
  background: #37DCD2;
}

.progress-container.progress-info .progress-value,
.progress-container.progress-info .progress-badge {
  color: #37DCD2;
}

.progress-container.progress-success .progress {
  background: rgba(24, 206, 15, 0.3);
}

.progress-container.progress-success .progress-bar {
  background: #18ce0f;
}

.progress-container.progress-success .progress-value,
.progress-container.progress-success .progress-badge {
  color: #18ce0f;
}

.progress-container.progress-warning .progress {
  background: rgba(255, 178, 54, 0.3);
}

.progress-container.progress-warning .progress-bar {
  background: #FFB236;
}

.progress-container.progress-warning .progress-value,
.progress-container.progress-warning .progress-badge {
  color: #FFB236;
}

.progress-container.progress-danger .progress {
  background: rgba(255, 54, 54, 0.3);
}

.progress-container.progress-danger .progress-bar {
  background: #FF3636;
}

.progress-container.progress-danger .progress-value,
.progress-container.progress-danger .progress-badge {
  color: #FF3636;
}

.nav-pills.nav-pills-just-icons .nav-item .nav-link {
  text-align: center;
  border-radius: 50%;
  height: 80px;
  width: 80px;
  padding: 0;
  max-width: 80px;
  min-width: auto;
}

.nav-pills.nav-pills-just-icons .nav-item .nav-link i {
  line-height: 80px;
}

.nav-pills:not(.flex-column) .nav-item:not(:last-child) .nav-link {
  margin-right: 19px;
}

.nav-pills .nav-item .nav-link {
  padding: 10px 23px;
  background-color: rgba(222, 222, 222, 0.3);
  min-width: 100px;
  font-weight: 400;
  text-align: center;
  color: #444;
}

.nav-pills .nav-item .nav-link:hover {
  background-color: rgba(222, 222, 222, 0.3);
}

.nav-pills .nav-item .nav-link.active,
.nav-pills .nav-item .nav-link.active:focus,
.nav-pills .nav-item .nav-link.active:hover {
  background-color: #9A9A9A;
  color: #FFFFFF;
  -webkit-box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
}

.nav-pills .nav-item .nav-link.disabled,
.nav-pills .nav-item .nav-link:disabled,
.nav-pills .nav-item .nav-link[disabled] {
  opacity: .5;
}

.nav-pills .nav-item i {
  display: block;
  line-height: 60px;
  font-size: 24px;
}

.nav-pills.nav-pills-neutral .nav-item .nav-link {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.nav-pills.nav-pills-neutral .nav-item .nav-link.active,
.nav-pills.nav-pills-neutral .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-neutral .nav-item .nav-link.active:hover {
  background-color: #FFFFFF;
  color: #dc3741;
}

.nav-pills.nav-pills-primary .nav-item .nav-link.active,
.nav-pills.nav-pills-primary .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-primary .nav-item .nav-link.active:hover {
  background-color: #dc3741;
}

.nav-pills.nav-pills-info .nav-item .nav-link.active,
.nav-pills.nav-pills-info .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-info .nav-item .nav-link.active:hover {
  background-color: #37DCD2;
}

.nav-pills.nav-pills-success .nav-item .nav-link.active,
.nav-pills.nav-pills-success .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-success .nav-item .nav-link.active:hover {
  background-color: #18ce0f;
}

.nav-pills.nav-pills-warning .nav-item .nav-link.active,
.nav-pills.nav-pills-warning .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-warning .nav-item .nav-link.active:hover {
  background-color: #FFB236;
}

.nav-pills.nav-pills-danger .nav-item .nav-link.active,
.nav-pills.nav-pills-danger .nav-item .nav-link.active:focus,
.nav-pills.nav-pills-danger .nav-item .nav-link.active:hover {
  background-color: #FF3636;
}

.tab-space {
  padding: 20px 0 50px 0px;
}

.nav-align-center {
  text-align: center;
}

.nav-align-center .nav-pills {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.nav-pills.flex-column li > a {
  margin-bottom: 15px;
}

.nav-pills:not(.nav-pills-icons):not(.nav-pills-just-icons) .nav-item .nav-link {
  border-radius: 30px;
}

.nav-pills.nav-pills-icons .nav-item .nav-link {
  background-color: transparent;
}

.nav-pills.nav-pills-icons .nav-item i {
  font-size: 20px;
}

.nav-tabs {
  border: 0;
  padding: 15px 0.7rem;
}

.nav-tabs:not(.nav-tabs-neutral) > .nav-item > .nav-link.active {
  -webkit-box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
}

.card .nav-tabs {
  border-top-right-radius: 0.1875rem;
  border-top-left-radius: 0.1875rem;
}

.nav-tabs > .nav-item > .nav-link {
  color: #888888;
  margin: 0;
  margin-right: 5px;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 30px;
  font-size: 16px;
  padding: 11px 23px;
  line-height: 1.5;
}

.nav-tabs > .nav-item > .nav-link:hover {
  background-color: transparent;
}

.nav-tabs > .nav-item > .nav-link.active {
  background-color: #444;
  border-radius: 30px;
  color: #FFFFFF;
}

.nav-tabs > .nav-item > .nav-link i.now-ui-icons {
  font-size: 14px;
  position: relative;
  top: 1px;
  margin-right: 3px;
}

.nav-tabs > .nav-item.disabled > .nav-link,
.nav-tabs > .nav-item.disabled > .nav-link:hover {
  color: rgba(255, 255, 255, 0.5);
}

.nav-tabs.nav-tabs-neutral > .nav-item > .nav-link {
  color: #FFFFFF;
}

.nav-tabs.nav-tabs-neutral > .nav-item > .nav-link.active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.nav-tabs.nav-tabs-primary > .nav-item > .nav-link.active {
  background-color: #dc3741;
}

.nav-tabs.nav-tabs-info > .nav-item > .nav-link.active {
  background-color: #37DCD2;
}

.nav-tabs.nav-tabs-danger > .nav-item > .nav-link.active {
  background-color: #FF3636;
}

.nav-tabs.nav-tabs-warning > .nav-item > .nav-link.active {
  background-color: #FFB236;
}

.nav-tabs.nav-tabs-success > .nav-item > .nav-link.active {
  background-color: #18ce0f;
}

.navbar {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
  min-height: 53px;
  margin-bottom: 20px;
  -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
          box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
}

.navbar a {
  vertical-align: middle;
}

.navbar a:not(.btn):not(.dropdown-item) {
  color: #FFFFFF;
}

.navbar p {
  display: inline-block;
  margin: 0;
  line-height: 21px;
  font-weight: inherit;
  font-size: inherit;
}

.navbar .navbar-nav.navbar-logo {
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  width: 49px;
  top: -4px;
}

.navbar .navbar-nav .nav-link.btn {
  padding: 11px 22px;
}

.navbar .navbar-nav .nav-link.btn.btn-lg {
  padding: 15px 48px;
}

.navbar .navbar-nav .nav-link.btn.btn-sm {
  padding: 5px 15px;
}

.navbar .navbar-nav .nav-link:not(.btn) {
  text-transform: uppercase;
  font-size: 0.7142em;
  padding: 0.5rem 0.7rem;
  line-height: 1.625rem;
}

.navbar .navbar-nav .nav-link:not(.btn) i.fab + p,
.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons + p {
  margin-left: 3px;
}

.navbar .navbar-nav .nav-link:not(.btn) i.fab,
.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
  font-size: 18px;
  position: relative;
  top: 3px;
  text-align: center;
  width: 21px;
}

.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
  top: 4px;
  font-size: 16px;
}

.navbar .navbar-nav .nav-link:not(.btn).profile-photo .profile-photo-small {
  width: 27px;
  height: 27px;
}

.navbar .navbar-nav .nav-link:not(.btn).disabled {
  opacity: .5;
  color: #FFFFFF;
}

.navbar .navbar-nav .nav-item.active .nav-link:not(.btn),
.navbar .navbar-nav .nav-item .nav-link:not(.btn):focus,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):hover,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):active {
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 0.1875rem;
}

.navbar .logo-container {
  width: 27px;
  height: 27px;
  overflow: hidden;
  margin: 0 auto;
  border-radius: 50%;
  border: 1px solid transparent;
}

.navbar .navbar-brand {
  text-transform: uppercase;
  font-size: 0.8571em;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.625rem;
}

.navbar .navbar-toggler {
  width: 37px;
  height: 27px;
  outline: 0;
  cursor: pointer;
}

.navbar .navbar-toggler.navbar-toggler-left {
  position: relative;
  left: 0;
  padding-left: 0;
}

.navbar .navbar-toggler .navbar-toggler-bar.middle-bar {
  width: 17px;
  -webkit-transition: width .2s linear;
  transition: width .2s linear;
}

.navbar .navbar-toggler:hover .navbar-toggler-bar.middle-bar {
  width: 22px;
}

.navbar .button-dropdown .navbar-toggler-bar:nth-child(2) {
  width: 17px;
}

.navbar.navbar-transparent {
  background-color: transparent !important;
  -webkit-box-shadow: none;
          box-shadow: none;
  color: #FFFFFF;
  padding-top: 20px !important;
}

.navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item):not(.btn) {
  color: #888888;
}

.navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item):not(.btn).disabled {
  opacity: .5;
  color: #888888;
}

.navbar.bg-white:not(.navbar-transparent) .button-bar {
  background: #888888;
}

.navbar.bg-white:not(.navbar-transparent) .nav-item.active .nav-link:not(.btn),
.navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):focus,
.navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):hover,
.navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):active {
  background-color: rgba(222, 222, 222, 0.3);
}

.navbar.bg-white:not(.navbar-transparent) .logo-container {
  border: 1px solid #888888;
}

.bg-default {
  background-color: #888888 !important;
}

.bg-primary {
  background-color: #dc3741 !important;
}

.bg-info {
  background-color: #37DCD2 !important;
}

.bg-success {
  background-color: #18ce0f !important;
}

.bg-danger {
  background-color: #FF3636 !important;
}

.bg-warning {
  background-color: #FFB236 !important;
}

.bg-white {
  background-color: #FFFFFF !important;
}

.navbar p {
  line-height: 1.8em;
  font-size: 1em;
  font-weight: 400;
}

.navbar.navbar-absolute {
  position: absolute;
  width: 100%;
  padding-top: 10px;
  z-index: 1029;
}

.navbar .navbar-toggler {
  vertical-align: middle;
}

.navbar .navbar-toggler.navbar-toggler-left {
  top: 0;
}

.navbar .navbar-toggler.navbar-toggler-right {
  padding-right: 0;
  top: 8px;
}

.dropdown-menu {
  border: 0;
  -webkit-box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
  border-radius: 0.125rem;
  -webkit-transition: all 150ms linear;
  transition: all 150ms linear;
  font-size: 16px;
}

.dropdown-menu.dropdown-menu-right:before {
  left: auto;
  right: 10px;
}

.dropdown .dropdown-menu {
  -webkit-transform: translate3d(0, -25px, 0) !important;
  transform: translate3d(0, -25px, 0) !important;
  visibility: hidden;
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 100% !important;
}

.dropdown.show .dropdown-menu,
.dropdown-menu.open {
  opacity: 1;
  filter: alpha(opacity=100);
  visibility: visible;
  -webkit-transform: translate3d(0, 0px, 0) !important;
  transform: translate3d(0, 0px, 0) !important;
}

.dropdown-menu .dropdown-item,
.bootstrap-select .dropdown-menu.inner li a {
  font-size: 0.8571em;
  padding-top: .6rem;
  padding-bottom: .6rem;
  margin-top: 5px;
  -webkit-transition: all 150ms linear;
  transition: all 150ms linear;
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus,
.bootstrap-select .dropdown-menu.inner li a:hover,
.bootstrap-select .dropdown-menu.inner li a:focus {
  background-color: rgba(222, 222, 222, 0.3);
}

.dropdown-menu .dropdown-item.disabled,
.dropdown-menu .dropdown-item:disabled,
.bootstrap-select .dropdown-menu.inner li a.disabled,
.bootstrap-select .dropdown-menu.inner li a:disabled {
  color: rgba(182, 182, 182, 0.6);
}

.dropdown-menu .dropdown-item.disabled:hover,
.dropdown-menu .dropdown-item.disabled:focus,
.dropdown-menu .dropdown-item:disabled:hover,
.dropdown-menu .dropdown-item:disabled:focus,
.bootstrap-select .dropdown-menu.inner li a.disabled:hover,
.bootstrap-select .dropdown-menu.inner li a.disabled:focus,
.bootstrap-select .dropdown-menu.inner li a:disabled:hover,
.bootstrap-select .dropdown-menu.inner li a:disabled:focus {
  background-color: transparent;
}

.dropdown-menu:before {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: -5px;
  left: 10px;
  right: auto;
  color: #FFFFFF;
  border-bottom: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.dropdown-menu .dropdown-divider {
  background-color: rgba(222, 222, 222, 0.5);
}

.dropdown-menu .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(182, 182, 182, 0.6);
  font-size: 0.7142em;
  text-transform: uppercase;
  font-weight: 700;
}

.dropdown-menu.dropdown-primary {
  background-color: #da2a35;
}

.dropdown-menu.dropdown-primary:before {
  color: #da2a35;
}

.dropdown-menu.dropdown-primary .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-primary .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-primary .dropdown-item:hover,
.dropdown-menu.dropdown-primary .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-primary .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-info {
  background-color: #2adacf;
}

.dropdown-menu.dropdown-info:before {
  color: #2adacf;
}

.dropdown-menu.dropdown-info .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-info .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-info .dropdown-item:hover,
.dropdown-menu.dropdown-info .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-info .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-danger {
  background-color: #ff2727;
}

.dropdown-menu.dropdown-danger:before {
  color: #ff2727;
}

.dropdown-menu.dropdown-danger .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-danger .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-danger .dropdown-item:hover,
.dropdown-menu.dropdown-danger .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-danger .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-success {
  background-color: #16c00e;
}

.dropdown-menu.dropdown-success:before {
  color: #16c00e;
}

.dropdown-menu.dropdown-success .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-success .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-success .dropdown-item:hover,
.dropdown-menu.dropdown-success .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-success .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-warning {
  background-color: #ffac27;
}

.dropdown-menu.dropdown-warning:before {
  color: #ffac27;
}

.dropdown-menu.dropdown-warning .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(255, 255, 255, 0.8);
}

.dropdown-menu.dropdown-warning .dropdown-item {
  color: #FFFFFF;
}

.dropdown-menu.dropdown-warning .dropdown-item:hover,
.dropdown-menu.dropdown-warning .dropdown-item:focus {
  background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu.dropdown-warning .dropdown-divider {
  background-color: rgba(255, 255, 255, 0.2);
}

.button-dropdown {
  padding-right: 0.7rem;
  cursor: pointer;
}

.button-dropdown .dropdown-toggle {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  display: block;
}

.button-dropdown .dropdown-toggle:after {
  display: none;
}

.dropdown-menu i {
  margin-right: 5px;
  position: relative;
  top: 1px;
}

.dropdown-menu .now-ui-icons {
  margin-right: 10px;
  position: relative;
  top: 4px;
  font-size: 18px;
  margin-top: -5px;
  opacity: .5;
}

.dropdown-menu .dropdown-item.active,
.dropdown-menu .dropdown-item:active {
  color: inherit;
}

.dropup .dropdown-menu:before {
  display: none;
}

.dropup .dropdown-menu:after {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: auto;
  bottom: -5px;
  right: auto;
  left: 10px;
  color: #FFFFFF;
  border-top: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.dropup .dropdown-menu.dropdown-menu-right:after {
  right: 10px;
  left: auto;
}

.dropdown-menu .dropdown-item,
.bootstrap-select .dropdown-menu.inner li a {
  font-size: 0.8571em;
  padding-top: .6rem;
  padding-bottom: .6rem;
  margin-top: 5px;
  -webkit-transition: all 150ms linear;
  transition: all 150ms linear;
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus,
.bootstrap-select .dropdown-menu.inner li a:hover,
.bootstrap-select .dropdown-menu.inner li a:focus {
  background-color: rgba(222, 222, 222, 0.3);
}

.dropdown-menu .dropdown-item.disabled,
.dropdown-menu .dropdown-item:disabled,
.bootstrap-select .dropdown-menu.inner li a.disabled,
.bootstrap-select .dropdown-menu.inner li a:disabled {
  color: rgba(182, 182, 182, 0.6);
}

.dropdown-menu .dropdown-item.disabled:hover,
.dropdown-menu .dropdown-item.disabled:focus,
.dropdown-menu .dropdown-item:disabled:hover,
.dropdown-menu .dropdown-item:disabled:focus,
.bootstrap-select .dropdown-menu.inner li a.disabled:hover,
.bootstrap-select .dropdown-menu.inner li a.disabled:focus,
.bootstrap-select .dropdown-menu.inner li a:disabled:hover,
.bootstrap-select .dropdown-menu.inner li a:disabled:focus {
  background-color: transparent;
}

.dropup:not(.bootstrap-select) .dropdown-menu,
.bootstrap-select .dropdown-menu:not(.inner),
.dropdown-menu.bootstrap-datetimepicker-widget {
  -webkit-transform: translate3d(0, -25px, 0) !important;
  transform: translate3d(0, -25px, 0) !important;
  visibility: hidden;
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 100% !important;
}

.bootstrap-select.show .dropdown-menu:not(.inner),
.dropdown-menu.bootstrap-datetimepicker-widget.bottom.open,
.dropdown-menu.bootstrap-datetimepicker-widget.top.open,
.dropup.show:not(.bootstrap-select) .dropdown-menu {
  opacity: 1;
  filter: alpha(opacity=100);
  visibility: visible;
  -webkit-transform: translate3d(0, 0px, 0) !important;
  transform: translate3d(0, 0px, 0) !important;
}

.dropup:not(.bootstrap-select) .dropdown-menu,
.dropdown-menu.bootstrap-datetimepicker-widget.top {
  -webkit-transform: translate3d(0, 25px, 0) !important;
  transform: translate3d(0, 25px, 0) !important;
  bottom: 100% !important;
  top: auto !important;
}

.dropup.show:not(.bootstrap-select) .dropdown-menu,
.dropdown-menu.bootstrap-datetimepicker-widget.top.open {
  -webkit-transform: translate3d(0, -1px, 0) !important;
  transform: translate3d(0, -1px, 0) !important;
}

img {
  max-width: 100%;
  border-radius: 1px;
}

.img-raised {
  -webkit-box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
}

.popover {
  font-size: 16px;
  -webkit-box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
  border: none;
  line-height: 1.7;
  max-width: 240px;
}

.popover.bs-popover-top .arrow:before,
.popover.bs-popover-left .arrow:before,
.popover.bs-popover-right .arrow:before,
.popover.bs-popover-bottom .arrow:before {
  border-top-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
}

.popover .popover-header {
  color: rgba(182, 182, 182, 0.6);
  font-size: 16px;
  text-transform: capitalize;
  font-weight: 600;
  margin: 0;
  margin-top: 5px;
  border: none;
  background-color: transparent;
}

.popover:before {
  display: none;
}

.popover.bs-tether-element-attached-top:after {
  border-bottom-color: #FFFFFF;
  top: -9px;
}

.popover.popover-primary {
  background-color: #dc3741;
}

.popover.popover-primary .popover-body {
  color: #FFFFFF;
}

.popover.popover-primary.bs-popover-right .arrow:after {
  border-right-color: #dc3741;
}

.popover.popover-primary.bs-popover-top .arrow:after {
  border-top-color: #dc3741;
}

.popover.popover-primary.bs-popover-bottom .arrow:after {
  border-bottom-color: #dc3741;
}

.popover.popover-primary.bs-popover-left .arrow:after {
  border-left-color: #dc3741;
}

.popover.popover-primary .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-info {
  background-color: #37DCD2;
}

.popover.popover-info .popover-body {
  color: #FFFFFF;
}

.popover.popover-info.bs-popover-right .arrow:after {
  border-right-color: #37DCD2;
}

.popover.popover-info.bs-popover-top .arrow:after {
  border-top-color: #37DCD2;
}

.popover.popover-info.bs-popover-bottom .arrow:after {
  border-bottom-color: #37DCD2;
}

.popover.popover-info.bs-popover-left .arrow:after {
  border-left-color: #37DCD2;
}

.popover.popover-info .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-warning {
  background-color: #FFB236;
}

.popover.popover-warning .popover-body {
  color: #FFFFFF;
}

.popover.popover-warning.bs-popover-right .arrow:after {
  border-right-color: #FFB236;
}

.popover.popover-warning.bs-popover-top .arrow:after {
  border-top-color: #FFB236;
}

.popover.popover-warning.bs-popover-bottom .arrow:after {
  border-bottom-color: #FFB236;
}

.popover.popover-warning.bs-popover-left .arrow:after {
  border-left-color: #FFB236;
}

.popover.popover-warning .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-danger {
  background-color: #FF3636;
}

.popover.popover-danger .popover-body {
  color: #FFFFFF;
}

.popover.popover-danger.bs-popover-right .arrow:after {
  border-right-color: #FF3636;
}

.popover.popover-danger.bs-popover-top .arrow:after {
  border-top-color: #FF3636;
}

.popover.popover-danger.bs-popover-bottom .arrow:after {
  border-bottom-color: #FF3636;
}

.popover.popover-danger.bs-popover-left .arrow:after {
  border-left-color: #FF3636;
}

.popover.popover-danger .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.popover.popover-success {
  background-color: #18ce0f;
}

.popover.popover-success .popover-body {
  color: #FFFFFF;
}

.popover.popover-success.bs-popover-right .arrow:after {
  border-right-color: #18ce0f;
}

.popover.popover-success.bs-popover-top .arrow:after {
  border-top-color: #18ce0f;
}

.popover.popover-success.bs-popover-bottom .arrow:after {
  border-bottom-color: #18ce0f;
}

.popover.popover-success.bs-popover-left .arrow:after {
  border-left-color: #18ce0f;
}

.popover.popover-success .popover-header {
  color: #FFFFFF;
  opacity: .6;
}

.tooltip.bs-tooltip-right .arrow:before {
  border-right-color: #FFFFFF;
}

.tooltip.bs-tooltip-top .arrow:before {
  border-top-color: #FFFFFF;
}

.tooltip.bs-tooltip-bottom .arrow:before {
  border-bottom-color: #FFFFFF;
}

.tooltip.bs-tooltip-left .arrow:before {
  border-left-color: #FFFFFF;
}

.tooltip-inner {
  padding: 0.5rem 0.7rem;
  min-width: 130px;
  background-color: #FFFFFF;
  font-size: 16px;
  color: inherit;
  -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.table > thead > tr > th {
  border-bottom-width: 1px;
  font-size: 1.3em;
  font-weight: 300;
  border: 0;
}

.table .btn {
  margin: 0;
}

.table .form-check,
.table .form-check.form-check-radio {
  margin: 0;
  padding: 0;
  width: 15px;
}

.table .form-check .icons,
.table .form-check.form-check-radio .icons {
  position: relative;
}

.table .form-check label.form-check-label .form-check-sign:after,
.table .form-check label.form-check-label .form-check-sign:before,
.table .form-check.form-check-radio label.form-check-label .form-check-sign:after,
.table .form-check.form-check-radio label.form-check-label .form-check-sign:before {
  top: -17px;
  left: -3px;
}

.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 12px 7px;
  vertical-align: middle;
}

.table .th-description {
  max-width: 150px;
}

.table .td-price {
  font-size: 26px;
  font-weight: 300;
  margin-top: 5px;
  position: relative;
  top: 4px;
  text-align: right;
}

.table .td-total {
  font-weight: 700;
  font-size: 1.3em;
  padding-top: 20px;
  text-align: right;
}

.table .td-actions .btn {
  margin: 0px;
}

.table > tbody > tr {
  position: relative;
}

.table-shopping > thead > tr > th {
  font-size: 0.9em;
  text-transform: uppercase;
}

.table-shopping > tbody > tr > td {
  font-size: 1.2em;
}

.table-shopping > tbody > tr > td b {
  display: block;
  margin-bottom: 5px;
}

.table-shopping .td-name {
  font-weight: 400;
  font-size: 1.5em;
}

.table-shopping .td-name small {
  color: #9A9A9A;
  font-size: 0.75em;
  font-weight: 300;
}

.table-shopping .td-number {
  font-weight: 300;
  font-size: 1.5em;
}

.table-shopping .td-name {
  min-width: 200px;
}

.table-shopping .td-number {
  text-align: right;
  min-width: 145px;
}

.table-shopping .td-number small {
  margin-right: 3px;
}

.table-shopping .img-container {
  width: 120px;
  max-height: 160px;
  overflow: hidden;
  display: block;
}

.table-shopping .img-container img {
  width: 100%;
}

#tables .table-responsive {
  margin-bottom: 30px;
}

.info {
  max-width: 360px;
  margin: 0 auto;
  padding: 70px 0 30px;
  text-align: center;
}

.info.info-hover .info-title {
  -webkit-transition: color .4s;
  transition: color .4s;
}

.info.info-hover:hover .icon {
  -webkit-transform: translate3d(0, -0.5rem, 0);
  transform: translate3d(0, -0.5rem, 0);
}

.info.info-hover:hover .icon.icon-primary.icon-circle {
  -webkit-box-shadow: 0px 15px 30px 0px rgba(249, 99, 50, 0.35);
          box-shadow: 0px 15px 30px 0px rgba(249, 99, 50, 0.35);
}

.info.info-hover:hover .icon.icon-info.icon-circle {
  -webkit-box-shadow: 0px 15px 35px 0px rgba(44, 168, 255, 0.35);
          box-shadow: 0px 15px 35px 0px rgba(44, 168, 255, 0.35);
}

.info.info-hover:hover .icon.icon-success.icon-circle {
  -webkit-box-shadow: 0px 15px 35px 0px rgba(24, 206, 15, 0.35);
          box-shadow: 0px 15px 35px 0px rgba(24, 206, 15, 0.35);
}

.info.info-hover:hover .icon.icon-warning.icon-circle {
  -webkit-box-shadow: 0px 15px 35px 0px rgba(255, 178, 54, 0.35);
          box-shadow: 0px 15px 35px 0px rgba(255, 178, 54, 0.35);
}

.info.info-hover:hover .icon.icon-danger.icon-circle {
  -webkit-box-shadow: 0px 15px 35px 0px rgba(255, 54, 54, 0.35);
          box-shadow: 0px 15px 35px 0px rgba(255, 54, 54, 0.35);
}

.info.info-hover:hover .icon.icon-info + .info-title {
  color: #37DCD2;
}

.info.info-hover:hover .icon.icon-warning + .info-title {
  color: #FFB236;
}

.info.info-hover:hover .icon.icon-danger + .info-title {
  color: #FF3636;
}

.info.info-hover:hover .icon.icon-primary + .info-title {
  color: #dc3741;
}

.info.info-hover:hover .icon.icon-success + .info-title {
  color: #18ce0f;
}

.info .icon {
  color: #888888;
  -webkit-transition: -webkit-transform .4s, -webkit-box-shadow .4s;
  transition: -webkit-transform .4s, -webkit-box-shadow .4s;
  transition: transform .4s, box-shadow .4s;
  transition: transform .4s, box-shadow .4s, -webkit-transform .4s, -webkit-box-shadow .4s;
}

.info .icon > i {
  font-size: 3em;
}

.info .icon.icon-circle {
  max-width: 80px;
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  -webkit-box-shadow: 0px 9px 35px -6px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 9px 35px -6px rgba(0, 0, 0, 0.3);
  font-size: 0.7142em;
  background-color: #FFFFFF;
  position: relative;
}

.info .icon.icon-circle i {
  line-height: 2.7;
}

.info .info-title {
  margin: 25px 0 15px;
  padding: 0 15px;
  color: #2c2c2c;
}

.info p {
  color: #888888;
  padding: 0 15px;
  font-size: 1.1em;
}

.info-horizontal {
  text-align: left !important;
}

.info-horizontal .icon {
  float: left;
  margin-top: 23px;
  margin-right: 10px;
}

.info-horizontal .icon > i {
  font-size: 2em;
}

.info-horizontal .icon.icon-circle {
  width: 65px;
  height: 65px;
  max-width: 65px;
  margin-top: 8px;
}

.info-horizontal .icon.icon-circle i {
  display: table;
  margin: 0 auto;
  line-height: 3.5;
  font-size: 1.9em;
}

.info-horizontal .description {
  overflow: hidden;
}

.icon.icon-primary {
  color: #dc3741;
}

.icon.icon-primary.icon-circle {
  -webkit-box-shadow: 0px 9px 30px -6px rgba(220, 55, 65, 0.3);
          box-shadow: 0px 9px 30px -6px rgba(220, 55, 65, 0.3);
}

.icon.icon-info {
  color: #37DCD2;
}

.icon.icon-info.icon-circle {
  -webkit-box-shadow: 0px 9px 30px -6px rgba(55, 220, 210, 0.3);
          box-shadow: 0px 9px 30px -6px rgba(55, 220, 210, 0.3);
}

.icon.icon-success {
  color: #18ce0f;
}

.icon.icon-success.icon-circle {
  -webkit-box-shadow: 0px 9px 30px -6px rgba(24, 206, 15, 0.3);
          box-shadow: 0px 9px 30px -6px rgba(24, 206, 15, 0.3);
}

.icon.icon-warning {
  color: #FFB236;
}

.icon.icon-warning.icon-circle {
  -webkit-box-shadow: 0px 9px 30px -6px rgba(255, 178, 54, 0.3);
          box-shadow: 0px 9px 30px -6px rgba(255, 178, 54, 0.3);
}

.icon.icon-danger {
  color: #FF3636;
}

.icon.icon-danger.icon-circle {
  -webkit-box-shadow: 0px 9px 30px -6px rgba(255, 54, 54, 0.3);
          box-shadow: 0px 9px 30px -6px rgba(255, 54, 54, 0.3);
}

.icon.icon-white {
  color: #FFFFFF;
}

.media .avatar {
  margin: 0 auto;
  width: 64px;
  height: 64px;
  margin-right: 15px;
}

.media .avatar img {
  width: 100%;
  border-radius: 50%;
}

.media textarea {
  margin-bottom: 20px;
}

.media .media-heading small {
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

.media .media-body {
  padding-right: 10px;
}

.media .media-body .media .media-body {
  padding-right: 0px;
}

.media.media-post .form-group,
.media.media-post .input-group {
  margin-top: 25px;
}

.media .media-footer .btn {
  margin-bottom: 20px;
}

.media .media-footer:after {
  display: table;
  content: " ";
  clear: both;
}

.media p {
  color: #888888;
  font-size: 1.104em;
  line-height: 1.61em;
}

.media-left,
.media > .pull-left {
  padding: 10px;
}

.modal-content {
  border-radius: 0.1875rem;
  border: none;
  -webkit-box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.5);
          box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.5);
}

.modal-content .modal-header {
  border-bottom: none;
  padding-top: 24px;
  padding-right: 24px;
  padding-bottom: 0;
  padding-left: 24px;
}

.modal-content .modal-header button {
  position: absolute;
  right: 27px;
  top: 30px;
  outline: 0;
}

.modal-content .modal-header .title {
  margin-top: 5px;
  margin-bottom: 0;
}

.modal-content .modal-body {
  padding-top: 24px;
  padding-right: 24px;
  padding-bottom: 16px;
  padding-left: 24px;
  line-height: 1.9;
}

.modal-content .modal-footer {
  border-top: none;
  padding-right: 24px;
  padding-bottom: 16px;
  padding-left: 24px;
  /* Safari 6.1+ */
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.modal-content .modal-footer button {
  margin: 0;
  padding-left: 16px;
  padding-right: 16px;
  width: auto;
}

.modal-content .modal-footer button.pull-left {
  padding-left: 5px;
  padding-right: 5px;
  position: relative;
  left: -5px;
}

.modal-content .modal-body + .modal-footer {
  padding-top: 0;
}

.modal-backdrop {
  background: rgba(0, 0, 0, 0.3);
}

.modal.modal-mini p {
  text-align: center;
}

.modal.modal-mini .modal-dialog {
  max-width: 255px;
  margin: 0 auto;
}

.modal.modal-mini .modal-profile {
  width: 70px;
  height: 70px;
  background-color: #FFFFFF;
  border-radius: 50%;
  text-align: center;
  line-height: 5.7;
  -webkit-box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.3);
}

.modal.modal-mini .modal-profile i {
  color: #dc3741;
  font-size: 21px;
}

.modal.modal-mini .modal-profile[class*="modal-profile-"] i {
  color: #FFFFFF;
}

.modal.modal-mini .modal-profile.modal-profile-primary {
  background-color: #dc3741;
}

.modal.modal-mini .modal-profile.modal-profile-danger {
  background-color: #FF3636;
}

.modal.modal-mini .modal-profile.modal-profile-warning {
  background-color: #FFB236;
}

.modal.modal-mini .modal-profile.modal-profile-success {
  background-color: #18ce0f;
}

.modal.modal-mini .modal-profile.modal-profile-info {
  background-color: #37DCD2;
}

.modal.modal-mini .modal-footer button {
  text-transform: uppercase;
}

.modal.modal-mini .modal-footer button:first-child {
  opacity: .5;
}

.modal.modal-default .modal-content {
  background-color: #FFFFFF;
  color: #2c2c2c;
}

.modal.modal-default .modal-header .close {
  color: #2c2c2c;
}

.modal.modal-primary .modal-content {
  background-color: #dc3741;
  color: #FFFFFF;
}

.modal.modal-primary .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-danger .modal-content {
  background-color: #FF3636;
  color: #FFFFFF;
}

.modal.modal-danger .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-warning .modal-content {
  background-color: #FFB236;
  color: #FFFFFF;
}

.modal.modal-warning .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-success .modal-content {
  background-color: #18ce0f;
  color: #FFFFFF;
}

.modal.modal-success .modal-header .close {
  color: #FFFFFF;
}

.modal.modal-info .modal-content {
  background-color: #37DCD2;
  color: #FFFFFF;
}

.modal.modal-info .modal-header .close {
  color: #FFFFFF;
}

.modal.show.modal-mini .modal-dialog {
  -webkit-transform: translate(0, 30%);
  transform: translate(0, 30%);
}

.modal .modal-header .close {
  color: #FF3636;
  text-shadow: none;
}

.modal .modal-header .close:hover,
.modal .modal-header .close:focus {
  opacity: 1;
}

.modal .modal-login {
  max-width: 320px;
}

.modal .modal-login .card-login .logo-container {
  width: 65px;
  margin-bottom: 38px;
  margin-top: 27px;
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
  display: block;
}

.carousel .carousel-inner {
  -webkit-box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
  border-radius: 0.1875rem;
}

.carousel .card {
  max-width: 650px;
  margin: 60px auto;
  display: block;
}

.footer {
  padding: 1.125rem 0;
  text-align: center;
}

.footer.footer-default {
  background-color: #f2f2f2;
}

.footer.footer-white {
  background-color: #FFFFFF;
}

.footer nav {
  display: inline-block;
  float: left;
}

.footer .content {
  text-align: left;
}

.footer .nav-link {
  display: inline;
}

.footer.footer-big {
  padding: 30px 0;
}

.footer.footer-big .social-feed i {
  font-size: 20px;
  float: left;
  padding-right: 10px;
  padding-bottom: 30px;
}

.footer.footer-big .gallery-feed img {
  width: 20%;
  margin-right: 5%;
  margin-bottom: 5%;
  float: left;
}

.footer .footer-brand {
  float: left;
  font-size: 0.875rem;
  line-height: 44px;
}

.footer ul {
  margin-bottom: 0;
  padding: 0;
  list-style: none;
}

.footer ul:not(.links-vertical) {
  line-height: 3.1;
}

.footer ul.links-vertical {
  line-height: 1.6;
}

.footer ul.links-vertical li {
  display: block;
  margin-left: -5px;
  margin-right: -5px;
  margin-bottom: 0px;
}

.footer ul.links-vertical li a {
  padding: 5px;
  display: block;
}

.footer ul li {
  display: inline-block;
}

.footer ul li a {
  color: inherit;
  padding: 13px 0.5rem;
  font-size: 0.8571em;
  text-transform: uppercase;
  text-decoration: none;
}

.footer ul li a:hover {
  text-decoration: none;
}

.footer .social-buttons a,
.footer .social-buttons .btn {
  margin: 0;
}

.footer .pull-center {
  display: inline-block;
  float: none;
}

.footer .copyright {
  font-size: 0.8571em;
  line-height: 3.5;
}

.footer:after {
  display: table;
  clear: both;
  content: " ";
}

.card {
  border: 0;
  border-radius: 0.1875rem;
  display: inline-block;
  position: relative;
  width: 100%;
  margin-bottom: 30px;
  -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.card .card-header {
  background-color: transparent;
  border-bottom: 0;
  background-color: transparent;
  border-radius: 0;
  padding: 0;
}

.card .card-footer {
  padding: 0;
  margin-top: 15px;
  background-color: transparent;
  border: 0;
}

.card[data-background-color="orange"] {
  background-color: #dc3741;
}

.card[data-background-color="red"] {
  background-color: #FF3636;
}

.card[data-background-color="yellow"] {
  background-color: #FFB236;
}

.card[data-background-color="blue"] {
  background-color: #37DCD2;
}

.card[data-background-color="green"] {
  background-color: #15b60d;
}

.card .rounded {
  border-radius: 0.1875rem !important;
}

.card:not(.card-plain) .rounded {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}

.card a[data-toggle='collapse'] {
  text-decoration: none;
}

.card a:not(.btn):not(.nav-link):not([data-toggle='collapse']):not(.footer-link) {
  text-decoration: none;
  border-bottom: 2px solid transparent;
  color: #444;
}

.card a:not(.btn):not(.nav-link):not([data-toggle='collapse']):not(.footer-link):hover,
.card a:not(.btn):not(.nav-link):not([data-toggle='collapse']):not(.footer-link):focus {
  border-color: #444;
}

.card-collapse .card .card-header {
  padding: .75rem 0;
  position: relative;
}

.card-collapse .card .card-header:after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 1px;
  background-color: #E3E3E3;
}

.card-collapse .card .card-header a[data-toggle="collapse"] {
  display: block;
  color: #444;
}

.card-collapse .card .card-header a[data-toggle="collapse"][aria-expanded="true"] i,
.card-collapse .card .card-header a[data-toggle="collapse"].expanded i {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.card-collapse .card .card-header a[data-toggle="collapse"] i {
  float: right;
  position: relative;
  color: #dc3741;
  top: 1px;
  -webkit-transition: all 300ms ease 0s;
  transition: all 300ms ease 0s;
}

.card .card-image {
  position: relative;
}

.card .card-footer div {
  display: inline-block;
}

.card .card-footer .stats.stats-right {
  float: right;
  line-height: 30px;
}

.card .card-footer .stats span:first-child {
  margin-right: 30px;
}

.card:not(.card-product) .card-footer .stats .now-ui-icons {
  position: relative;
  top: 3px;
  font-size: 18px;
  margin-right: 5px;
}

.card:not(.card-product) .card-footer .stats i {
  color: #a2a1a1;
}

.card .card-title {
  margin-top: 15px;
  line-height: 1.25em;
}

.card .author .avatar {
  width: 30px;
  height: 30px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 5px;
}

.card .author span {
  color: #9A9A9A;
}

.card .info {
  padding: 40px 0 40px;
  text-align: center;
  position: relative;
  z-index: 2;
}

.card-background {
  background-position: center center;
  background-size: cover;
  text-align: center;
}

.card-background .card-body {
  position: relative;
  z-index: 2;
  min-height: 370px;
  max-width: 530px;
  margin: 0 auto;
  padding-top: 60px;
  padding-bottom: 60px;
}

.card-background.card-background-product .card-body {
  max-width: 400px;
}

.card-background.card-background-product .card-body .card-title {
  margin-top: 30px;
}

.card-background .stats {
  color: #FFFFFF;
}

.card-background .card-footer .stats-link > a {
  color: #FFFFFF;
  line-height: 1.9;
}

.card-background .category,
.card-background .card-description,
.card-background small {
  color: rgba(255, 255, 255, 0.8);
}

.card-background .card-title {
  color: #FFFFFF;
  margin-top: 130px;
}

.card-background:not(.card-pricing) .btn {
  margin-bottom: 0;
}

.card-background:after {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.63);
  border-radius: 0.25rem;
}

.card-blog .row .category {
  margin-bottom: 0;
}

.card-blog .card-image + .category {
  margin-top: 20px;
}

.card-contact .header .title {
  margin: 10px 0 10px;
}

.card-fashion {
  min-height: 500px;
  border-radius: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
  margin: 0;
  display: block;
}

.card-container .card-fashion {
  width: 50%;
  float: left;
}

.card-fashion:not(.card-background) .card-title {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  width: 85%;
}

.card-fashion h4 {
  margin-top: 0;
}

.card-fashion.card-background::after {
  border-radius: 0;
}

.card-fashion.card-background a {
  color: #FFFFFF !important;
}

.card-fashion.card-background a:hover,
.card-fashion.card-background a:focus {
  border-color: #FFFFFF !important;
}

.card-fashion:not(.card-background) .stats span,
.card-fashion .stats-link {
  color: initial;
}

.card-fashion .card-body {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem 2rem 1.4rem;
  color: #fff;
  min-height: auto;
}

.card-fashion:not(.card-background):before {
  left: 100%;
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  z-index: 2;
  position: absolute;
  pointer-events: none;
  border-color: rgba(255, 255, 255, 0);
  border-left-color: #ffffff;
  border-width: 10px;
  margin-top: -10px;
}

.card-fashion.arrow-left:not(.card-background):before {
  right: 100%;
  border-right-color: #fff;
  left: auto;
  border-left: none;
}

.card-form-horizontal .card-body {
  padding-left: 15px;
  padding-right: 15px;
}

.card-form-horizontal .form-group {
  padding-bottom: 0px;
  margin: 3px 0 0 0;
}

.card-form-horizontal .form-group .form-control {
  margin-bottom: 0;
}

.card-form-horizontal .btn {
  margin: 0;
}

.card-form-horizontal .input-group,
.card-form-horizontal .form-group {
  margin: 0;
}

.card-no-shadow {
  -webkit-box-shadow: none;
          box-shadow: none;
  border-radius: 0;
  margin: 0;
}

.card-no-shadow:after {
  border-radius: 0;
}

.card-plain {
  background: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.card-plain .card-body,
.card-plain .card-header {
  padding-left: 5px;
  padding-right: 5px;
}

.card-plain .card-header:after {
  width: 100%;
  left: 0;
}

.card-pricing {
  text-align: center;
}

.card-pricing .card-title {
  margin-top: 30px;
}

.card-pricing .icon {
  padding: 10px 0 0px;
}

.card-pricing .icon i {
  font-size: 30px;
  line-height: 2.7;
  max-width: 80px;
  color: #888888;
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  -webkit-box-shadow: 0px 9px 35px -6px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 9px 35px -6px rgba(0, 0, 0, 0.3);
  background-color: #FFFFFF;
  position: relative;
}

.card-pricing .icon.icon-primary i {
  -webkit-box-shadow: 0px 9px 30px -6px #dc3741;
          box-shadow: 0px 9px 30px -6px #dc3741;
  color: #dc3741;
}

.card-pricing .icon.icon-info i {
  -webkit-box-shadow: 0px 9px 30px -6px #37DCD2;
          box-shadow: 0px 9px 30px -6px #37DCD2;
  color: #37DCD2;
}

.card-pricing .icon.icon-success i {
  color: #18ce0f;
  -webkit-box-shadow: 0px 9px 30px -6px rgba(22, 199, 13, 0.85);
          box-shadow: 0px 9px 30px -6px rgba(22, 199, 13, 0.85);
}

.card-pricing .icon.icon-warning i {
  -webkit-box-shadow: 0px 9px 30px -6px #FFB236;
          box-shadow: 0px 9px 30px -6px #FFB236;
  color: #FFB236;
}

.card-pricing .icon.icon-danger i {
  -webkit-box-shadow: 0px 9px 30px -6px #FF3636;
          box-shadow: 0px 9px 30px -6px #FF3636;
  color: #FF3636;
}

.card-pricing h1 small {
  font-size: 18px;
}

.card-pricing h1 small:first-child {
  position: relative;
  top: -17px;
  font-size: 26px;
}

.card-pricing ul {
  list-style: none;
  padding: 0;
  max-width: 240px;
  margin: 10px auto;
}

.card-pricing ul li {
  color: #888888;
  text-align: center;
  padding: 12px 0;
  border-bottom: 1px solid rgba(136, 136, 136, 0.3);
}

.card-pricing ul li:last-child {
  border: 0;
}

.card-pricing ul li b {
  color: #2c2c2c;
}

.card-pricing ul li i {
  top: 3px;
  right: 3px;
  position: relative;
  font-size: 20px;
}

.card-pricing.card-background ul li {
  color: #FFFFFF;
  border-color: rgba(255, 255, 255, 0.3);
}

.card-pricing.card-background ul li b {
  color: #FFFFFF;
}

.card-pricing.card-background [class*="text-"] {
  color: #FFFFFF !important;
}

.card-pricing.card-background .card-body {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.card-pricing.card-background:after {
  background-color: rgba(0, 0, 0, 0.65);
}

.card-profile,
.card-testimonial {
  margin-top: 60px;
  text-align: center;
}

.card-profile .card-body .card-title,
.card-testimonial .card-body .card-title {
  margin-top: 0;
}

.card-profile [class*=col-] .card-description,
.card-testimonial [class*=col-] .card-description {
  margin-bottom: 0;
}

.card-profile [class*=col-] .card-description + .card-footer,
.card-testimonial [class*=col-] .card-description + .card-footer {
  margin-top: 8px;
}

.card-profile .card-avatar,
.card-testimonial .card-avatar {
  max-width: 130px;
  max-height: 130px;
  margin: -60px auto 0;
}

.card-profile .card-avatar img,
.card-testimonial .card-avatar img {
  border-radius: 50% !important;
}

.card-profile .card-avatar + .card-body,
.card-testimonial .card-avatar + .card-body {
  margin-top: 15px;
}

.card-plain.card-profile .card-avatar,
.card-plain.card-testimonial .card-avatar {
  margin-top: 0;
}

.card-profile .card-body .card-avatar,
.card-testimonial .card-body .card-avatar {
  margin: 0 auto 30px;
}

.card-product {
  margin-top: 30px;
}

.card-product .price-container {
  margin-top: 9px;
}

.card-product .btn {
  margin: 0;
}

.card-product .image {
  overflow: hidden;
  border-radius: 0.25rem;
}

.card-product .card-footer {
  margin-top: 5px;
}

.card-product .card-footer .price h4 {
  margin-bottom: 0;
  margin-top: 0;
}

.card-product .card-footer .stats {
  margin-top: 5px;
}

.card-product .card-footer .stats .btn {
  position: relative;
  top: -3px;
}

.card-product .card-title,
.card-product .category,
.card-product .card-description {
  text-align: center;
}

.card-product .category {
  margin-bottom: 0;
}

.card-product .category ~ .card-title {
  margin-top: 0;
}

.card-product .price {
  font-size: 16px;
  color: #888888;
}

.card-product .price-old {
  text-decoration: line-through;
  font-size: 16px;
  color: #888888;
}

.card-product .price-new {
  color: #FF3636;
}

.card-product:not(.card-plain) .card-image {
  padding: 15px;
}

.card-raised {
  -webkit-box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.3);
}

.card-raised.card-plain {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.card-signup {
  max-width: 350px;
  margin: 0 auto;
}

.card-signup .card-header {
  margin: 0 20px;
  padding: 30px 0;
}

.card-signup .card-title {
  margin-top: 15px;
  margin-bottom: 15px;
}

.card-signup .card-body {
  padding-top: 0px;
  padding-bottom: 0px;
  min-height: auto;
}

.card-signup .form-check,
.card-signup .form-check.form-check-radio {
  margin-top: 20px;
}

.card-signup .form-check label,
.card-signup .form-check.form-check-radio label {
  margin-left: 11px;
  color: initial;
  padding-left: 40px;
}

.card-signup .card-description {
  margin-top: 15px;
  margin-bottom: 20px;
}

.card-signup .social-line {
  margin-top: 20px;
  text-align: center;
}

.card-signup .social-line .btn.btn-icon,
.card-signup .social-line .btn.btn-icon .btn-icon {
  margin-left: 5px;
  margin-right: 5px;
  margin-top: 0;
  margin-bottom: 0;
  -webkit-box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 5px 50px 0px rgba(0, 0, 0, 0.2);
}

.card-testimonial .card-body {
  padding-top: 25px;
}

.card-testimonial .card-avatar {
  max-width: 100px;
  max-height: 100px;
  margin-top: -50px;
}

.card-testimonial .card-footer {
  margin-top: 0;
  margin-bottom: 2.5rem;
}

.card-testimonial .card-description + .card-title {
  margin-top: 30px;
}

.card-testimonial .icon i {
  font-size: 32px;
}

.card-testimonial .icon.icon-primary i {
  color: #dc3741;
}

.card-testimonial .icon.icon-info i {
  color: #37DCD2;
}

.card-testimonial .icon.icon-danger i {
  color: #FF3636;
}

.card-testimonial .icon.icon-warning i {
  color: #FFB236;
}

.card-testimonial .icon.icon-success i {
  color: #18ce0f;
}

.card-testimonial .card-description + .card-title {
  margin-top: 20px;
}

.index-page .page-header,
.presentation-page .page-header {
  height: 125vh;
}

.index-page .page-header .container > .content-center,
.presentation-page .page-header .container > .content-center {
  top: 37%;
}

.index-page .category-absolute,
.presentation-page .category-absolute {
  position: absolute;
  top: 100vh;
  margin-top: -60px;
  padding: 0 15px;
  width: 100%;
  text-align: center;
  color: rgba(255, 255, 255, 0.5);
}

.presentation-page .section-sections .section-description {
  text-align: center;
  margin-bottom: 60px;
}

.presentation-page .section-sections .col-md-3 {
  padding: 7.5px;
}

.presentation-page .section-sections img {
  width: 100%;
  border-radius: 0.1875rem;
  -webkit-transition: all 0.2s ease 0s;
  transition: all 0.2s ease 0s;
  -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.presentation-page .section-sections img:hover {
  -webkit-transform: scale(1.02);
  transform: scale(1.02);
}

.presentation-page .section-pricing .card-pricing {
  margin-top: 45px;
}

.presentation-page .section-pricing .card-margin {
  margin-top: 90px;
}

.blog-posts .projects-4 {
  padding-top: 0;
}

.ecommerce-page .container {
  position: relative;
  z-index: 2;
}

.ecommerce-page .card-header {
  padding-left: 0;
  padding-right: 0;
}

.ecommerce-page .card-header:after {
  width: 100%;
  left: 0;
}

.ecommerce-page .slider-refine {
  margin: 15px 0;
}

.ecommerce-page .card-refine > .card-title {
  margin-bottom: 30px;
}

.ecommerce-page .card-refine [role="tabpanel"] {
  max-height: 273px;
  overflow-y: scroll;
}

.ecommerce-page .card-refine h6 {
  margin-top: .5rem;
}

.ecommerce-page .card-refine .card-body {
  padding-left: 25px;
  padding-right: 25px;
  padding-bottom: 0;
}

.ecommerce-page .card-refine .card-body.panel-refine {
  padding-left: 15px;
  padding-right: 15px;
}

.ecommerce-page .card-refine .price-right,
.ecommerce-page .card-refine .price-left {
  font-weight: 500;
}

.ecommerce-page .card-refine .btn {
  margin: -5px -12px;
}

.ecommerce-page .card-refine .checkbox input[type=checkbox]:checked + .checkbox-material .check {
  background: #dc3741;
}

.ecommerce-page .card-product .card-image {
  width: 200px;
  margin: 0 auto;
}

.product-page {
  background-color: #eee;
}

.product-page .carousel {
  margin: -90px 0px 0;
}

.product-page .carousel img {
  border-radius: 0.1875rem;
  height: auto;
}

.product-page .section {
  padding-top: 30px;
}

.product-page .main-price {
  margin: 10px 0 25px;
  font-weight: 300;
}

.product-page .blockquote {
  width: 90%;
  margin-top: -10px;
  margin-left: 5%;
}

.product-page .pick-size {
  margin-top: 15px;
  margin-bottom: 15px;
}

.product-page .pick-size .form-group {
  margin-top: 5px;
}

.product-page .related-products .title {
  margin-bottom: 80px;
}

.product-page .features {
  padding-top: 30px;
}

.product-page .accordeon .card {
  margin-bottom: 15px;
}

.landing-page .page-header {
  height: 100vh;
  position: relative;
}

.landing-page .page-header .share {
  margin-top: 150px;
}

.landing-page .page-header h1 {
  font-weight: 600;
}

.landing-page .page-header .title {
  color: #FFFFFF;
}

.landing-page .section-team .team .team-player img {
  max-width: 100px;
}

.landing-page .section-team .team-player {
  margin-bottom: 15px;
}

.landing-page .section-contact-us .title {
  margin-bottom: 15px;
}

.landing-page .section-contact-us .description {
  margin-bottom: 30px;
}

.landing-page .section-contact-us .input-group,
.landing-page .section-contact-us .send-button,
.landing-page .section-contact-us .textarea-container {
  padding: 0 40px;
}

.landing-page .section-contact-us .textarea-container {
  margin: 40px 0;
}

.landing-page .section-contact-us a.btn {
  margin-top: 35px;
}

.profile-page .button-container,
.blog-post .button-container {
  text-align: center;
  margin-top: -112px;
  position: relative;
  z-index: 100;
}

.profile-page .profile-container {
  color: #FFFFFF;
}

.profile-page .photo-container {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto;
  -webkit-box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
}

.profile-page .title {
  text-align: center;
  margin-top: 30px;
}

.profile-page .category {
  text-align: center;
}

.profile-page h5.description {
  max-width: 700px;
  margin: 20px auto 75px;
}

.profile-page .nav-align-center {
  margin-top: 30px;
}

.profile-page .info-horizontal {
  padding: 15px 0 0;
}

.profile-page .content {
  max-width: 450px;
  margin: 0 auto;
}

.profile-page .content .social-description {
  display: inline-block;
  max-width: 150px;
  width: 145px;
  text-align: center;
  margin: 15px 0 0px;
}

.profile-page .content .social-description h2 {
  margin-bottom: 5px;
}

.profile-page .collections img {
  margin-bottom: 30px;
}

.profile-page .gallery {
  margin-top: 45px;
  padding-bottom: 50px;
}

.section-full-page:after,
.section-full-page:before {
  display: block;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 2;
}

.section-full-page:before {
  background-color: rgba(0, 0, 0, 0.5);
}

.section-full-page[filter-color="purple"]:after,
.section-full-page[filter-color="primary"]:after {
  background: rgba(227, 227, 227, 0.26);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(227, 227, 227, 0.26)), to(rgba(220, 55, 65, 0.95)));
  background: linear-gradient(0deg, rgba(227, 227, 227, 0.26), rgba(220, 55, 65, 0.95));
  /* Standard syntax */
}

.section-full-page[data-image]:after {
  opacity: .5;
}

.section-full-page > .content,
.section-full-page > .footer {
  position: relative;
  z-index: 4;
}

.section-full-page > .content {
  min-height: calc(100vh - 80px);
}

.section-full-page .full-page-background {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  display: block;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
}

.section-full-page .footer nav > ul a:not(.btn),
.section-full-page .footer,
.section-full-page .footer .copyright a {
  color: #FFFFFF;
}

.signup-page .section {
  padding-top: 180px;
  padding-bottom: 0;
}

.signup-page .input-group,
.signup-page .form-group {
  margin-bottom: 20px;
}

.signup-page .card-signup {
  max-width: 100%;
  margin-bottom: 130px;
  padding: 15px 0px;
}

.signup-page .card-signup:not([data-background-color]) .card-title {
  color: initial;
}

.signup-page .card-signup .checkbox label {
  margin-left: 14px;
  padding-left: 39px;
  color: initial;
}

.signup-page .info-horizontal {
  padding: 0px 0px 20px;
}

.signup-page .social .btn {
  margin: 5px;
}

.signup-page .social h4 {
  margin-top: 20px;
}

.login-page .page-header {
  display: block;
  -webkit-box-align: unset;
      -ms-flex-align: unset;
          align-items: unset;
}

.login-page .card-login {
  border-radius: 0.25rem;
  padding-bottom: 0.7rem;
  max-width: 320px;
}

.login-page .card-login .btn-wd {
  min-width: 180px;
}

.login-page .card-login .logo-container {
  width: 65px;
  margin: 0 auto;
  margin-bottom: 55px;
}

.login-page .card-login .logo-container img {
  width: 100%;
}

.login-page .card-login .input-group:last-child {
  margin-bottom: 40px;
}

.login-page .card-login.card-plain .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

.login-page .card-login.card-plain .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

.login-page .card-login.card-plain .has-success:after,
.login-page .card-login.card-plain .has-danger:after {
  color: #FFFFFF;
}

.login-page .card-login.card-plain .has-danger .form-control {
  background-color: transparent;
}

.login-page .card-login.card-plain .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .input-group-focus .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control,
.login-page .card-login.card-plain .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control:focus,
.login-page .card-login.card-plain .form-group.no-border .form-control:active,
.login-page .card-login.card-plain .form-group.no-border .form-control:active,
.login-page .card-login.card-plain .input-group.no-border .form-control:focus,
.login-page .card-login.card-plain .input-group.no-border .form-control:active,
.login-page .card-login.card-plain .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control + .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .form-control + .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

.login-page .card-login.card-plain .form-group.no-border .form-control + .input-group-text:focus,
.login-page .card-login.card-plain .form-group.no-border .form-control + .input-group-text:active,
.login-page .card-login.card-plain .form-group.no-border .form-control + .input-group-text:active,
.login-page .card-login.card-plain .input-group.no-border .form-control + .input-group-text:focus,
.login-page .card-login.card-plain .input-group.no-border .form-control + .input-group-text:active,
.login-page .card-login.card-plain .input-group.no-border .form-control + .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .form-control:focus + .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .form-control:focus + .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

.login-page .card-login.card-plain .form-group.no-border.input-group-focus .input-group-text,
.login-page .card-login.card-plain .input-group.no-border.input-group-focus .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

.login-page .card-login.card-plain .input-group-text,
.login-page .card-login.card-plain .form-group.no-border .input-group-text,
.login-page .card-login.card-plain .input-group.no-border .input-group-text {
  color: rgba(255, 255, 255, 0.8);
}

.login-page .link {
  font-size: 10px;
  color: #FFFFFF !important;
  text-decoration: none;
}

.login-page .link:hover,
.login-page .link:focus {
  border-color: #FFFFFF !important;
}

.contact-page .contact-content {
  padding-bottom: 40px;
  padding-top: 40px;
}

.contact-page .container {
  max-width: 970px;
}

.contact-page .big-map {
  height: 55vh;
  width: 100%;
  display: block;
  position: relative;
}

.contact-page .message {
  margin-top: 20px;
}

.contact-page .info {
  padding-bottom: 10px;
  padding-top: 0px;
}

.contact-page .info .title {
  margin: 25px 0 10px;
}

.blog-post .section-blog-info {
  padding-top: 30px;
  padding-bottom: 0px;
}

.blog-post .section-blog-info .btn {
  margin-top: 0;
  margin-bottom: 0;
}

.blog-post .section-blog-info .blog-tags {
  padding-top: 8px;
}

.blog-post .section-blog-info .card-profile {
  margin-top: 0;
  text-align: left;
}

.blog-post .section-blog-info .card-profile .description {
  font-size: 16px;
}

.blog-post .section-blog-info .card-profile .btn {
  margin-top: 25px;
}

.blog-post .section-comments .title {
  margin-bottom: 30px;
}

.blog-post .media p {
  color: #888888;
}

.about-us .page-header .container {
  color: #FFFFFF;
  text-align: center;
}

.about-us .page-header .title {
  color: #FFFFFF;
}

.about-us .about-description {
  padding: 70px 0px 0px 0px;
}

.about-us .about-services {
  padding-top: 10px;
}

.about-us .about-office .description {
  margin-bottom: 70px;
}

.about-us .about-office img {
  margin: 20px 0px;
}

.about-us .about-contact,
.about-us .about-office {
  padding: 80px 0px;
}

.about-us .about-contact .description,
.about-us .about-office .description {
  margin-bottom: 70px;
}

.sections-page .page-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.section {
  padding: 70px 0;
  position: relative;
  background: #FFFFFF;
}

.section .row + .category {
  margin-top: 15px;
}

.section-navbars {
  padding-bottom: 0;
}

.section-full-screen {
  height: 100vh;
}

.section-signup {
  padding-top: 20vh;
}

.page-header {
  min-height: 100vh;
  max-height: 999px;
  padding: 0;
  color: #FFFFFF;
  position: relative;
  overflow: hidden;
}

.page-header > .content {
  margin-top: 12%;
  text-align: center;
  margin-bottom: 50px;
}

.page-header.page-header-small {
  min-height: 60vh;
  max-height: 440px;
}

.page-header:before {
  background-color: rgba(0, 0, 0, 0.3);
}

.page-header > .container {
  z-index: 2;
  padding-top: 12vh;
  padding-bottom: 40px;
}

.page-header .page-header-image {
  position: absolute;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.page-header .content-center {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  color: #FFFFFF;
  padding: 0 15px;
  width: 100%;
  max-width: 880px;
}

.page-header footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}

.page-header .container {
  height: 100%;
  z-index: 1;
  text-align: center;
  position: relative;
}

.page-header .category,
.page-header .description {
  color: rgba(255, 255, 255, 0.8);
}

.page-header:after,
.page-header:before {
  position: absolute;
  z-index: 0;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
}

.clear-filter:after,
.clear-filter:before {
  display: none;
}

.section-story-overview {
  padding: 50px 0;
}

.section-story-overview .image-container {
  height: 335px;
  position: relative;
  background-position: center center;
  background-size: cover;
  -webkit-box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
  border-radius: .25rem;
}

.section-story-overview .image-container + .category {
  padding-top: 15px;
}

.section-story-overview .image-container.image-right {
  z-index: 2;
}

.section-story-overview .image-container.image-right + h3.title {
  margin-top: 120px;
}

.section-story-overview .image-container.image-left {
  z-index: 1;
}

.section-story-overview .image-container:nth-child(2) {
  margin-top: 420px;
  margin-left: -105px;
}

.section-story-overview p.blockquote {
  width: 220px;
  min-height: 180px;
  text-align: left;
  position: absolute;
  top: 376px;
  right: 155px;
  z-index: 0;
}

.section-nucleo-icons .nucleo-container img {
  width: auto;
  left: 0;
  top: 0;
  height: 100%;
  position: absolute;
}

.section-nucleo-icons .nucleo-container {
  height: 335px;
  position: relative;
}

.section-nucleo-icons h5 {
  margin-bottom: 35px;
}

.section-nucleo-icons .icons-container {
  position: relative;
  max-width: 450px;
  height: 300px;
  max-height: 300px;
  margin: 0 auto;
}

.section-nucleo-icons .icons-container i {
  font-size: 34px;
  position: absolute;
  left: 0;
  top: 0;
}

.section-nucleo-icons .icons-container i:nth-child(1) {
  top: 5%;
  left: 7%;
}

.section-nucleo-icons .icons-container i:nth-child(2) {
  top: 28%;
  left: 24%;
}

.section-nucleo-icons .icons-container i:nth-child(3) {
  top: 40%;
}

.section-nucleo-icons .icons-container i:nth-child(4) {
  top: 18%;
  left: 62%;
}

.section-nucleo-icons .icons-container i:nth-child(5) {
  top: 74%;
  left: 3%;
}

.section-nucleo-icons .icons-container i:nth-child(6) {
  top: 36%;
  left: 44%;
  font-size: 65px;
  color: #f96332;
  padding: 1px;
}

.section-nucleo-icons .icons-container i:nth-child(7) {
  top: 59%;
  left: 26%;
}

.section-nucleo-icons .icons-container i:nth-child(8) {
  top: 60%;
  left: 69%;
}

.section-nucleo-icons .icons-container i:nth-child(9) {
  top: 72%;
  left: 47%;
}

.section-nucleo-icons .icons-container i:nth-child(10) {
  top: 88%;
  left: 27%;
}

.section-nucleo-icons .icons-container i:nth-child(11) {
  top: 31%;
  left: 80%;
}

.section-nucleo-icons .icons-container i:nth-child(12) {
  top: 88%;
  left: 68%;
}

.section-nucleo-icons .icons-container i:nth-child(13) {
  top: 5%;
  left: 81%;
}

.section-nucleo-icons .icons-container i:nth-child(14) {
  top: 58%;
  left: 90%;
}

.section-nucleo-icons .icons-container i:nth-child(15) {
  top: 6%;
  left: 40%;
}

.section-images {
  max-height: 670px;
  height: 670px;
}

.section-images .hero-images-container,
.section-images .hero-images-container-1,
.section-images .hero-images-container-2 {
  margin-top: -38vh;
}

.section-images .hero-images-container {
  max-width: 670px;
}

.section-images .hero-images-container-1 {
  max-width: 390px;
  position: absolute;
  top: 55%;
  right: 18%;
}

.section-images .hero-images-container-2 {
  max-width: 225px;
  position: absolute;
  top: 68%;
  right: 12%;
}

[data-background-color="orange"] {
  background-color: #e95e38;
}

[data-background-color="black"] {
  background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .title,
[data-background-color]:not([data-background-color="gray"]) .social-description h2,
[data-background-color]:not([data-background-color="gray"]) p,
[data-background-color]:not([data-background-color="gray"]) p.blockquote,
[data-background-color]:not([data-background-color="gray"]) p.blockquote small {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .separator {
  background-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .navbar.bg-white p {
  color: #888888;
}

[data-background-color]:not([data-background-color="gray"]) h1,
[data-background-color]:not([data-background-color="gray"]) h2,
[data-background-color]:not([data-background-color="gray"]) h3,
[data-background-color]:not([data-background-color="gray"]) h4,
[data-background-color]:not([data-background-color="gray"]) h5,
[data-background-color]:not([data-background-color="gray"]) h6,
[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item),
[data-background-color]:not([data-background-color="gray"]) .icons-container {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .input-group-text {
  color: rgba(255, 255, 255, 0.8);
}

[data-background-color]:not([data-background-color="gray"]) .description,
[data-background-color]:not([data-background-color="gray"]) .social-description p {
  color: rgba(255, 255, 255, 0.8);
}

[data-background-color]:not([data-background-color="gray"]) p.blockquote {
  border-color: rgba(255, 255, 255, 0.2);
}

[data-background-color]:not([data-background-color="gray"]) .checkbox label::before,
[data-background-color]:not([data-background-color="gray"]) .checkbox label::after,
[data-background-color]:not([data-background-color="gray"]) .radio label::before,
[data-background-color]:not([data-background-color="gray"]) .radio label::after {
  border-color: rgba(255, 255, 255, 0.2);
}

[data-background-color]:not([data-background-color="gray"]) .checkbox label::after,
[data-background-color]:not([data-background-color="gray"]) .checkbox label,
[data-background-color]:not([data-background-color="gray"]) .radio label {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .checkbox input[type="checkbox"]:disabled + label,
[data-background-color]:not([data-background-color="gray"]) .radio input[type="radio"]:disabled + label {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .radio input[type="radio"]:not(:disabled):hover + label::after,
[data-background-color]:not([data-background-color="gray"]) .radio input[type="radio"]:checked + label::after {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .has-success:after,
[data-background-color]:not([data-background-color="gray"]) .has-danger:after {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .has-danger .form-control {
  background-color: transparent;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-focus .input-group-text {
  background-color: transparent;
  border-color: #FFFFFF;
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:focus,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:active,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:focus,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control + .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control + .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control + .input-group-text:focus,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control + .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control + .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control + .input-group-text:focus,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control + .input-group-text:active,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control + .input-group-text:active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .form-control:focus + .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .form-control:focus + .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-group.no-border.input-group-focus .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border.input-group-focus .input-group-text {
  background-color: rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:hover,
[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:hover,
[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:focus,
[data-background-color]:not([data-background-color="gray"]) .btn.btn-simple:active {
  background-color: transparent;
  border-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .nav-tabs > .nav-item > .nav-link i.now-ui-icons {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).section-nucleo-icons .icons-container i:nth-child(6) {
  color: #FFFFFF;
}

.parallax-s {
  overflow: hidden;
  height: 500px;
  width: 100%;
}

.section-image {
  background-size: cover;
  background-position: center center;
  position: relative;
  width: 100%;
}

.section-image .title,
.section-image .card-plain .card-title {
  color: #FFFFFF;
}

.section-image .nav-pills .nav-link {
  background-color: #FFFFFF;
}

.section-image .nav-pills .nav-link:hover,
.section-image .nav-pills .nav-link:focus {
  background-color: #FFFFFF;
}

.section-image .info-title,
.section-image .info.info-horizontal .icon i,
.section-image .card-pricing.card-plain ul li {
  color: #FFFFFF;
}

.section-image .description,
.section-image .info .icon:not(.icon-circle) {
  color: rgba(255, 255, 255, 0.8);
}

.section-image .card:not(.card-plain) .info-title {
  color: #2c2c2c;
}

.section-image .card:not(.card-plain) .info p,
.section-image .card:not(.card-plain) .info .icon,
.section-image .card:not(.card-plain) .description {
  color: #9A9A9A;
}

.section-image .footer {
  color: #FFFFFF;
}

.section-image .card-plain [class*="text-"],
.section-image .card-plain ul li b {
  color: #FFFFFF;
}

.section-image .card-plain .category {
  color: rgba(255, 255, 255, 0.5);
}

.section-image:after {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.7);
}

.section-image .container {
  z-index: 2;
  position: relative;
}

.signup-page .page-header {
  max-height: -webkit-fit-content;
  max-height: -moz-fit-content;
  max-height: fit-content;
  display: block;
  -webkit-box-align: unset;
      -ms-flex-align: unset;
          align-items: unset;
}

.page-header.page-header-mini {
  min-height: 40vh;
  max-height: 340px;
}

.page-header .title {
  margin-bottom: 15px;
}

.page-header .title + h4 {
  margin-top: 10px;
}

.section-story-overview {
  padding: 50px 0;
}

.section-story-overview .image-container img {
  width: 100%;
  left: 0;
  top: 0;
  height: auto;
  position: absolute;
}

[data-background-color="gray"] {
  background-color: #eeeeee;
}

[data-background-color]:not([data-background-color="gray"]) .separator-line {
  background-color: rgba(255, 255, 255, 0.5);
}

[data-background-color]:not([data-background-color="gray"]) .footer.footer-white .footer-brand,
[data-background-color]:not([data-background-color="gray"]) .footer.footer-white ul li > a.nav-link:not(.btn-icon) {
  color: initial;
}

[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .category,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .card-description,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .category,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .category {
  color: #9A9A9A;
}

[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .card-title,
[data-background-color]:not([data-background-color="gray"]) .card:not(.card-plain) .card-title {
  color: initial;
}

[data-background-color]:not([data-background-color="gray"]) .carousel .carousel-inner {
  -webkit-box-shadow: none;
          box-shadow: none;
}

[data-background-color]:not([data-background-color="gray"]) h1,
[data-background-color]:not([data-background-color="gray"]) h2,
[data-background-color]:not([data-background-color="gray"]) h3,
[data-background-color]:not([data-background-color="gray"]) h4,
[data-background-color]:not([data-background-color="gray"]) h5,
[data-background-color]:not([data-background-color="gray"]) h6,
[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item):not(.card-link),
[data-background-color]:not([data-background-color="gray"]) .icons-container i,
[data-background-color]:not([data-background-color="gray"]).card-pricing ul li,
[data-background-color]:not([data-background-color="gray"]) .info.info-horizontal .icon i,
[data-background-color]:not([data-background-color="gray"]) .card-pricing.card-plain ul li {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).card a:not(.btn):not(.dropdown-item) {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).card a:not(.btn):not(.dropdown-item):hover,
[data-background-color]:not([data-background-color="gray"]).card a:not(.btn):not(.dropdown-item):focus {
  border-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]).footer hr,
[data-background-color]:not([data-background-color="gray"]).card-pricing .icon i,
[data-background-color]:not([data-background-color="gray"]).card-pricing ul li {
  border-color: rgba(255, 255, 255, 0.2);
}

[data-background-color]:not([data-background-color="gray"]) .card-footer .stats i,
[data-background-color]:not([data-background-color="gray"]).card-plain .category,
[data-background-color]:not([data-background-color="gray"]) .card-plain .category,
[data-background-color]:not([data-background-color="gray"]) .card-header:after {
  color: rgba(255, 255, 255, 0.5);
}

[data-background-color]:not([data-background-color="gray"]).card-pricing ul li i,
[data-background-color]:not([data-background-color="gray"]).card-pricing ul li b,
[data-background-color]:not([data-background-color="gray"]) .card-pricing.card-plain ul li b,
[data-background-color]:not([data-background-color="gray"]) .card-category,
[data-background-color]:not([data-background-color="gray"]) .author span,
[data-background-color]:not([data-background-color="gray"]) .card-pricing.card-plain ul li i {
  color: rgba(255, 255, 255, 0.8) !important;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .form-group.no-border .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .input-group.no-border .input-group-text {
  color: rgba(255, 255, 255, 0.8);
}

[data-background-color]:not([data-background-color="gray"]) .subscribe-line .form-control {
  background-color: transparent;
  border: 1px solid #E3E3E3;
  color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) .subscribe-line .form-control:last-child {
  border-left: 0 none;
}

[data-background-color]:not([data-background-color="gray"]) .subscribe-line .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .subscribe-line .form-group.no-border .input-group-text,
[data-background-color]:not([data-background-color="gray"]) .subscribe-line .input-group.no-border .input-group-text {
  color: #555555;
  border: 1px solid #E3E3E3;
}

[class*="features-"],
[class*="team-"],
[class*="projects-"],
[class*="pricing-"],
[class*="testimonials-"],
[class*="contactus-"] {
  padding: 80px 0;
}

.page-header .carousel .carousel-indicators {
  bottom: 60px;
}

.page-header .container {
  color: #FFFFFF;
}

.page-header .title {
  color: #FFFFFF;
}

.page-header.header-small {
  height: 65vh;
  min-height: 65vh;
}

.page-header.header-small .container {
  padding-top: 20vh;
}

.header-filter {
  position: relative;
}

.header-filter .container {
  z-index: 2;
  position: relative;
}

.header-filter .info-title,
.header-filter .info.info-horizontal .icon i,
.header-filter .card-pricing.card-plain ul li {
  color: #FFFFFF;
}

.header-filter[filter-color="orange"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(44, 44, 44, 0.2)), to(rgba(224, 23, 3, 0.6)));
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
  /* Standard syntax */
}

.header-filter[filter-color="black"] {
  background: rgba(44, 44, 44, 0.2);
  /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  /* For Opera 11.1 to 12.0 */
  /* For Firefox 3.6 to 15 */
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(44, 44, 44, 0.2)), to(rgba(0, 0, 0, 0.7)));
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(0, 0, 0, 0.7));
  /* Standard syntax */
}

.clear-filter:before {
  display: none;
}

.iframe-container iframe {
  width: 100%;
  -webkit-box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.3);
          box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.3);
}

.header-1 .wrapper,
.header-2 .wrapper,
.header-3 .wrapper {
  background: #CCCCCC;
}

.header-1 .content-center,
.header-2 .content-center,
.header-3 .content-center {
  max-width: none !important;
}

.header-2 .page-header .card,
.header-1 .page-header .card {
  margin-top: 60px;
}

.header-3 .btn {
  margin: 0;
}

.header-3 h6 {
  margin-bottom: 0;
}

.phone-container img {
  width: 100%;
}

.features-2,
.features-1,
.features-3 {
  text-align: center;
}

.features-4 .card {
  margin-top: 70px;
}

.features-2 .info-title,
.features-2 .title {
  color: #FFFFFF;
}

.features-5 .info {
  max-width: none;
  margin: 0 auto;
  padding: 10px 0 0px;
}

.features-5 .phone-container {
  max-width: 200px;
  margin: 0 auto;
}

.features-6 .phone-container {
  max-width: 260px;
  margin: 60px auto 0;
}

.features-6 .info {
  max-width: none;
  margin: 0 auto;
  padding: 10px 0 0px;
}

.features-6 .info:first-child {
  padding-top: 130px;
}

.features-7,
.features-2,
.features-8 {
  position: relative;
}

.features-7:after,
.features-2:after,
.features-8:after {
  display: block;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
  background-color: rgba(0, 0, 0, 0.5);
}

.features-7 .container,
.features-7 .container-fluid,
.features-7 .title,
.features-7 .description,
.features-2 .container,
.features-2 .container-fluid,
.features-2 .title,
.features-2 .description,
.features-8 .container,
.features-8 .container-fluid,
.features-8 .title,
.features-8 .description {
  position: relative;
  z-index: 2;
}

.features-8 .title,
.features-7 .title {
  color: #FFFFFF;
}

.features-8 .title + .description {
  margin-bottom: 70px;
}

.features-7 {
  overflow: hidden;
}

.features-7 .info-title {
  color: #FFFFFF;
}

.features-7 .info-horizontal {
  padding: 15px 0 0;
}

.features-7 .info-horizontal:first-child {
  padding-top: 45px;
}

.features-7 .image-container {
  max-width: 1200px;
  position: relative;
  height: 550px;
  margin-top: 58px;
}

.features-7 .image-container img {
  max-width: 1200px;
  left: 100px;
  top: 0;
  height: 100%;
  position: absolute;
}

.tablet-container {
  margin-top: 40px;
}

[class*="blogs-"] {
  padding: 50px 0;
}

.blogs-1 .card {
  margin-bottom: 80px;
}

.blogs-4 .card {
  margin-bottom: 60px;
  text-align: center;
}

.team-2 .card .card-title {
  margin: 10px 0 0;
}

.team-2 .card h6 {
  margin-top: 5px;
}

.team-2 [class*="col-md-"]:nth-child(2) {
  margin-top: 45px;
}

.team-3 .card.card-profile .card-image a > img {
  border-radius: 0;
  border-bottom-left-radius: 0.1875rem;
  border-top-left-radius: 0.1875rem;
}

.team-3 .card.card-profile .card-title {
  margin-top: 15px;
}

.team-4 .card {
  text-align: left;
}

.team-4 .card .footer {
  margin-top: 0;
}

.team-5 h5.description {
  margin-bottom: 100px;
}

.team-5 [class*="col-md-"] {
  margin-top: 50px;
}

.team-5 [class*="col-md-"]:nth-child(2) {
  margin-top: 95px;
}

.team-5 .card.card-profile .card-title + .category {
  margin-bottom: .625rem;
}

.projects-1 .card-title {
  margin-top: 10px;
}

.projects-2 h2.title {
  margin-top: 5px;
  margin-bottom: 15px;
}

.projects-2 .card-title {
  margin-bottom: 5px;
}

.projects-2 .category {
  color: #888888;
  margin-top: 5px;
}

.projects-2 .card-description {
  margin-top: 20px;
}

.projects-2 .card {
  text-align: center;
}

.projects-3 h2.title,
.projects-3 h3.title {
  margin-bottom: 80px;
  margin-top: 5px;
}

.projects-3 .card {
  margin-bottom: 30px;
  text-align: center;
}

.projects-3 .category {
  margin-bottom: 5px;
}

.projects-3 .card-title {
  margin-top: 10px;
}

.projects-5 h2.title {
  margin-top: 5px;
  margin-bottom: 15px;
}

.projects-5 .info {
  padding: 0;
}

.projects-5 .info p {
  margin: 0;
}

.projects-5 .card-background {
  margin-bottom: 0;
}

.projects-5 .card-background .card-body {
  padding-top: 140px;
  padding-bottom: 140px;
}

.projects-5 hr {
  margin: 70px auto;
  max-width: 970px;
}

.pricing-1 h2.title {
  margin-bottom: 10px;
}

.pricing-1 .card-separator {
  width: 1px;
  display: block;
  height: 100%;
  background-color: rgba(136, 136, 136, 0.2);
  position: absolute;
  left: 0;
  top: 0;
}

.pricing-2 .nav-pills {
  margin-bottom: 50px;
}

.pricing-5 .nav-pills {
  margin-top: 50px;
  margin-bottom: 50px;
}

.pricing-3 .title,
.pricing-4 .title {
  margin-bottom: 10px;
}

.testimonials-1 .description {
  margin-bottom: 50px;
}

.section-testimonials,
.testimonials-2 {
  background-image: none;
}

.section-testimonials .card-profile .card-title,
.section-testimonials .card-profile .card-description,
.testimonials-2 .card-profile .card-title,
.testimonials-2 .card-profile .card-description {
  text-align: left !important;
}

.section-testimonials .card-image,
.testimonials-2 .card-image {
  margin: 0;
}

.section-testimonials .carousel .carousel-inner,
.testimonials-2 .carousel .carousel-inner {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.section-testimonials .carousel .carousel-control-prev i,
.section-testimonials .carousel .carousel-control-next i,
.testimonials-2 .carousel .carousel-control-prev i,
.testimonials-2 .carousel .carousel-control-next i {
  color: #444;
}

.section-testimonials .testimonials-people,
.testimonials-2 .testimonials-people {
  position: relative;
}

.section-testimonials .testimonials-people img,
.testimonials-2 .testimonials-people img {
  position: absolute;
  border-radius: 50%;
  z-index: 4;
}

.section-testimonials .testimonials-people .left-first-person,
.testimonials-2 .testimonials-people .left-first-person {
  left: 2%;
  top: 2%;
  height: 70px;
  width: 70px;
}

.section-testimonials .testimonials-people .left-second-person,
.testimonials-2 .testimonials-people .left-second-person {
  left: 65%;
  top: 100%;
  height: 70px;
  width: 70px;
}

.section-testimonials .testimonials-people .left-third-person,
.testimonials-2 .testimonials-people .left-third-person {
  left: -25%;
  top: 135%;
  height: 120px;
  width: 120px;
}

.section-testimonials .testimonials-people .left-fourth-person,
.testimonials-2 .testimonials-people .left-fourth-person {
  left: 40%;
  top: 180%;
  height: 40px;
  width: 40px;
}

.section-testimonials .testimonials-people .left-fifth-person,
.testimonials-2 .testimonials-people .left-fifth-person {
  left: 95%;
  top: 220%;
  height: 45px;
  width: 45px;
}

.section-testimonials .testimonials-people .left-sixth-person,
.testimonials-2 .testimonials-people .left-sixth-person {
  left: 40%;
  top: 265%;
  height: 95px;
  width: 95px;
}

.section-testimonials .testimonials-people .right-first-person,
.testimonials-2 .testimonials-people .right-first-person {
  right: 2%;
  top: 0;
  height: 60px;
  width: 60px;
}

.section-testimonials .testimonials-people .right-second-person,
.testimonials-2 .testimonials-people .right-second-person {
  right: 30%;
  top: 60%;
  height: 70px;
  width: 70px;
}

.section-testimonials .testimonials-people .right-third-person,
.testimonials-2 .testimonials-people .right-third-person {
  right: 95%;
  top: 95%;
  height: 50px;
  width: 50px;
}

.section-testimonials .testimonials-people .right-fourth-person,
.testimonials-2 .testimonials-people .right-fourth-person {
  right: 66%;
  top: 145%;
  height: 40px;
  width: 40px;
}

.section-testimonials .testimonials-people .right-fifth-person,
.testimonials-2 .testimonials-people .right-fifth-person {
  right: 90%;
  top: 210%;
  height: 100px;
  width: 100px;
}

.section-testimonials .testimonials-people .right-sixth-person,
.testimonials-2 .testimonials-people .right-sixth-person {
  right: 15%;
  top: 240%;
  height: 70px;
  width: 70px;
}

.contactus-1 .info {
  padding: 0;
  margin: 0;
}

.contactus-1 .info:first-child {
  margin-top: 30px;
}

.contactus-1 .info .info-title {
  margin-top: 20px;
  color: #FFFFFF;
}

.contactus-1 .info .icon {
  margin-top: 19px;
  color: #FFFFFF;
}

.contactus-1 .card-contact {
  margin-top: 30px;
}

.contactus-2 {
  padding: 0;
  position: relative;
}

.contactus-2 .card-contact {
  max-width: 560px;
  margin: 80px 0 80px 150px;
}

.contactus-2 .card-contact .info {
  padding: 0;
  margin: 0;
}

.contactus-2 .map {
  width: 100%;
  height: 100%;
  position: absolute;
}

.contactus-2 .info-horizontal .icon {
  margin-top: 28px;
}

.contactus-2 .info-horizontal .icon > i {
  font-size: 2.2em;
  max-width: 45px;
}

.social-line-big-icons [class*="col-"] {
  border-right: 1px solid #E3E3E3;
}

.social-line-big-icons [class*="col-"]:last-child {
  border: 0;
}

.social-line-big-icons .btn {
  margin: 0;
  width: 100%;
  padding-top: 30px !important;
  padding-bottom: 30px !important;
  height: auto;
}

.social-line-big-icons .btn .fab {
  font-size: 25px;
}

.social-line {
  padding: .85rem 0;
}

.subscribe-line {
  padding: 30px 0;
}

.subscribe-line .card {
  margin-top: 54px;
}

.subscribe-line .card .card-block {
  min-height: auto;
}

.subscribe-line.subscribe-line-image {
  position: relative;
  background-position: center center;
  background-size: cover;
}

.subscribe-line.subscribe-line-image .description {
  color: rgba(255, 255, 255, 0.8);
}

.subscribe-line.subscribe-line-image .title {
  color: #FFFFFF;
}

.subscribe-line.subscribe-line-image:after {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.66);
}

.subscribe-line.subscribe-line-image .container {
  z-index: 2;
  position: relative;
}

.social-line-white,
.subscribe-line-white {
  background-color: #FFFFFF;
}

.social-line-black,
.subscribe-line-black {
  background-color: #2c2c2c;
}

.social-line-black [class*="col-"],
.subscribe-line-black [class*="col-"] {
  border-color: rgba(255, 255, 255, 0.1);
}

[data-background-color] .social-line h1,
[data-background-color] .social-line h2,
[data-background-color] .social-line h3,
[data-background-color] .social-line h4,
[data-background-color] .social-line h5,
[data-background-color] .social-line h6 {
  color: initial;
}

[data-background-color] .social-line .btn.btn-simple {
  border: 0;
}

@media screen and (max-width: 991px) {
  .navbar-collapse {
    position: fixed;
    display: block;
    top: 0;
    height: 100% !important;
    width: 300px;
    right: 0;
    z-index: 1032;
    visibility: visible;
    background-color: #999;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    max-height: none !important;
    -webkit-transform: translate3d(300px, 0, 0);
    transform: translate3d(300px, 0, 0);
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .navbar-collapse:before {
    background: #dc3741;
    /* For browsers that do not support gradients */
    /* For Safari 5.1 to 6.0 */
    /* For Opera 11.1 to 12.0 */
    /* For Firefox 3.6 to 15 */
    background: -webkit-gradient(linear, left top, left bottom, from(#dc3741), color-stop(80%, #000));
    background: linear-gradient(#dc3741 0%, #000 80%);
    /* Standard syntax (must be last) */
    opacity: 0.76;
    filter: alpha(opacity=76);
    display: block;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
  }

  .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
    margin: 0 1rem;
    margin-top: 0.3125rem;
  }

  .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
    color: #FFFFFF !important;
  }

  .navbar-collapse .dropdown-menu .dropdown-item {
    color: #FFFFFF;
  }

  .navbar .navbar-nav {
    margin-top: 53px;
    position: relative;
    max-height: calc(100vh - 75px);
    min-height: 100%;
    overflow: auto;
  }

  .navbar .navbar-nav.navbar-logo {
    top: 0;
    height: 53px;
  }

  .navbar .dropdown.show .dropdown-menu,
  .navbar .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    width: auto;
    margin: 0 1rem;
    margin-bottom: 15px;
    padding-top: 0;
    height: 125px;
    overflow-y: scroll;
  }

  .navbar .dropdown.show .dropdown-menu:before,
  .navbar .dropdown .dropdown-menu:before {
    display: none;
  }

  .navbar .dropdown .dropdown-item {
    padding-left: 2.5rem;
  }

  .navbar .dropdown .dropdown-menu {
    display: none;
  }

  .navbar .dropdown.show .dropdown-menu {
    display: block;
  }

  .navbar .dropdown-menu .dropdown-item:focus,
  .navbar .dropdown-menu .dropdown-item:hover {
    color: #FFFFFF;
    border-radius: 0.1875rem;
  }

  .navbar .navbar-translate {
    width: 100%;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify !important;
    -webkit-box-pack: justify !important;
            justify-content: space-between !important;
    -ms-flex-align: center;
    -webkit-box-align: center;
            align-items: center;
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .navbar .navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 1px;
    border-radius: 1px;
    background: #FFFFFF;
  }

  .navbar .navbar-toggler-bar + .navbar-toggler-bar {
    margin-top: 7px;
  }

  .navbar .navbar-toggler-bar.bar2 {
    width: 17px;
    -webkit-transition: width .2s linear;
    transition: width .2s linear;
  }

  .navbar.bg-white:not(.navbar-transparent) .navbar-toggler-bar {
    background: #888888;
  }

  .top-bar {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }

  .middle-bar {
    opacity: 1;
  }

  .bottom-bar {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }

  .top-bar,
  .middle-bar,
  .bottom-bar {
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
  }

  .toggled .top-bar {
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transform-origin: 0%;
            transform-origin: 0%;
  }

  .toggled .bottom-bar {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transform-origin: 0%;
            transform-origin: 0%;
  }

  .toggled .middle-bar {
    opacity: 0;
  }

  [class*="navbar-expand-"] .navbar-collapse {
    width: 300px;
  }

  .wrapper {
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 1;
    top: 0;
    left: auto;
    right: 300px;
    content: "";
    z-index: 9999;
    overflow-x: hidden;
    background-color: transparent;
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .profile-photo .profile-photo-small {
    margin-left: -2px;
  }

  [class*="navbar-toggleable-"] .navbar-collapse {
    width: 300px;
  }

  .button-dropdown {
    display: none;
  }

  .section-nucleo-icons .container .row > [class*="col-"]:first-child {
    text-align: center;
  }

  .footer .copyright {
    text-align: right;
  }

  .section-nucleo-icons .icons-container {
    margin-top: 65px;
  }

  .section-images {
    height: 500px;
    max-height: 500px;
  }

  .section-images .hero-images-container {
    max-width: 500px;
  }

  .section-images .hero-images-container-1 {
    right: 10%;
    top: 68%;
    max-width: 269px;
  }

  .section-images .hero-images-container-2 {
    right: 5%;
    max-width: 135px;
    top: 93%;
  }

  .nav-open .navbar-collapse {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }

  .nav-open .wrapper {
    -webkit-transform: translate3d(-150px, 0, 0);
    transform: translate3d(-150px, 0, 0);
  }

  .nav-open .navbar-translate {
    -webkit-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }

  .nav-open .menu-on-left .navbar-collapse {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }

  .nav-open .menu-on-left .navbar-translate {
    -webkit-transform: translate3d(300px, 0, 0);
    transform: translate3d(300px, 0, 0);
  }

  .nav-open .menu-on-left .wrapper {
    -webkit-transform: translate3d(150px, 0, 0);
    transform: translate3d(150px, 0, 0);
  }

  .nav-open .menu-on-left #bodyClick {
    right: auto;
    left: 300px;
  }
}

@media screen and (min-width: 992px) {
  .navbar-nav .nav-link.profile-photo {
    padding: 0;
    margin: 7px 0.7rem;
  }

  .navbar-nav .nav-link.btn:not(.btn-sm) {
    margin: 0;
  }

  .navbar-nav .nav-item:not(:last-child) {
    margin-right: 5px;
  }

  .navbar-collapse:not(.has-image) {
    background: transparent !important;
  }

  .card.card-form-horizontal [class*="col-sm-"]:not(:last-child),
  .card.card-form-horizontal [class*="col-md-"]:not(:last-child) {
    padding-right: 0;
  }

  .burger-menu .navbar-collapse {
    position: fixed;
    display: block;
    top: 0;
    height: 100% !important;
    width: 300px;
    right: 0;
    z-index: 1032;
    visibility: visible;
    background-color: #999;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    max-height: none !important;
    -webkit-transform: translate3d(300px, 0, 0);
    transform: translate3d(300px, 0, 0);
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .burger-menu .navbar-collapse:before {
    background: #dc3741;
    /* For browsers that do not support gradients */
    /* For Safari 5.1 to 6.0 */
    /* For Opera 11.1 to 12.0 */
    /* For Firefox 3.6 to 15 */
    background: -webkit-gradient(linear, left top, left bottom, from(#dc3741), color-stop(80%, #000));
    background: linear-gradient(#dc3741 0%, #000 80%);
    /* Standard syntax (must be last) */
    opacity: 0.76;
    filter: alpha(opacity=76);
    display: block;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
  }

  .burger-menu .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
    margin: 0 1rem;
    margin-top: 0.3125rem;
  }

  .burger-menu .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
    color: #FFFFFF !important;
  }

  .burger-menu .navbar-collapse .dropdown-menu .dropdown-item {
    color: #FFFFFF;
  }

  .burger-menu .navbar .navbar-nav {
    margin-top: 53px;
    position: relative;
    max-height: calc(100vh - 75px);
    min-height: 100%;
    overflow: auto;
  }

  .burger-menu .navbar .navbar-nav.navbar-logo {
    top: 0;
    height: 53px;
  }

  .burger-menu .navbar .dropdown.show .dropdown-menu,
  .burger-menu .navbar .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    width: auto;
    margin: 0 1rem;
    margin-bottom: 15px;
    padding-top: 0;
    height: 125px;
    overflow-y: scroll;
  }

  .burger-menu .navbar .dropdown.show .dropdown-menu:before,
  .burger-menu .navbar .dropdown .dropdown-menu:before {
    display: none;
  }

  .burger-menu .navbar .dropdown .dropdown-item {
    padding-left: 2.5rem;
  }

  .burger-menu .navbar .dropdown .dropdown-menu {
    display: none;
  }

  .burger-menu .navbar .dropdown.show .dropdown-menu {
    display: block;
  }

  .burger-menu .navbar .dropdown-menu .dropdown-item:focus,
  .burger-menu .navbar .dropdown-menu .dropdown-item:hover {
    color: #FFFFFF;
    border-radius: 0.1875rem;
  }

  .burger-menu .navbar .navbar-translate {
    width: 100%;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify !important;
    -webkit-box-pack: justify !important;
            justify-content: space-between !important;
    -ms-flex-align: center;
    -webkit-box-align: center;
            align-items: center;
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .burger-menu .navbar .navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 1px;
    border-radius: 1px;
    background: #FFFFFF;
  }

  .burger-menu .navbar .navbar-toggler-bar + .navbar-toggler-bar {
    margin-top: 7px;
  }

  .burger-menu .navbar .navbar-toggler-bar.bar2 {
    width: 17px;
    -webkit-transition: width .2s linear;
    transition: width .2s linear;
  }

  .burger-menu .navbar.bg-white:not(.navbar-transparent) .navbar-toggler-bar {
    background: #888888;
  }

  .burger-menu .top-bar {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }

  .burger-menu .middle-bar {
    opacity: 1;
  }

  .burger-menu .bottom-bar {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }

  .burger-menu .top-bar,
  .burger-menu .middle-bar,
  .burger-menu .bottom-bar {
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
  }

  .burger-menu .toggled .top-bar {
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transform-origin: 0%;
            transform-origin: 0%;
  }

  .burger-menu .toggled .bottom-bar {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transform-origin: 0%;
            transform-origin: 0%;
  }

  .burger-menu .toggled .middle-bar {
    opacity: 0;
  }

  .burger-menu [class*="navbar-expand-"] .navbar-collapse {
    width: 300px;
  }

  .burger-menu .wrapper {
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .burger-menu #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 1;
    top: 0;
    left: auto;
    right: 300px;
    content: "";
    z-index: 9999;
    overflow-x: hidden;
    background-color: transparent;
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .burger-menu .navbar-toggler {
    display: block;
  }

  .burger-menu .navbar-collapse {
    display: block !important;
  }

  .burger-menu .navbar-collapse .navbar-nav {
    position: relative;
    max-height: calc(100vh - 75px);
    min-height: 100%;
    overflow: auto;
    margin-top: 53px;
    height: 100%;
    z-index: 2;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .burger-menu .navbar-collapse .navbar-nav .nav-item {
    margin: 0;
  }

  .burger-menu .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }

  .burger-menu.menu-on-left .navbar-collapse {
    right: auto;
    left: 0;
    -webkit-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }

  .burger-menu.menu-on-left .navbar-translate {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
  }

  .burger-menu .navbar-toggleable-md .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }

  .burger-menu .navbar-toggleable-md .navbar-toggler {
    display: inline-block;
  }

  .nav-open .burger-menu.menu-on-left .navbar .navbar-translate {
    -webkit-transform: translate3d(300px, 0, 0);
    transform: translate3d(300px, 0, 0);
  }

  .nav-open .burger-menu .navbar .navbar-translate {
    -webkit-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }

  .nav-open .burger-menu.menu-on-left .navbar-collapse,
  .nav-open .burger-menu .navbar-collapse {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
  }

  .nav-open .burger-menu.menu-on-left #bodyClick {
    right: auto;
    left: 300px;
  }

  .burger-menu.menu-on-left .navbar-brand {
    float: right;
    margin-right: 0;
    margin-left: 1rem;
  }

  .section-nucleo-icons .icons-container {
    margin: 0 0 0 auto;
  }

  .footer:not(.footer-big) .copyright {
    float: right;
  }
}

@media screen and (min-width: 768px) {
  .image-container.image-right {
    top: 80px;
    margin-left: -100px;
    margin-bottom: 130px;
  }

  .image-container.image-left {
    margin-right: -100px;
  }
}

@media screen and (max-width: 768px) {
  .image-container.image-left {
    margin-bottom: 260px;
  }

  .image-container.image-left p.blockquote {
    margin: 0 auto;
    position: relative;
    right: 0;
  }

  .profile-page .page-header {
    min-height: 580px !important;
  }

  .header-2 .card-form-horizontal .input-group,
  .header-2 .card-form-horizontal .form-group {
    margin-bottom: 10px;
  }

  .contactus-2 .card-contact {
    max-width: inherit;
    margin: 0;
    margin-top: 15px;
  }

  .section-story-overview .image-container + .category {
    padding-top: 50px;
  }

  .features-7 .image-container img {
    left: 0px;
    top: 0;
    max-width: inherit;
    width: 100%;
    height: auto;
    position: relative;
  }

  .footer.footer-big .social-feed i {
    padding-bottom: 10px;
  }

  .nav-tabs {
    display: inline-block;
    width: 100%;
    padding-left: 100px;
    padding-right: 100px;
    text-align: center;
  }

  .nav-tabs .nav-item > .nav-link {
    margin-bottom: 5px;
  }

  .landing-page .section-story-overview .image-container:nth-child(2) {
    margin-left: 0;
    margin-bottom: 30px;
  }
}

@media screen and (max-width: 580px) {
  .alert button.close {
    position: absolute;
    right: 6px;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
  }
}

@media screen and (max-width: 576px) {
  .navbar[class*='navbar-toggleable-'] .container {
    margin-left: 0;
    margin-right: 0;
  }

  .typography-line span {
    margin-left: 0;
  }

  .team-4 .card-profile .card-footer {
    text-align: center;
  }

  .nav-pills.nav-pills-just-icons {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .nav-pills.nav-pills-just-icons .nav-item .nav-link {
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
  }

  .footer .pull-left,
  .footer .footer-brand,
  .footer .pull-right {
    float: unset;
  }

  .media {
    display: block;
  }

  .media .media {
    padding-left: 35px;
  }

  .fileinput {
    margin: 0 auto;
  }

  .header-3 .buttons {
    text-align: center !important;
  }

  .blog-post .button-container > .btn:first-child {
    display: block;
  }

  .testimonials-2 .card-testimonial .card-body {
    max-width: 350px;
    min-height: 400px;
    margin: 0 auto;
  }

  .footer .copyright {
    text-align: center;
  }

  .projects-1 .nav-pills {
    display: block;
  }

  .projects-1 .nav-pills .nav-item {
    min-width: 200px;
  }

  .projects-1 .nav-pills:not(.flex-column) .nav-item:not(:last-child) .nav-link {
    margin-right: 0;
  }

  .projects-1 .nav-pills .nav-item .nav-link {
    margin: 0 auto;
    margin-bottom: 15px;
  }

  .subscribe-line .card-form-horizontal .btn {
    margin-top: 10px;
  }

  .modal .modal-dialog .modal-header button.close {
    font-size: 18px;
    right: 12px;
    top: 10px;
  }

  .header-3 .btn {
    margin-bottom: 10px;
  }

  .card.card-fashion:not(.card-background):before {
    display: none;
  }

  .profile-page .content-center {
    margin: 10px 0 0;
  }

  .profile-page .content-center .content .social-description {
    width: 105px;
    max-width: 105px;
  }

  .section-nucleo-icons .icons-container i {
    font-size: 30px;
  }

  .section-nucleo-icons .icons-container i:nth-child(6) {
    font-size: 48px;
  }

  .page-header .container h6.category-absolute {
    width: 90%;
  }
}

@media screen and (min-width: 991px) and (max-width: 1200px) {
  .section-images .hero-images-container-1 {
    right: 9%;
    max-width: 370px;
  }

  .section-images .hero-images-container-2 {
    right: 2%;
    max-width: 216px;
  }
}

@media screen and (max-width: 768px) {
  .section-images {
    height: 300px;
    max-height: 300px;
  }

  .section-images .hero-images-container {
    max-width: 380px;
  }

  .section-images .hero-images-container-1 {
    right: 7%;
    top: 87%;
    max-width: 210px;
  }

  .section-images .hero-images-container-2 {
    right: 1%;
    max-width: 133px;
    top: 99%;
  }

  .pricing-5 .title {
    text-align: center;
  }

  .pricing-5 .nav-pills {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .footer nav {
    display: block;
    float: none;
  }

  #social-buttons > .row .col-md-1:nth-child(2) p,
  #social-buttons > .row .col-md-1:nth-child(3) p,
  #social-buttons > .row .col-md-3 p {
    display: none;
  }
}

@media screen and (max-width: 517px) {
  .alert .alert-icon {
    margin-top: 10px;
  }
}

@media screen and (min-width: 1200px) {
  .section-images .hero-images-container-1 {
    top: 51%;
    right: 21%;
  }

  .section-images .hero-images-container-2 {
    top: 66%;
    right: 14%;
  }
}

@media only screen and (min-height: 950px) {
  .index-page .page-header .category-absolute {
    margin-top: -330px;
  }
}

html {
  scroll-behavior: smooth;
}

@media screen and (max-width: 767px) {
  .web-design-header {
    padding-top: 0px !important;
  }
}

@media screen and (max-width: 767px) {
  .section-images {
    padding-top: 140px !important;
    padding-bottom: 20px !important;
  }
}

@media screen and (max-width: 576px) {
  .zoom {
    height: auto;
    width: 100%;
  }
}

.zoom {
  -webkit-transition: -webkit-transform .2s;
  transition: -webkit-transform .2s;
  transition: transform .2s;
  transition: transform .2s, -webkit-transform .2s;
  /* Animation */
}

@media screen and (min-width: 576px) {
  .zoom:hover {
    /* IE 9 */
    -webkit-transform: scale(1.7);
    /* Safari 3-8 */
    transform: scale(1.7);
  }
}

.navbar .container .collapse:not(.show) {
  display: block;
}

.collapse:not(.show) {
  display: none;
}

.header-filter[filter-color="fflowers"] {
  background: rgba(44, 44, 44, 0.2);
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(44, 44, 44, 0.2)), to(rgba(255, 140, 148, 0.6)));
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(255, 140, 148, 0.6));
}

.header-filter[filter-color="borntomove"] {
  background: rgba(44, 44, 44, 0.2);
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(44, 44, 44, 0.2)), to(rgba(255, 81, 94, 0.6)));
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(255, 81, 94, 0.6));
}

.header-filter[filter-color="omdarling"] {
  background: rgba(44, 44, 44, 0.2);
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(44, 44, 44, 0.2)), to(rgba(105, 149, 174, 0.6)));
  background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(105, 149, 174, 0.6));
}

.btn-primary:hover {
  -webkit-box-shadow: 0 15px 30px 0 rgba(220, 55, 65, 0.35);
          box-shadow: 0 15px 30px 0 rgba(220, 55, 65, 0.35);
}

.btn-primary {
  -webkit-box-shadow: 0 9px 30px -6px rgba(220, 55, 65, 0.35);
          box-shadow: 0 9px 30px -6px rgba(220, 55, 65, 0.35);
}

.bg-indexcase {
  background: #450c10;
}

.bg-primaryy {
  background: rgba(220, 55, 65, 0.6) !important;
}

.index-page .page-header,
.presentation-page .page-header {
  height: 0;
}

.btn-l {
  font-size: 22px;
  text-transform: uppercase;
}

.content-ads {
  font-size: 18px;
}

.nav-pills.nav-pills-icons .nav-item i {
  font-size: 26px;
}

.navbar .navbar-nav .nav-link:not(.btn) i.wk-icons {
  font-size: 18px;
  top: 1px;
  position: relative;
}

.navbar p {
  font-size: 14px;
  font-weight: 600;
}

.bootstrap-select .dropdown-menu.inner li a,
.dropdown-menu .dropdown-item span {
  font-size: 14px;
}

.bg-wk {
  background-color: #dc3741;
}

.fa-wk {
  color: #dc3741;
}

.clear-filter[filter-color=wk] {
  background: rgba(12, 12, 12, 0.2);
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(12, 12, 12, 0.2)), to(rgba(12, 12, 12, 0.6)));
  background: linear-gradient(0deg, rgba(12, 12, 12, 0.2), rgba(12, 12, 12, 0.6));
}

.custom-bg {
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
}

.title {
  font-weight: 700;
  padding-top: 30px;
}

.features-1,
.features-2,
.features-3 {
  text-align: center;
}

.features-3 {
  padding: 80px 0;
}

.info {
  max-width: 360px;
  margin: 0 auto;
  padding: 70px 0 30px;
  text-align: center;
}

.info .icon.icon-circle {
  max-width: 80px;
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  -webkit-box-shadow: 0 9px 35px -6px rgba(0, 0, 0, 0.3);
          box-shadow: 0 9px 35px -6px rgba(0, 0, 0, 0.3);
  font-size: .7142em;
  background-color: #fff;
  position: relative;
}

/* Blue */

.icon.icon-info.icon-circle {
  -webkit-box-shadow: 0 9px 30px -6px rgba(44, 168, 255, 0.35);
          box-shadow: 0 9px 30px -6px rgba(44, 168, 255, 0.35);
}

.info.info-hover:hover .icon.icon-info.icon-circle {
  -webkit-box-shadow: 0 15px 35px 0 rgba(44, 168, 255, 0.35);
          box-shadow: 0 15px 35px 0 rgba(44, 168, 255, 0.35);
}

.info.info-hover:hover .icon {
  -webkit-transform: translate3d(0, -0.5rem, 0);
          transform: translate3d(0, -0.5rem, 0);
}

.info.info-hover:hover .icon.icon-info + .info-title {
  color: #2ca8ff;
}

.icon.icon-info {
  color: #2ca8ff;
}

/* Green */

.icon.icon-success.icon-circle {
  -webkit-box-shadow: 0 9px 30px -6px rgba(24, 206, 15, 0.35);
          box-shadow: 0 9px 30px -6px rgba(24, 206, 15, 0.35);
}

.info.info-hover:hover .icon.icon-success.icon-circle {
  -webkit-box-shadow: 0 15px 35px 0 rgba(24, 206, 15, 0.35);
          box-shadow: 0 15px 35px 0 rgba(24, 206, 15, 0.35);
}

.info.info-hover:hover .icon.icon-success + .info-title {
  color: #18ce0f;
}

.info.info-hover:hover .icon {
  -webkit-transform: translate3d(0, -0.5rem, 0);
          transform: translate3d(0, -0.5rem, 0);
}

.icon.icon-success {
  color: #18ce0f;
}

/* Orange */

.icon.icon-primary.icon-circle {
  -webkit-box-shadow: 0 9px 30px -6px rgba(220, 55, 65, 0.35);
          box-shadow: 0 9px 30px -6px rgba(220, 55, 65, 0.35);
}

.info.info-hover:hover .icon.icon-primary.icon-circle {
  -webkit-box-shadow: 0 15px 30px 0 rgba(220, 55, 65, 0.35);
          box-shadow: 0 15px 30px 0 rgba(220, 55, 65, 0.35);
}

.info.info-hover:hover .icon {
  -webkit-transform: translate3d(0, -0.5rem, 0);
          transform: translate3d(0, -0.5rem, 0);
}

.info.info-hover:hover .icon.icon-primary + .info-title {
  color: #dc3741;
}

.info .icon {
  -webkit-transition: -webkit-transform .4s,-webkit-box-shadow .4s;
  transition: -webkit-transform .4s,-webkit-box-shadow .4s;
  transition: transform .4s,box-shadow .4s;
  transition: transform .4s,box-shadow .4s,-webkit-transform .4s,-webkit-box-shadow .4s;
}

.info .icon > i {
  font-size: 3em;
}

.info .icon.icon-circle i {
  line-height: 2.7;
}

.icon.icon-primary {
  color: #dc3741;
}

.dropdown-item .active-a {
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 0.1875rem;
}

.landing_page_step {
  font-weight: bold;
  font-size: 16px;
}

.check_price_landing {
  float: left;
  color: #dc3741;
  font-weight: bold;
}

<<<<<<< HEAD
=======
.simple_remove_icon_price {
  float: left;
  color: grey;
  font-weight: bold;
}

>>>>>>> 9ef9a3eb84ccac3804f33e7d166f743fd6730833
.landing_page_questions {
  font-size: 1.5em !important;
}

@media only screen and (max-width: 991px) {
  .landing_page_header {
    font-size: 2.5em;
    padding-top: 15px;
  }
}

.image-left-bottom {
  background-image: url("/images/landing/landing-page-3.jpg");
  height: 535px !important;
  background-repeat: no-repeat !important;
  background-size: contain  !important;
  background-position: center  !important;
}

@media only screen and (max-width: 1024px) {
  .image-left-bottom {
    margin-left: 0px !important;
  }
}

@media only screen and (max-width: 767px) {
  .image-left-bottom {
    display: none;
    margin-left: 0px;
  }
}

@media only screen and (max-width: 767px) {
  .landing_page_steps_header {
    margin-top: 30px;
  }
}

.smm-collapse {
  font-size: 20px;
  font-weight: bold;
}

.smm_advatages_p {
  font-size: 18px;
}

.smm_strategy_ul {
  list-style: none;
}

.smm_strategy_ul .smm_strategy_li::before {
  content: "\2022";
  color: #dc3741;
  font-weight: bold;
  display: inline-block;
  width: 1em;
  margin-left: -1em;
}

.page_header_dscr {
  font-weight: 600;
  color: rgba(255, 255, 255, 0.8);
}

.card_price_title {
  line-height: 1.25em;
  font-weight: 400;
  font-size: 3.5em;
  margin-bottom: .75rem;
}

.price_category {
  font-size: 0.9em;
  margin-bottom: .5rem;
  font-family: inherit;
  line-height: 1.2;
  margin-top: 0;
}

.card_price_title small {
  font-weight: 700;
  text-transform: uppercase;
  opacity: .8;
  position: relative;
  top: -17px;
  font-size: 26px;
}

.wkn-case-card {
  -webkit-box-shadow: -1px 5px 10px 0px rgba(0, 0, 0, 0.8);
          box-shadow: -1px 5px 10px 0px rgba(0, 0, 0, 0.8);
  border-radius: 0.25rem !important;
}

.outer-div {
  height: 100%;
  overflow: hidden;
}

.inner-div {
  height: 100%;
  width: 100%;
  background-size: cover;
  background-position: center;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  position: relative;
}

.inner-div:hover {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.card_color_filter {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  max-width: inherit !important;
}

.content_strategy_steps {
  padding-top: 5px;
  font-size: 1.75em;
}

.content_marketing_wkn {
  list-style-type: none;
}

.content_marketing_wkn-li {
  display: inline;
}

.content_marketing_wkn_check {
  color: red;
  width: 40px;
  height: 40px;
  border-radius: 100%;
  border: 1px solid #2c2c2c;
  padding-right: 20px;
  min-height: 28px;
  margin-bottom: 15px;
  padding-left: 5px;
  padding-top: 7px;
  font-size: 1.75em;
  font-weight: 900;
}

.content_marketing_wkn_services_row {
  border-bottom: 1px solid rgba(136, 136, 136, 0.3);
  margin-bottom: 10px;
}

.content_marketing_wkn_services {
  font-size: 1.5em;
}

.info-title-content {
  color: #888888;
}

@media only screen and (max-width: 767px) {
  .testimonials-seo {
    padding-bottom: 0;
  }
}

.call-to-action-section h4 {
  color: #dc3741;
  font-weight: bold;
  font-size: 39.5px;
  font-style: italic;
}

.call-to-action-section h5 {
  font-size: 25px;
  font-style: italic;
  font-weight: bold;
  color: #032750;
  margin-top: -20px;
  margin-bottom: 5px;
}

@media only screen and (max-width: 767px) {
  .img_blog_post {
    width: 100%;
    height: auto !important;
    -webkit-box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.2);
  }
}

<<<<<<< HEAD
=======
.wordpress_wkn {
  list-style-type: none;
}

.wordpress_wkn-li {
  display: inline;
}

.wordpress_wkn_check {
  color: red;
  width: 40px;
  height: 40px;
  border-radius: 100%;
  border: 1px solid #2c2c2c;
  padding-right: 20px;
  min-height: 28px;
  margin-bottom: 15px;
  padding-left: 5px;
  padding-top: 7px;
  font-size: 1.75em;
  font-weight: 900;
}

.wordpress_wkn_services_row {
  border-bottom: 1px solid rgba(136, 136, 136, 0.3);
  margin-bottom: 10px;
}

.wordpress_wkn_services {
  font-size: 1.1em;
}

>>>>>>> 9ef9a3eb84ccac3804f33e7d166f743fd6730833
.tim-row {
  margin-bottom: 20px;
}

/*      transitions */

.presentation-page .front,
.presentation-page .front:after,
.presentation-page .front .btn,
.logo-container .logo,
.logo-container .brand {
  -webkit-transition: all .2s;
  transition: all .2s;
}

.bd-docs .navbar .navbar-nav {
  margin-top: 0;
}

.section-notifications .container-fluid {
  padding: 0;
}

@media screen and (max-width: 576px) {
  .section-notifications .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
  }
}

.presentation-page .loader {
  opacity: 0;
  display: block;
  transition: all 0.4s;
  -webkit-transition: all 0.4s;
  position: fixed;
  left: 50%;
  top: 50%;
  z-index: 1031;
  margin-left: -32px;
  margin-top: -32px;
}

.presentation-page .section-basic-components,
.presentation-page .section-testimonials {
  overflow: hidden;
}

.presentation-page .loader.visible {
  display: block;
  opacity: 1;
}

.presentation-page .modal-content {
  background-color: transparent;
  -webkit-box-shadow: 0 0 0;
          box-shadow: 0 0 0;
}

.presentation-page .modal-backdrop.in {
  opacity: 0.45;
}

.presentation-page .preload-image {
  display: none;
  -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.15), 0 0 1px 1px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 15px rgba(0, 0, 0, 0.15), 0 0 1px 1px rgba(0, 0, 0, 0.1);
}

.presentation-page .section-components .col-md-3 {
  max-width: 16%;
  padding-left: 100px;
}

.presentation-page .section-icons {
  padding: 180px 0;
}

.presentation-page .section-icons [class*="col-"]:nth-child(2) {
  padding: 0 70px;
}

.presentation-page .section-icons[data-background-color="black"] {
  background-color: #777777;
}

.presentation-page .section-icons .icons-nucleo {
  width: 100%;
  height: 100%;
  position: relative;
  top: -48px;
}

.presentation-page .section-icons .icons-nucleo .now-ui-icons {
  position: absolute;
  color: #fff;
  transform: translate3D(0px, 50px, 0px);
  -webkit-transform: translate3D(0px, 50px, 0px);
  -webkit-transition: all 0.6s cubic-bezier(0.34, 2, 0.7, 1) 0s;
  transition: all 0.6s cubic-bezier(0.34, 2, 0.7, 1) 0s;
}

.presentation-page .section-icons .icons-nucleo .first-left-icon {
  top: -25%;
  left: 10%;
  font-size: 65px;
}

.presentation-page .section-icons .icons-nucleo .second-left-icon {
  top: 0%;
  left: 45%;
  font-size: 35px;
}

.presentation-page .section-icons .icons-nucleo .third-left-icon {
  top: 30%;
  left: 65%;
  font-size: 25px;
}

.presentation-page .section-icons .icons-nucleo .fourth-left-icon {
  top: 70%;
  left: 10%;
  font-size: 50px;
}

.presentation-page .section-icons .icons-nucleo .fifth-left-icon {
  top: 45%;
  left: 30%;
  font-size: 40px;
}

.presentation-page .section-icons .icons-nucleo .sixth-left-icon {
  top: 120%;
  left: 35%;
  font-size: 40px;
}

.presentation-page .section-icons .icons-nucleo .seventh-left-icon {
  top: 35%;
  left: 85%;
  font-size: 45px;
}

.presentation-page .section-icons .icons-nucleo .eighth-left-icon {
  top: 90%;
  left: 55%;
  font-size: 30px;
}

.presentation-page .section-icons .icons-nucleo .ninth-left-icon {
  top: 40%;
  left: 5%;
  font-size: 40px;
}

.presentation-page .section-icons .icons-nucleo .tenth-left-icon {
  top: 75%;
  left: 80%;
  font-size: 35px;
}

.presentation-page .section-icons .icons-nucleo .first-right-icon {
  top: -25%;
  right: 10%;
  font-size: 65px;
}

.presentation-page .section-icons .icons-nucleo .second-right-icon {
  top: 0%;
  right: 45%;
  font-size: 35px;
}

.presentation-page .section-icons .icons-nucleo .third-right-icon {
  top: 30%;
  right: 65%;
  font-size: 25px;
}

.presentation-page .section-icons .icons-nucleo .fourth-right-icon {
  top: 70%;
  right: 10%;
  font-size: 50px;
}

.presentation-page .section-icons .icons-nucleo .fifth-right-icon {
  top: 45%;
  right: 30%;
  font-size: 40px;
}

.presentation-page .section-icons .icons-nucleo .sixth-right-icon {
  top: 120%;
  right: 35%;
  font-size: 35px;
}

.presentation-page .section-icons .icons-nucleo .seventh-right-icon {
  top: 35%;
  right: 88%;
  font-size: 30px;
}

.presentation-page .section-icons .icons-nucleo .eighth-right-icon {
  top: 90%;
  right: 55%;
  font-size: 35px;
}

.presentation-page .section-icons .icons-nucleo .ninth-right-icon {
  top: 40%;
  right: 5%;
  font-size: 40px;
}

.presentation-page .section-icons .icons-nucleo .tenth-right-icon {
  top: 75%;
  right: 80%;
  font-size: 35px;
}

.presentation-page .section-cards .image-container1,
.presentation-page .section-cards .image-container2,
.presentation-page .section-cards .image-container3,
.presentation-page .section-cards .image-container4,
.presentation-page .section-cards .image-container5 {
  display: inline-block;
  position: relative;
  -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
  border-radius: 0.1875rem;
  overflow: hidden;
}

.presentation-page .section-cards .image-container1 {
  left: 48px;
}

.presentation-page .section-cards .image-container5 {
  right: 48px;
}

.presentation-page .section-cards .image-container2 {
  left: 25px;
}

.presentation-page .section-cards .image-container4 {
  right: 25px;
}

.presentation-page .section-cards .images-container {
  height: 100%;
  margin: 0 auto;
  text-align: center;
  margin-top: 60px;
}

.presentation-page .section-cards .image-container1,
.presentation-page .section-cards .image-container5 {
  width: 16%;
  top: -53px;
  z-index: 1;
}

.presentation-page .section-cards .image-container2,
.presentation-page .section-cards .image-container4 {
  width: 22%;
  top: -27px;
  z-index: 2;
}

.presentation-page .section-cards .image-container3 {
  width: 22%;
  z-index: 3;
}

.presentation-page .section-cards + .section-content {
  padding-top: 480px;
  padding-bottom: 30px;
  margin-top: -277px;
}

.presentation-page .page-header + .section-components {
  padding-top: 300px;
}

.presentation-page .colors {
  padding: 100px 0;
}

.presentation-page > .description {
  padding-top: 20px;
}

.presentation-page .section-rotation {
  padding: 140px 0;
}

.presentation-page .section-images {
  padding: 80px 0;
}

.presentation-page .section-thin {
  padding: 0;
}

.presentation-page .section-pay {
  padding-top: 20px;
}

.presentation-page .colors {
  padding: 70px 0;
  z-index: 7;
  position: relative;
  margin-top: -300px;
}

.presentation-page .colors {
  border-top: 1px solid #DDDDDD;
}

.presentation-page .card-container {
  -webkit-perspective: 900px;
  -o-perspective: 900px;
  perspective: 900px;
  width: 300px;
  position: relative;
  margin-top: 90px;
}

.presentation-page .card-component {
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  position: relative;
  height: 500px;
}

.presentation-page .card-component .front {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: rotateY(-35deg);
  transform: rotateY(-35deg);
  position: absolute;
  top: 0;
  left: 0;
  background-color: #FFF;
  width: 100%;
  cursor: pointer;
  -webkit-box-shadow: 10px 4px 14px rgba(0, 0, 0, 0.12);
          box-shadow: 10px 4px 14px rgba(0, 0, 0, 0.12);
  border-radius: 10px;
  overflow: hidden;
}

.presentation-page h5.description {
  margin-top: 35px;
}

.presentation-page .category {
  text-transform: uppercase;
}

.presentation-page .section-basic-components {
  padding: 190px 0;
}

.presentation-page .section-basic-components .title {
  margin-top: 60px;
}

.presentation-page .section-basic-components .image-container {
  height: 380px;
  position: relative;
}

.presentation-page .section-basic-components .image-container .components-macbook {
  width: auto;
  left: 100px;
  top: 0;
  height: auto;
  position: absolute;
}

.presentation-page .section-basic-components .image-container .table-img,
.presentation-page .section-basic-components .image-container .share-btn-img,
.presentation-page .section-basic-components .image-container .coloured-card-btn-img,
.presentation-page .section-basic-components .image-container .coloured-card-img,
.presentation-page .section-basic-components .image-container .social-img,
.presentation-page .section-basic-components .image-container .linkedin-btn-img {
  position: absolute;
  -webkit-box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
          box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
}

.presentation-page .section-basic-components .image-container .table-img {
  left: 65%;
  top: 23%;
  height: 175px;
  border-radius: 3px;
}

.presentation-page .section-basic-components .image-container .share-btn-img {
  left: 83%;
  top: 95%;
  height: 25px;
  border-radius: 10px;
}

.presentation-page .section-basic-components .image-container .coloured-card-img {
  left: 50%;
  top: -11%;
  height: 102px;
  border-radius: 3px;
}

.presentation-page .section-basic-components .image-container .coloured-card-btn-img {
  left: -3%;
  top: 42%;
  height: 133px;
  border-radius: 3px;
}

.presentation-page .section-basic-components .image-container .social-img {
  left: -4%;
  top: 95%;
  height: 57px;
}

.presentation-page .section-basic-components .image-container .linkedin-btn-img {
  left: 3%;
  top: -3%;
  height: 25px;
  border-radius: 10px;
}

.presentation-page .section-components + .section {
  margin-top: -270px;
  z-index: 7;
  position: relative;
  border-top: 1px solid rgba(231, 231, 231, 0.5);
}

.presentation-page .info {
  max-width: 410px;
}

.presentation-page .section-free-demo {
  overflow: hidden;
}

.presentation-page .section-free-demo .github-buttons > .btn {
  float: left;
  margin-right: 15px;
}

.presentation-page .section-free-demo .github-buttons .github-button {
  float: left;
  margin-top: 15px;
}

.presentation-page .section-free-demo .github-background-container {
  position: absolute;
  right: -420px;
  top: -50px;
}

.presentation-page .section-free-demo .github-background-container i {
  font-size: 810px;
  opacity: .1;
}

.presentation-page .section-sections {
  overflow: hidden;
  padding-top: 200px;
}

.presentation-page .section-sections .container-fluid {
  z-index: 1;
}

.presentation-page .section-sections .container-fluid img {
  position: relative;
  z-index: 2;
}

.presentation-page .section-examples {
  margin-top: -125px;
}

.presentation-page .section-examples .section-description {
  margin-top: 100px;
}

.presentation-page .section-testimonials {
  padding-bottom: 0;
}

.presentation-page .section-testimonials[data-background-color="black"] {
  background: #181818;
}

.presentation-page .section-testimonials .carousel .card {
  margin: 40px auto;
}

.presentation-page .section-testimonials .testimonials-people {
  margin-top: -100px;
}

.presentation-page .section-pricing .our-clients {
  margin-bottom: 100px;
  margin-top: 50px;
}

.presentation-page .section-pricing .our-clients img {
  width: 100%;
  max-width: 120px;
  margin: 0 30px;
  display: inline-block;
}

.presentation-page .section-sharing span {
  margin-top: 30px;
  display: block;
}

.presentation-page .section-sharing .fa-pay {
  font-size: 30px;
  display: inline-block;
  margin: 5px 1px 0;
  width: auto;
}

.presentation-page .section-components {
  z-index: 1;
}

.presentation-page .front img {
  z-index: 2;
  position: relative;
}

.presentation-page .card-component img {
  width: 100%;
}

.presentation-page .description .col-md-3 {
  width: 16%;
  margin-left: 4%;
}

.presentation-page .first-card {
  z-index: 6;
}

.presentation-page .second-card {
  z-index: 5;
}

.presentation-page .third-card {
  z-index: 4;
}

.presentation-page .fourth-card {
  z-index: 3;
}

.presentation-page .section-gray h1 small {
  color: #888888;
}

.presentation-page .color-container {
  text-align: center;
}

.presentation-page .color-container img {
  width: 100%;
  margin-bottom: 10px;
}

.presentation-page .circle-color {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  display: block;
  background-color: #cccccc;
  margin: 0 auto;
}

.presentation-page .circle-red {
  background-color: #ff3b30;
}

.presentation-page .circle-blue {
  background-color: #3472f7;
}

.presentation-page .circle-azure {
  background-color: #2ca8ff;
}

.presentation-page .circle-green {
  background-color: #05ae0e;
}

.presentation-page .circle-orange {
  background-color: #ff9500;
}

.presentation-page .rellax-text-container,
.index-page .rellax-text-container {
  max-width: 1003px;
  margin: 0 auto;
  text-align: center;
  position: relative;
  top: 24%;
}

.presentation-page .rellax-text-container .h1-seo,
.index-page .rellax-text-container .h1-seo {
  font-size: 16.8em;
  text-transform: uppercase;
  font-weight: 600;
  font-family: 'Open Sans Condensed', sans-serif;
  z-index: 1;
  letter-spacing: -10px;
  text-align: center;
  background: #B87EA1;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, #FFFFFF), to(#B87EA1));
  background: linear-gradient(to bottom, #FFFFFF 60%, #B87EA1 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.presentation-page .rellax-text-container .pro,
.index-page .rellax-text-container .pro {
  position: absolute;
  font-size: 20px;
  background: #132026;
  padding: 6px 10px;
  border-radius: 4px;
  top: 41px;
  font-weight: 600;
  margin-top: 10px;
  right: -78px;
}

.presentation-page .n-logo,
.index-page .n-logo {
  max-width: 100px;
  margin-bottom: 40px;
}

.presentation-page .page-header-city,
.index-page .page-header-city {
  background-size: cover;
  background-position: top;
  background-repeat: no-repeat;
}

.presentation-page .h3-description,
.index-page .h3-description {
  z-index: 3;
  top: 63%;
  position: absolute;
  width: 100%;
  text-align: center;
  text-shadow: 0 2px 8px rgba(0, 0, 0, 0.71);
}

.presentation-page .category-absolute,
.index-page .category-absolute {
  z-index: 3;
}

.presentation-page .rellax-header,
.index-page .rellax-header {
  position: absolute;
  height: 100%;
  width: 100%;
}

.presentation-page .rellax-header-sky,
.index-page .rellax-header-sky {
  z-index: 0;
  height: 100%;
}

.presentation-page .rellax-header-buildings,
.index-page .rellax-header-buildings {
  z-index: 2;
}

.presentation-page [data-background-color="dark-red"],
.index-page [data-background-color="dark-red"] {
  background: #220c08;
}

.index-page .rellax-text-container {
  top: 22%;
}

.index-page .rellax-text-container .h1-seo {
  letter-spacing: -3px;
  font-size: 9em;
}

.tim-white-buttons {
  background-color: #777777;
}

.typography-line {
  padding-left: 25%;
  margin-bottom: 35px;
  position: relative;
  display: block;
  width: 100%;
}

.typography-line span {
  bottom: 10px;
  color: #c0c1c2;
  display: block;
  font-weight: 400;
  font-size: 13px;
  line-height: 13px;
  left: 0;
  margin-left: 20px;
  position: absolute;
  width: 260px;
  text-transform: none;
}

.tim-row {
  padding-top: 60px;
}

.tim-row h3 {
  margin-top: 0;
}

.switch {
  margin-right: 20px;
}

#navbar-full .navbar {
  border-radius: 0 !important;
  margin-bottom: 15px;
  z-index: 2;
}

#menu-dropdown .navbar {
  border-radius: 3px;
}

#pagination-row .pagination-container {
  height: 100%;
  max-height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

#icons-row i.now-ui-icons {
  font-size: 30px;
}

.space {
  height: 130px;
  display: block;
}

.space-110 {
  height: 110px;
  display: block;
}

.space-50 {
  height: 50px;
  display: block;
}

.space-70 {
  height: 70px;
  display: block;
}

.navigation-example .img-src {
  background-attachment: scroll;
}

.navigation-example {
  background-position: center center;
  background-size: cover;
  margin-top: 0;
  min-height: 740px;
  height: 100%;
}

#notifications {
  background-color: #FFFFFF;
  display: block;
  width: 100%;
  position: relative;
}

.tim-note {
  text-transform: capitalize;
}

#buttons .btn,
#javascriptComponents .btn {
  margin: 0 0px 10px;
}

.space-100 {
  height: 100px;
  display: block;
  width: 100%;
}

.be-social {
  padding-bottom: 20px;
  /*     border-bottom: 1px solid #aaa; */
  margin: 0 auto 40px;
}

.txt-white {
  color: #FFFFFF;
}

.txt-gray {
  color: #ddd !important;
}

.parallax {
  width: 100%;
  height: 570px;
  display: block;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

.logo-container .logo {
  overflow: hidden;
  border-radius: 50%;
  border: 1px solid #333333;
  width: 50px;
  float: left;
}

.logo-container .brand {
  font-size: 16px;
  color: #FFFFFF;
  line-height: 18px;
  float: left;
  margin-left: 10px;
  margin-top: 7px;
  width: 70px;
  height: 40px;
  text-align: left;
}

.logo-container .brand-material {
  font-size: 18px;
  margin-top: 15px;
  height: 25px;
  width: auto;
}

.logo-container .logo img {
  width: 100%;
}

.navbar-small .logo-container .brand {
  color: #333333;
}

.fixed-section {
  top: 90px;
  max-height: 80vh;
  overflow: scroll;
  position: -webkit-sticky;
  position: sticky;
}

.fixed-section ul {
  padding: 0;
}

.fixed-section ul li {
  list-style: none;
}

.fixed-section li a {
  font-size: 14px;
  padding: 2px;
  display: block;
  color: #666666;
}

.fixed-section li a.active {
  color: #00bbff;
}

.fixed-section.float {
  position: fixed;
  top: 100px;
  width: 200px;
  margin-top: 0;
}

.parallax .parallax-image {
  width: 100%;
  overflow: hidden;
  position: absolute;
}

.parallax .parallax-image img {
  width: 100%;
}

@media (max-width: 768px) {
  .parallax .parallax-image {
    width: 100%;
    height: 640px;
    overflow: hidden;
  }

  .parallax .parallax-image img {
    height: 100%;
    width: auto;
  }
}

.social-buttons-demo .btn {
  margin-right: 5px;
  margin-bottom: 7px;
}

.img-container {
  width: 100%;
  overflow: hidden;
}

.img-container img {
  width: 100%;
}

.lightbox img {
  width: 100%;
}

.lightbox .modal-content {
  overflow: hidden;
}

.lightbox .modal-body {
  padding: 0;
}

@media screen and (min-width: 991px) {
  .lightbox .modal-dialog {
    width: 960px;
  }
}

@media screen and (max-width: 576px) {
  .index-page .typography-line span {
    margin-left: 0;
  }

  .presentation-page .section-cards + .section-content {
    padding-top: 70px;
    margin-top: 0;
  }

  .presentation-page .rellax-text-container .pro {
    bottom: 84px;
    top: initial;
    font-size: 13px;
    right: 55px;
  }

  .presentation-page .section-components .col-md-3 {
    max-width: inherit;
  }

  .presentation-page .card-container {
    margin: 0 auto;
  }

  .presentation-page .card-container .card-component .front {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }

  .presentation-page .rellax-text-container .h1-seo,
  .presentation-page .index-page .h1-seo {
    background: -webkit-gradient(linear, left top, left bottom, color-stop(64%, #FFFFFF), to(#B87EA1));
    background: linear-gradient(to bottom, #FFFFFF 64%, #B87EA1 100%);
    -webkit-background-clip: text;
    font-size: 8.4em;
  }

  .presentation-page .rellax-text-container,
  .index-page .rellax-text-container {
    top: 21%;
    max-width: 360px;
  }

  .index-page .rellax-text-container {
    top: 25%;
  }

  .index-page .rellax-text-container .h1-seo {
    font-size: 3.8em;
  }
}

@media only screen and (min-device-width: 375px) and (max-device-width: 667px) {
  .presentation-page .rellax-text-container {
    top: 20% !important;
  }

  .presentation-page .page-header + .section-components {
    padding-top: 200px;
  }
}

@media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (orientation: portrait) {
  .presentation-page .rellax-text-container {
    top: 17% !important;
  }
}

@media screen and (max-width: 768px) and (min-width: 576px) {
  .presentation-page .rellax-text-container,
  .index-page .rellax-text-container {
    max-width: 565px;
    top: 33%;
  }

  .index-page .rellax-text-container {
    top: 26%;
  }

  .presentation-page .rellax-text-container .h1-seo {
    font-size: 9.3em;
  }

  .index-page .rellax-text-container .h1-seo {
    font-size: 5.6em;
  }

  .presentation-page .rellax-text-container .pro {
    font-size: 12px;
    top: -14px;
    right: 2px;
  }
}

@media screen and (max-width: 991px) and (min-width: 768px) {
  .presentation-page .rellax-text-container,
  .index-page .rellax-text-container {
    max-width: 730px;
    top: 32%;
  }

  .index-page .rellax-text-container {
    top: 24%;
  }

  .presentation-page .rellax-text-container .pro {
    font-size: 14px;
    top: 18px;
    right: -3px;
  }

  .presentation-page .rellax-text-container .h1-seo {
    font-size: 10.8em;
  }

  .index-page .rellax-text-container .h1-seo {
    font-size: 6.9em;
  }
}

@media screen and (min-width: 768px) {
  .presentation-page .card-container:hover .front {
    top: -80px;
  }

  .presentation-page .section-content .image-container {
    height: 400px;
  }

  .presentation-page .section-content .image-container img {
    position: absolute;
    width: 100%;
    max-width: 380px;
  }

  .presentation-page .section-content .image-container .img-blog {
    z-index: 4;
    left: 100px;
    top: 20px;
  }

  .presentation-page .section-content .image-container .img-comments {
    z-index: 3;
    left: -100px;
    top: -40px;
  }
}

@media (max-width: 991px) {
  .fixed-section.affix {
    position: relative;
    margin-bottom: 100px;
  }

  .presentation-page .section-cards .image-container1,
  .presentation-page .section-cards .image-container5 {
    width: 15%;
    top: -75px;
  }

  .presentation-page .section-cards .image-container2,
  .presentation-page .section-cards .image-container4 {
    width: 21%;
    top: -62px;
  }

  .presentation-page .section-cards .image-container3 {
    width: 22%;
    top: -45px;
  }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
  .presentation-page .section-icons .icons-nucleo {
    position: initial;
  }

  .presentation-page .third-right-icon,
  .presentation-page .fourth-right-icon,
  .presentation-page .fifth-right-icon,
  .presentation-page .sixth-right-icon,
  .presentation-page .seventh-right-icon,
  .presentation-page .eighth-right-icon,
  .presentation-page .ninth-right-icon,
  .presentation-page .tenth-right-icon,
  .presentation-page .second-left-icon,
  .presentation-page .third-left-icon,
  .presentation-page .fifth-left-icon,
  .presentation-page .sixth-left-icon,
  .presentation-page .eighth-left-icon,
  .presentation-page .fourth-left-icon,
  .presentation-page .ninth-left-icon,
  .presentation-page .tenth-left-icon {
    display: none;
  }

  .presentation-page .section-icons .icons-nucleo .first-right-icon,
  .presentation-page .section-icons .icons-nucleo .first-left-icon {
    top: -15%;
  }

  .presentation-page .section-icons .icons-nucleo .second-right-icon {
    top: 35%;
    right: 80%;
  }

  .presentation-page .section-content .image-container {
    height: 550px;
  }

  .index-page .category-absolute {
    top: 90vh;
  }

  .footer ul {
    text-align: left;
  }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
  .section-images .hero-images-container,
  .section-images .hero-images-container-1,
  .section-images .hero-images-container-2 {
    margin-top: -15vh;
    margin-left: 80px;
  }

  .section-images .hero-images-container {
    max-width: 300px;
  }

  .section-images .hero-images-container-1 {
    right: 28%;
    top: 40%;
  }

  .section-images .hero-images-container-2 {
    right: 21%;
    top: 55%;
  }

  .index-page .category-absolute {
    top: 90vh;
  }
}

@media (max-width: 768px) {
  .btn,
  .btn-morphing {
    margin-bottom: 10px;
  }

  .parallax .motto {
    top: 170px;
    margin-top: 0;
    font-size: 60px;
    width: 270px;
  }
}

@media screen and (max-width: 767px) {
  .presentation-page .section-icons .icons-nucleo {
    top: -135px;
  }

  .presentation-page .section-icons .icons-nucleo.icons-nucleo-right {
    top: 0;
  }

  .presentation-page .first-right-icon,
  .presentation-page .second-right-icon,
  .presentation-page .third-right-icon,
  .presentation-page .fourth-right-icon,
  .presentation-page .fifth-right-icon,
  .presentation-page .sixth-right-icon,
  .presentation-page .seventh-right-icon,
  .presentation-page .eighth-right-icon,
  .presentation-page .ninth-right-icon,
  .presentation-page .tenth-right-icon,
  .presentation-page .second-left-icon,
  .presentation-page .third-left-icon,
  .presentation-page .fifth-left-icon,
  .presentation-page .sixth-left-icon,
  .presentation-page .eighth-left-icon {
    display: none;
  }

  .presentation-page .section-icons .icons-nucleo .first-left-icon {
    left: 2%;
  }

  .presentation-page .section-icons .icons-nucleo .fourth-left-icon {
    left: 46%;
  }

  .presentation-page .section-icons .icons-nucleo .seventh-left-icon {
    left: 80%;
    font-size: 55px;
  }

  .presentation-page .section-icons .icons-nucleo .ninth-left-icon {
    left: 28%;
  }

  .presentation-page .section-icons .icons-nucleo .tenth-left-icon {
    left: 65%;
  }

  .presentation-page .testimonials-people img {
    position: relative;
    display: none;
  }

  .presentation-page .section-content .image-container {
    margin-bottom: 45px;
  }

  .presentation-page .section-content img {
    margin-bottom: 15px;
  }
}

@media screen and (min-width: 768px) {
  .presentation-page .section-sections .row {
    margin-left: -30px;
    margin-right: -30px;
  }

  .presentation-page .section-sections .rellax {
    left: 60px;
    position: absolute !important;
    z-index: 4 !important;
    -webkit-box-shadow: 0px 8px 50px 0px rgba(0, 0, 0, 0.4);
            box-shadow: 0px 8px 50px 0px rgba(0, 0, 0, 0.4);
  }
}

@media screen and (max-width: 576px) {
  #images img {
    max-width: 50%;
    margin-bottom: 15px;
  }
}

/*       Loading dots  */

#images h4 {
  margin-bottom: 30px;
}

#javascriptComponents {
  padding-bottom: 0;
}

/*      layer animation          */

.layers-container {
  display: block;
  margin-top: 50px;
  position: relative;
}

.layers-container img {
  position: absolute;
  width: 100%;
  height: auto;
  top: 0;
  left: 0;
  text-align: center;
}

.animate {
  transition: 1.5s ease-in-out;
  -moz-transition: 1.5s ease-in-out;
  -webkit-transition: 1.5s ease-in-out;
}

.navbar-default.navbar-small .logo-container .brand {
  color: #333333;
}

.navbar-transparent.navbar-small .logo-container .brand {
  color: #FFFFFF;
}

.navbar-default.navbar-small .logo-container .brand {
  color: #333333;
}

.sharing-area {
  margin-top: 80px;
}

.sharing-area .btn {
  margin: 15px 4px 0;
}

.section-thin,
.section-notifications {
  padding: 0;
}

.section-navbars {
  padding-top: 0;
}

#navbar .navbar {
  margin-bottom: 20px;
}

#navbar .navbar-toggler,
#menu-dropdown .navbar-toggler {
  pointer-events: none;
}

.section-tabs {
  background: #ebebeb;
}

.section-pagination {
  padding-bottom: 0;
}

.section-download {
  padding-top: 130px;
}

.section-download .description {
  margin-bottom: 60px;
}

.section-download h4 {
  margin-bottom: 25px;
}

.section-examples a {
  text-decoration: none;
}

.section-examples a + a {
  margin-top: 30px;
}

.section-examples h5 {
  margin-top: 30px;
}

.components-page .wrapper > .header,
.tutorial-page .wrapper > .header {
  height: 500px;
  padding-top: 128px;
  background-size: cover;
  background-position: center center;
}

.components-page .title,
.tutorial-page .title {
  color: #FFFFFF;
}

.invision-logo {
  max-width: 70px;
  top: -2px;
  position: relative;
}

.creative-tim-logo {
  max-width: 140px;
  top: -2px;
  position: relative;
}

.section-javascript .title {
  margin-bottom: 0;
}

.navbar .switch-background {
  display: block;
}

.navbar-transparent .switch-background {
  display: none;
}

.section-signup .col .btn {
  margin-top: 30px;
}

#buttons-row .btn {
  margin-bottom: 10px;
}

@media screen and (max-width: 991px) {
  .section-navbars .navbar-collapse,
  .header-1 .navbar-collapse,
  .header-2 .navbar-collapse,
  .header-3 .navbar-collapse {
    display: none !important;
  }

  .presentation-page .section-basic-components .image-container {
    height: 425px;
    margin-top: 100px;
  }

  .presentation-page .section-basic-components .image-container .components-macbook {
    width: 100%;
    height: 100%;
    position: relative;
    left: 0;
  }

  .presentation-page .section-free-demo .github-background-container {
    position: initial;
    left: 0;
    top: 0;
    max-width: 400px;
    margin: 0 auto;
    text-align: center;
  }

  .presentation-page .section-free-demo .github-background-container i {
    font-size: 400px;
  }

  .presentation-page .section-components .col-md-3 {
    padding-left: 15px;
  }

  .presentation-page .h3-description,
  .presentation-page .index-page .h3-description {
    top: 53%;
  }
}

@media (max-width: 1200px) and (min-width: 991px) {
  .presentation-page .section-basic-components .image-container {
    height: 326px;
    margin-top: 30px;
  }

  .presentation-page .section-basic-components .image-container .social-img {
    height: 48px;
  }

  .presentation-page .rellax-text-container,
  .index-page .rellax-text-container {
    max-width: 900px;
    top: 27%;
  }

  .index-page .rellax-text-container {
    top: 23%;
  }

  .presentation-page .rellax-text-container .pro {
    font-size: 18px;
    top: 29px;
    right: -29px;
  }

  .presentation-page .rellax-text-container .h1-seo {
    font-size: 14em;
  }

  .index-page .rellax-text-container .h1-seo {
    font-size: 7em;
  }
}

.burger-menu .section-navbars .navbar-collapse {
  display: none !important;
}

.section-basic {
  padding-top: 0;
}

.section-images {
  padding-bottom: 0;
  z-index: 2;
}

@-webkit-keyframes Floatingy {
  from {
    -webkit-transform: translate(0, 0px);
  }

  65% {
    -webkit-transform: translate(50px, 0);
  }

  to {
    -webkit-transform: translate(0, 0px);
  }
}

@-webkit-keyframes Floatingx {
  from {
    -webkit-transform: translate(50px, 0px);
  }

  65% {
    -webkit-transform: translate(0, 0);
  }

  to {
    -webkit-transform: translate(50px, 0px);
  }
}

.table-img,
.coloured-card-img,
.coloured-card-btn-img,
.linkedin-btn-img,
.share-btn-img,
.social-img {
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: ease-in-out;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: ease-in-out;
  -webkit-animation-name: Floatingy;
  -moz-animation-name: Floatingy;
  float: left;
}

.table-img {
  -webkit-animation-duration: 14s;
  -moz-animation-duration: 14s;
  -webkit-animation-name: Floatingx;
  -moz-animation-name: Floatingx;
}

.coloured-card-img {
  -webkit-animation-duration: 10s;
  -moz-animation-duration: 10s;
}

.coloured-card-btn-img {
  -webkit-animation-duration: 18s;
  -moz-animation-duration: 18s;
}

.linkedin-btn-img {
  -webkit-animation-duration: 15s;
  -moz-animation-duration: 15s;
  -webkit-animation-name: Floatingx;
  -moz-animation-name: Floatingx;
}

.share-btn-img {
  -webkit-animation-duration: 11s;
  -moz-animation-duration: 11s;
}

.social-img {
  -webkit-animation-duration: 16s;
  -moz-animation-duration: 16s;
  -webkit-animation-name: Floatingx;
  -moz-animation-name: Floatingx;
}

.bd-example .btn {
  margin: 5px 0;
}

.offline-doc .page-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

<<<<<<< HEAD
.air-card {
  position: relative;
  background-color: #fff;
  margin: 30px -30px;
  padding: 30px;
  -webkit-box-shadow: 0 1px 6px rgba(57, 73, 76, 0.35);
  box-shadow: 0 1px 6px rgba(57, 73, 76, 0.35);
}

.upwork-font {
  font-family: "Gotham SSm",Helvetica,Arial,sans-serif;
  font-size: 13px;
  line-height: 1.42857;
  color: #222;
}

.media:first-child {
  margin-top: 0;
}

.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
}

.off-canvas-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
  -webkit-transition: -webkit-transform .5s ease;
  transition: -webkit-transform .5s ease;
  transition: transform .5s ease;
  transition: transform .5s ease, -webkit-transform .5s ease;
}

.media > .pull-left {
  margin-right: 10px;
  float: none !important;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.pull-left {
  float: left !important;
}

.fe-ui-application img,
.fe-ui-window img {
  border: medium none;
  max-width: 100%;
  overflow: hidden;
  vertical-align: middle;
}

.cfe-avatar {
  width: 80px;
  height: 80px;
  margin: 20px;
  padding: 0;
}

.m-0 {
  margin: 0 !important;
}

.avatar-md,
.avatar-80 {
  width: 80px;
  height: 80px;
  margin: 20px;
  padding: 0;
}

.media .avatar {
  border-radius: 50%;
  -o-object-fit: cover;
  object-fit: cover;
  color: #E0E0E0;
  border: solid 1px #E0E0E0;
  width: 80px;
  height: 80px;
}

.media-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 0%;
  flex: 1 1 0%;
  min-width: 0;
}

.air-card h1:first-child,
.air-card h2:first-child,
.air-card h3:first-child,
.air-card h4:first-child,
.air-card h5:first-child,
.air-card h6:first-child,
.air-card section h1:first-child,
.air-card section h2:first-child,
.air-card section h3:first-child,
.air-card section h4:first-child,
.air-card section h5:first-child,
.air-card section h6:first-child,
up-c-card h1:first-child,
up-c-card h2:first-child,
up-c-card h3:first-child,
up-c-card h4:first-child,
up-c-card h5:first-child,
up-c-card h6:first-child,
up-c-card section h1:first-child,
up-c-card section h2:first-child,
up-c-card section h3:first-child,
up-c-card section h4:first-child,
up-c-card section h5:first-child,
up-c-card section h6:first-child {
  padding-top: 0;
}

.m-xs-bottom {
  margin-bottom: 5px !important;
}

fe-profile-map .fe-map-trigger {
  padding-bottom: 2px;
}

fe-profile-map .fe-map {
  visibility: hidden;
  opacity: 0;
  background: #fff;
  position: absolute;
  width: 500px;
  height: 200px;
  z-index: 1001;
  box-shadow: rgba(0, 0, 0, 0.5) 0 0 3px;
  -moz-box-shadow: rgba(0, 0, 0, 0.5) 0 0 3px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.5) 0 0 3px;
  transition: visibility 0s,opacity .15s ease-in-out;
  -moz-transition: visibility 0s,opacity .15s ease-in-out;
  -webkit-transition: visibility 0s,opacity .15s ease-in-out;
}

@media (min-width: 768px) {
  .d-md-block {
    display: block !important;
  }
}

.d-none {
  display: none !important;
}

.glyphicon {
  position: relative;
  top: 0;
  display: inline-block;
}

.glyphicon,
[class^="air-icon-"],
[class*=" air-icon-"] {
  font-family: 'Air icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  width: 14px;
  height: 14px;
  font-size: 14px;
  line-height: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: 10px;
  margin-right: 10px;
}

.fe-profile-header .w-700 {
  font-weight: 600;
}

.text-capitalize {
  text-transform: capitalize !important;
}

@media (min-width: 480px) {
  .d-sm-block {
    display: block !important;
  }
}

.air-card h3:first-child {
  padding-top: 0;
}

fe-profile-header cfe-job-success .progress-sm {
  margin-top: 0;
  margin-bottom: 3px;
}

.progress-sm {
  height: 4px;
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: #E0E0E0;
  overflow: visible;
  border-radius: 0;
}

.progress-sm .progress-bar {
  position: relative;
}

.progress-bar {
  background-color: #14BFF4;
  height: 4px;
  -webkit-box-shadow: none;
  box-shadow: none;
  color: #222;
  float: left;
  width: 0%;
  font-size: 10px;
  line-height: 18px;
}

.m-0-bottom {
  margin-bottom: 0 !important;
}

.upwork-sm {
  font-size: 12px;
  line-height: 20px;
}

=======
>>>>>>> 9ef9a3eb84ccac3804f33e7d166f743fd6730833

</style>
