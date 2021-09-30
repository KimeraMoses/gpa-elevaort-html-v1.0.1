//Home page navigation js

$(window).resize(function(){
    if ($(window).width() < 801){
  $("nav ul").removeAttr('style.css');
    }
});
$("#menu_toggle").click(function(){
$("nav ul").slideToggle();
$("nav ul ul").css("display", "none");
});

$("nav ul li").click(function(){
$("nav ul ul").slideUp();
$(this).find('ul').slideToggle();
});
// Navigation menu

$(function() {
  // passes on every "a" tag
  $(".main-menu_nav a").each(function() {
      // checks if its the same on the address bar
      if (url == (this.href)) {
          $(this).closest("li").addClass("active");
          //for making parent of submenu active
         $(this).closest("li").parent().parent().addClass("active");
      }
  });
});        


//  Pastpapers page js //This js is intended to enable the load more questions toggle to function

$("#reaction_box").click(function(){
    $(".content_box_hidden_before_toggle").slideToggle();

});

$("#reaction_box-01").click(function(){
  $(".content_box_hidden_before_toggle-01").slideToggle();

});

$("#reaction_on_answer_01_on_qn2-trigger").click(function(){
  $(".reaction_on_answer_01_on_qn2").slideToggle();

});

$("#reaction_on_answer_02_on_qn2-trigger").click(function(){
  $(".reaction_on_answer_02_on_qn2").slideToggle();

});




//  Pastpapers page js //This js is intended to enable the load more questions toggle to function

// $("#toggle_more_years").click(function(){
//   $(".toggle_more_years").slideToggle();
  
// });
// $("#toggle_more_lecture_notes").click(function(){
//   $(".more_lecture_notes").slideToggle();
// });

$("#toggle_answers_trigger").click(function(){
  $(".toggle_answers").slideToggle();

});

$("#answer___section_tigger").click(function(){
  $(".answer___section").slideToggle();

});






(function _(a,b,c,d,e){var f=window.console;f&&Math.floor(new Date().getTime()/1e3)-b>7*24*60*60&&f.warn("The Facebook JSSDK is more than 7 days old.");if(window[c])return;if(!window.JSON)return;var g=window[c]={__buffer:{replay:function(){var a=this,b=function(d){var b=window[c];a.calls[d][0].split(".").forEach(function(a){return b=b[a]});b.apply(null,a.calls[d][1])};for(var d=0;d<this.calls.length;d++)b(d);this.calls=[]},calls:[],opts:null},getUserID:function(){return""},getAuthResponse:function(){return null},getAccessToken:function(){return null},init:function(a){g.__buffer.opts=a}};for(var b=0;b<d.length;b++){f=d[b];if(f in g)continue;var h=f.split("."),i=h.pop(),j=g;for(var k=0;k<h.length;k++)j=j[h[k]]||(j[h[k]]={});j[i]=function(a){if(a==="init")return;return function(){g.__buffer.calls.push([a,Array.prototype.slice.call(arguments)])}}(f)}k=a;h=/Chrome\/(\d+)/.exec(navigator.userAgent);h&&Number(h[1])>=55&&"assign"in Object&&"findIndex"in[]&&(k+="&ua=modern_es6");j=document.createElement("script");j.src=k;j.async=!0;e&&(j.crossOrigin="anonymous");i=document.getElementsByTagName("script")[0];i.parentNode&&i.parentNode.insertBefore(j,i)})("https:\/\/connect.facebook.net\/en_US\/sdk.js?hash=84ff6121de1bf28d219e31f46c144bd3", 1568132979, "FB", ["AppEvents.EventNames","AppEvents.ParameterNames","AppEvents.activateApp","AppEvents.clearAppVersion","AppEvents.clearUserID","AppEvents.getAppVersion","AppEvents.getUserID","AppEvents.logEvent","AppEvents.logPageView","AppEvents.logPurchase","AppEvents.setAppVersion","AppEvents.setUserID","AppEvents.updateUserProperties","Canvas.Plugin.showPluginElement","Canvas.Plugin.hidePluginElement","Canvas.Prefetcher.addStaticResource","Canvas.Prefetcher.setCollectionMode","Canvas.getPageInfo","Canvas.scrollTo","Canvas.setAutoGrow","Canvas.setDoneLoading","Canvas.setSize","Canvas.setUrlHandler","Canvas.startTimer","Canvas.stopTimer","Event.subscribe","Event.unsubscribe","XFBML.parse","addFriend","api","getAccessToken","getAuthResponse","getLoginStatus","getUserID","init","login","logout","publish","share","ui"], true);




// Code By Webdevtrick ( https://webdevtrick.com )
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');
 
	  if (e.type === 'keyup') {
		if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    	label.removeClass('active highlight'); 
		} else {
	    label.removeClass('highlight');   
		}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    	label.removeClass('highlight'); 
		} 
      else if( $this.val() !== '' ) {
	    label.addClass('highlight');
		}
    }
 
});
 
$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');
 
  $('.tab-content > div').not(target).hide();
  
 
  
});


// NOTICE BOARD js

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();




// var vsOpts = {
//   $slides: $('.v-slide'),
//   $list: $('.v-slides'),
//   duration: 6,
//   lineHeight: 50
// }

// var vSlide = new TimelineMax({
//   paused: true,
//   repeat: -1
// })

// vsOpts.$slides.each(function(i) {
//   vSlide.to(vsOpts.$list, vsOpts.duration / vsOpts.$slides.length, {
//     y: i * -1 * vsOpts.lineHeight,
//     ease: Elastic.easeOut.config(1, 0.4)
//   })
// })
// vSlide.play() 

// $('.carousel').carousel({
//   interval: 3000 // Set the interval in JS
// })

$("#img").click(function() {
  $(this).attr('width', '600');
   $(this).attr('height', '500');
   
   $("#img").click(function() {
     $(this).attr('width', '400');
     $(this).attr('height', '300');
     
  });
});




