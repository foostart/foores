// khai bao 
$(document).ready(function(){
    
   
   setTimeout(function(){
       
       $('.m-splash-screen-progress').addClass('active100');
   }, 2000);
   setTimeout(function(){
       $('.m-splash-screen').addClass('loaded');
       
   }, 1000);
   
   setTimeout(function(){
       $('.m-splash-screen').removeClass('loaded');
       
   }, 3500);
   
   
});