jQuery(document).ready(function () {
  window.musician_band_artist_currentfocus=null;
    musician_band_artist_checkfocusdElement();
  var musician_band_artist_body = document.querySelector('body');
  musician_band_artist_body.addEventListener('keyup', musician_band_artist_check_tab_press);
  var musician_band_artist_gotoHome = false;
  var musician_band_artist_gotoClose = false;
  window.responsiveMenu=false;
  function musician_band_artist_checkfocusdElement(){
    if(window.musician_band_artist_currentfocus=document.activeElement.className){
      window.musician_band_artist_currentfocus=document.activeElement.className;
    }
  }
  function musician_band_artist_check_tab_press(e) {
    "use strict";
    e = e || event;
    var activeElement;

    if(window.innerWidth < 999){
    if (e.keyCode == 9) {
      if(window.musician_band_artist_responsiveMenu){
      if (!e.shiftKey) {
        if(musician_band_artist_gotoHome) {
          jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
        }
      }
      if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
        musician_band_artist_gotoHome = true;
      } else {
        musician_band_artist_gotoHome = false;
      }

    }else{

      if(window.musician_band_artist_currentfocus=="responsivetoggle"){
        jQuery( "" ).focus();
      }}}
    }
    if (e.shiftKey && e.keyCode == 9) {
    if(window.innerWidth < 999){
      if(window.musician_band_artist_currentfocus=="header-search"){
        jQuery(".responsivetoggle").focus();
      }else{
        if(window.musician_band_artist_responsiveMenu){
        if(musician_band_artist_gotoClose){
          jQuery("a.closebtn.mobile-menu").focus();
        }
        if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
          musician_band_artist_gotoClose = true;
        } else {
          musician_band_artist_gotoClose = false;
        }
      
      }else{

      if(window.musician_band_artist_responsiveMenu){
      }}}}
    }
    musician_band_artist_checkfocusdElement();
  }
});