!function($){"use strict";var a={global:{init:function(){this.datePicker(),this.layout(),this.headerResize()},datePicker:function(){$("#booking-arrival").datepicker(),$("#booking-departure").datepicker()},layout:function(){function a(){var a=$(window).height()+"px";$("#carousel").css("height",a)}var o=function(){a()};a(),$(document).ready(o),$(window).resize(o)},headerResize:function(){function a(){var a=$(window).scrollTop(),o=200;a>o?($(".t-header-top").addClass("padt10 padb2"),$(".t-header-bottom").addClass("padt2"),$(".navbar").addClass("mb2"),$(".logo").addClass("small-logo ")):($(".t-header-top").removeClass("padt10 padb2"),$(".t-header-bottom").removeClass("padt2"),$(".navbar").removeClass("mb2"),$(".logo").removeClass("small-logo "))}$(window).on("scroll",a)}}};a.global.init()}($);