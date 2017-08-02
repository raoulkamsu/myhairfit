

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
      $('.accordion')
  .accordion()
;
    
        function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
          
                $(id).css("content", "url(" + e.target.result + ")");  
                
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#img1").change(function(){
        readURL(this, '#file1');
    });
    $("#image2").change(function(){
        readURL(this, '#file2');
    });
        $("#image3").change(function(){
        readURL(this, '#file3');
    });
    $("#image4").change(function(){
        readURL(this, '#file4');
    });
        $("#image5").change(function(){
        readURL(this, '#file5');
    });
    $("#image6").change(function(){
        readURL(this, '#file6');
    });
        $("#image7").change(function(){
        readURL(this, '#file7');
    });
    $("#image8").change(function(){
        readURL(this, '#file8');
    });
    
    $('.rating')
  .rating('disable');
    
    $('#delete').click(function()
     {$('#confirmDelete').modal('show')});
    
     $('#update').click(function()
     {$('#postUpdate').modal('show')});
    
    $('.ui.dropdown').dropdown();
    
    
    $('.shape').shape('flip up');
    
       $('#modifierDistance').click(function()
     {$('#modifierDisactanceModal').modal('show')});
    
    
    $('.ui.sticky')
  .sticky({
    context: '#mainBody'
  })
;
       $('#pickdate').click(function(e) {
	  
	  $('#pickdate').calendar({
	
  monthFirst: false,
  formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return day + '/' + month + '/' + year;
    }
  }
});}); 
    
    //price range
    $('#amountMin').bind('input', function()
                    {    
        sethref();
    });
    
     $('#amountMax').bind('input', function()
                    {    
        sethref();
    });
    
      $('#what').bind('input', function()
       
        {  
          var keyWord = $('#what').val();
        window.location.replace('/posts?like='+keyWord);
    });
   
      
    function sethref()
    {
        var curentHref = window.location.href;
        
        if(curentHref.indexOf("?") >= 0)
        {
           $('#priceBetween').attr('href', curentHref+'&between='+$('#amountMin').val()+'&and='+$('#amountMax').val());
        }
        else
        {
            $('#priceBetween').attr('href',curentHref+'?between='+$('#amountMin').val()+'&and='+$('#amountMax').val());
        }
    }
    
    });

