$(document).ready(function(){
    //tabs
  $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
      });
    
      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active');
		
        });
    
		$('.menu .item')
          .tab()
        ;
    //message
        $('.message .close')
      .on('click', function() {
        $(this)
          .closest('.message')
          .transition('fade')
        ;
      })
    ;
    
    //card
    $('.special.cards .image').dimmer({
  on: 'hover'
});
    });