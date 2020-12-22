require('./bootstrap');

//Dropzone
window.Dropzone = require('dropzone');
Dropzone.autoDiscover = false;

require('./announcementImages');

$( document ).ready(function(){
    $('.carousel').carousel({
      interval: 7500
    })
});

