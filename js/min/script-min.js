$(function(){function e(){c=$(document).scrollTop(),requestAnimFrame(e)}function o(){Modernizr.objectfit||(console.log(Modernizr),$(".img-fit").each(function(){var e=$(this),o=e.find("img").prop("src");o&&e.css("backgroundImage","url("+o+")").addClass("compat-object-fit")}))}var c;window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),e(),o(),TweenMax.set($(".social-footer"),{className:"+=closed"}),$(".social-footer").hover(function(){$(this).hasClass("closed")&&TweenMax.set($(this),{className:"-=closed"})},function(){var e=$(document).scrollTop();c+$(window).height()!=$(document).height()&&TweenMax.set($(this),{className:"+=closed"})}),$(".btn-choice").click(function(){return $(this).closest(".choices").addClass("choice-"+($(this).closest("li").index()+1)+"-active"),!1}),$(".btn-close-choice").click(function(){return $(this).closest(".choices").removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),!1}),$(document).scroll(function(){c=$(document).scrollTop(),c+$(window).height()==$(document).height()?$(".social-footer").hasClass("closed")&&TweenMax.set($(".social-footer"),{className:"-=closed"}):$(".social-footer").hasClass("closed")||TweenMax.set($(".social-footer"),{className:"+=closed"})}),$(window).resize(function(){}),$(window).load(function(){})});