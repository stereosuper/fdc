$(function(){function e(){!Modernizr.objectfit&&$(".img-fit").length&&$(".img-fit").each(function(){var e=$(this),a=e.find("img").prop("src");a&&e.css("backgroundImage","url("+a+")").addClass("compat-object-fit")})}function a(){c=$(document).scrollTop(),requestAnimFrame(a)}function n(){function e(){if(l.is(":checked")&&t.find(".active").length){if(void 0!==t.find(".active").attr("data-adjacent")){var e=t.find(".active").attr("data-adjacent").split(","),a=e.length,n=0;for(n;a>n;n++)t.find('[data-department="'+e[n]+'"]').attr("class","department adjacent")}}else if(!l.is(":checked")&&t.find(".adjacent").length){var s;t.find(".active").length&&(s=t.find(".active").attr("data-department")),o.attr("class","department"),s.length&&t.find('[data-department="'+s+'"]').attr("class","department active")}}var a=$("#mapForm"),n=a.find(".map-form"),t=$("#mapFormMetropole"),s=a.find(".map-form-extra"),o=a.find(".department"),i=$("#departement"),l=$("#departement-etendre"),c=a.find("a"),d=a.find(".map-btn"),r=a.find(".btn-metropole");o.on("click",function(a){o.attr("class","department"),$(this).attr("class","department active"),i.val($(this).attr("data-department")),e(l)}),i.on("change",function(n){o.attr("class","department"),a.find('[data-department="'+i.val()+'"]').length?a.find('[data-department="'+i.val()+'"]').attr("class","department active"):"92"!==i.val()&&"93"!==i.val()&&"94"!==i.val()||a.find('[data-department="75"]').attr("class","department active").siblings().attr("class","department"),e(l)}),l.on("change",function(a){e(l)}),c.on("click",function(e){e.preventDefault(),$(this).parents(".map-btn").length?(d.removeClass("active"),r.addClass("active"),TweenMax.to($($(this).attr("href")),.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(t,.2,{x:"-100%",opacity:0,zIndex:0})):(d.addClass("active"),r.removeClass("active"),TweenMax.to(t,.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(s,.2,{x:"100%",opacity:0,zIndex:0}))}),g=!0}function t(){if($(".nav-tabs").length){var e=$(".nav-tabs");e.hasClass("nav-tabs-indicator")||(768>h?e.height(0).find(".active").on("click",function(a){var n=0,t=0,s=e.find("li"),o=s.length;for(t;o>t;t++)s.eq(t).hasClass("active")||(n+=s.eq(t).outerHeight());e.height()>0?e.height(0):e.height(n),e.toggleClass("on")}):e.css("height","auto"))}}function s(){$(".news").length&&(TweenMax.set($(".news > li article"),{clearProps:"height"}),$(".news > li article").each(function(e){TweenMax.set($(this),{height:$(this).closest("li").height()+"px"})}))}function o(){$("#header nav").length&&$("#header nav").removeClass("no-transition"),$("#sidebar-account").length&&$("#sidebar-account").removeClass("no-transition"),$("#sidebar-tools").length&&$("#sidebar-tools").removeClass("no-transition"),$("#sidebar-links").length&&$("#sidebar-links").removeClass("no-transition"),$(".bg-sidebar").length&&$(".bg-sidebar").removeClass("no-transition")}function i(e){"undefined"!=typeof H&&H.setMap(null),H=new google.maps.Marker({map:G,position:e,draggable:!0,raiseOnDrag:!0}),H.addListener("dragend",function(e){var a=e.latLng.lat(),n=e.latLng.lng(),t=new google.maps.LatLng(a,n);E.val(a),N.val(n),l(t)})}function l(e){P.geocode({latLng:e},function(e,a){if(a!=google.maps.GeocoderStatus.OK)return void console.log("Geocoder failed due to: "+a);if(!e[0])return void console.log("No results found");var n=e[0];$("#geolocalisation").val(n.formatted_address)})}var c,d=600,r=$(window).height(),h=$(window).width(),g=!1,v,p=$("body");if(window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),jQuery.fn.toggleAttr=function(e){return this.each(function(){var a=$(this);a.attr(e)?a.removeAttr(e):a.attr(e,e)})},e(),s(),$(".social-footer").length&&$(".social-footer").addClass("closed").hover(function(){$(this).hasClass("closed")&&TweenMax.set($(this),{className:"-=closed"})},function(){var e=$(document).scrollTop();c+$(window).height()!=$(document).height()&&TweenMax.set($(this),{className:"+=closed"})}),$(".choices").length){var m=$(".choices"),f=m.find(".btn-choice"),u=m.find(".visuel"),b=m.find("li").length,C=0,w=4,k=5,x=200,T=200,M=new SteppedEase(w-1),y=[];for(C;b>C;C++){var L=0,D=u.eq(C);for(y[C]=new TimelineMax({paused:!0}),L;k>L;L++)y[C].add(TweenMax.fromTo(D,.15,{backgroundPosition:"0 -"+x*L+"px"},{backgroundPosition:"-"+T*(w-1)+"px -"+x*L+"px",ease:M}));TweenMax.set(D,{backgroundPosition:"0 0"})}f.on("mouseenter",function(){if(!(m.hasClass("choice-1-active")||m.hasClass("choice-2-active")||m.hasClass("choice-3-active")||m.hasClass("choice-4-active")||m.hasClass("choice-5-active"))){var e=$(this).parents("li").index();y[e].play()}}).on("mouseout",function(){var e=$(this).parents("li").index();y[e].reverse()})}if($(".choices").length&&f.click(function(e){if(h>767){if(e.preventDefault(),$(this).closest(".choices").hasClass("choice-"+($(this).closest("li").index()+1)+"-active")){var a=$(this).closest(".choices");a.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),setTimeout(function(){a.removeClass("choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating")},d)}else $(this).closest(".choices").addClass("choice-"+($(this).closest("li").index()+1)+"-active choice-"+($(this).closest("li").index()+1)+"-animating");if(1150>=h){var n=$(this).closest("li");$(".zone-content",n).slideToggle(300)}else{var t=$(this).parents("li").index();y[t].reverse()}}}),$(".btn-close-choice").click(function(e){e.preventDefault();var a=$(this).closest(".choices");if(a.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),setTimeout(function(){a.removeClass("choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating")},d),1150>=h){var n=$(this).closest("li");$(".zone-content",n).slideToggle(300)}}),$("#logo").on("click",function(e){e.preventDefault(),h>1280?p.toggleClass("sidebar-links-open"):p.hasClass("sidebar-links-open")||p.hasClass("nav-header-open")?p.hasClass("sidebar-links-open")?p.removeClass("sidebar-links-open").addClass("nav-header-open"):p.removeClass("nav-header-open").addClass("sidebar-links-open"):p.addClass("nav-header-open")}),$("#mask").on("click",function(e){e.preventDefault(),p.removeClass("nav-header-open sidebar-links-open sidebar-account-open sidebar-tools-open")}),$("#btn-close-sidebar-links").click(function(e){e.preventDefault(),h>1280?p.removeClass("sidebar-links-open"):p.removeClass("sidebar-links-open").addClass("nav-header-open")}),$("#btn-close-nav-header").click(function(e){e.preventDefault(),p.removeClass("nav-header-open")}),$("#btn-close-header-responsive").click(function(e){e.preventDefault(),p.hasClass("nav-header-open")?p.removeClass("nav-header-open"):p.hasClass("sidebar-links-open")?p.removeClass("sidebar-links-open").addClass("nav-header-open"):p.hasClass("sidebar-account-open")?p.removeClass("sidebar-account-open").addClass("nav-header-open"):p.hasClass("sidebar-tools-open")&&p.removeClass("sidebar-tools-open").addClass("nav-header-open")}),$("#btn-account").on("click",function(e){e.preventDefault(),p.toggleClass("sidebar-account-open"),1280>=h&&p.removeClass("nav-header-open")}),$("#btn-close-sidebar-account").click(function(e){e.preventDefault(),p.removeClass("sidebar-account-open"),1280>=h&&p.addClass("nav-header-open")}),$("#btn-tools").on("click",function(e){e.preventDefault(),p.toggleClass("sidebar-tools-open"),1280>=h&&p.removeClass("nav-header-open")}),$("#btn-close-sidebar-tools").click(function(e){e.preventDefault(),p.removeClass("sidebar-tools-open"),1280>=h&&p.addClass("nav-header-open")}),t(),$("#mapForm").length&&h>767&&(g||n()),$(".block-optionnal").length){var L=0,A=$(".block-optionnal"),F=A.length;for(L;F>L;L++){var q=A.eq(L),z=$("#"+q.attr("data-name"));z.on("change",function(e){$(this).prop("checked")?q.addClass("hidden"):q.removeClass("hidden")})}}$("#editForm").on("click",function(e){var a=$("#formToEdit"),n,t=$(this);e.preventDefault(),a.length&&(a.toggleClass("form-disabled").find("input").toggleAttr("disabled"),a.find("button[type=submit]").toggleClass("hidden"),a.hasClass("form-disabled")?t.html(t.attr("data-edit")):t.html(t.attr("data-cancel")),t.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),a.find(".not-filled").length&&a.find(".not-filled").toggleClass("hidden"),a.find(".block-pwd").length&&(n=a.find(".block-pwd"),n.toggleClass("hidden").find("input").toggleAttr("disabled"),n.find("button").toggleClass("hidden"),a.find(".block-pwd2").length&&a.find(".block-pwd2").toggleClass("hidden")),a.siblings(".content-footer").length&&a.siblings(".content-footer").toggleClass("hidden"))}),$("#editPwd").on("click",function(e){e.preventDefault();var a,n=$(this);n.parents(".block-pwd").length&&(a=$(this).parents(".block-pwd"),a.find("input").toggleAttr("disabled"),a.find("input").attr("disabled")?n.html(n.attr("data-edit")):n.html(n.attr("data-cancel")),n.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),a.find(".block-pwd2").length&&a.find(".block-pwd2").toggleClass("hidden"))}),isBlocked&&$(".wrapper-pub").addClass("hidden"),a(),$(document).scroll(function(){c=$(document).scrollTop(),$(window).width()>979?c+$(window).height()==$(document).height()?$(".social-footer").hasClass("closed")&&TweenMax.set($(".social-footer"),{className:"-=closed"}):$(".social-footer").hasClass("closed")||TweenMax.set($(".social-footer"),{className:"+=closed"}):TweenMax.set($(".social-footer"),{className:"-=closed"})});var I=new Hammer(document.getElementById("sidebar-links"));I.on("swipeleft",function(e){1280>=h&&(p.hasClass("sidebar-links-open")||p.hasClass("nav-header-open")?p.hasClass("sidebar-links-open")?p.removeClass("sidebar-links-open").addClass("nav-header-open"):p.removeClass("nav-header-open").addClass("sidebar-links-open"):p.addClass("nav-header-open"))});var j=new Hammer(document.getElementById("nav-header"));if(j.on("swiperight",function(e){1280>=h&&(p.hasClass("sidebar-links-open")||p.hasClass("nav-header-open")?p.hasClass("sidebar-links-open")?p.removeClass("sidebar-links-open").addClass("nav-header-open"):p.removeClass("nav-header-open").addClass("sidebar-links-open"):p.addClass("nav-header-open"))}),$(window).resize(function(){var e=$(window).height(),a=$(window).width();a!=h&&(p.removeClass("sidebar-links-open sidebar-account-open nav-header-open sidebar-tools-open"),$(".choices").length&&m.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active choice-1-animating choice-2-animating choice-4-animating choice-5-animating").find(".zone-content").attr("style",""),$("#header nav").length&&$("#header nav").addClass("no-transition"),$("#sidebar-account").length&&$("#sidebar-account").addClass("no-transition"),$("#sidebar-tools").length&&$("#sidebar-tools").addClass("no-transition"),$("#sidebar-links").length&&$("#sidebar-links").addClass("no-transition"),$(".bg-sidebar").length&&$(".bg-sidebar").addClass("no-transition"),clearTimeout(v),v=setTimeout(o,100)),r=e,h=a,t(),$("#mapForm").length&&h>767&&(g||n()),s()}),$(window).load(function(){s()}),"undefined"!=typeof google){var E=$("#latitude"),N=$("#longitude"),P=new google.maps.Geocoder,B=new google.maps.LatLng(47.2155851,-1.5619139),R={zoom:12,center:B},G=new google.maps.Map(document.getElementById("map-canvas"),R),H,O=document.getElementById("geolocalisation"),S=new google.maps.places.Autocomplete(O);S.bindTo("bounds",G),google.maps.event.addListener(S,"place_changed",function(){var e=S.getPlace();if(e.geometry){var a=e.geometry.location.lat(),n=e.geometry.location.lng(),t=new google.maps.LatLng(a,n);E.val(a),N.val(n),i(t),G.setCenter(t)}}),google.maps.event.addListener(G,"click",function(e){var a=e.latLng.lat(),n=e.latLng.lng(),t=new google.maps.LatLng(a,n);E.val(a),N.val(n),i(t),l(t)})}});