$(document).ready(function(){
   $('.m-splash-screen').addClass('loaded');
   setTimeout(function(){
       $('.m-splash-screen').css('display','none');
   }, 1500);
});