<!doctype html>
<html lang="th">
<head>      
    <title>หน้าแรก</title>
    <?php require('inc_header.php'); ?> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="js/owl.carousel.min.js"></script>
</head>
<body >
    <?php require('inc_navbar_hotel.php'); ?> 
    <div class="bg-grey">
    <div class="container">
        <div class="box-hotel">
            <div class="text-filter text-grey text-start text-bold">WHAT DOES YOUR PLACE LOOK LIKE</div>
            <div class="mt-3">
                <div class="file-upload" style="min-width: 200px;">
                        <div>
                            <div class="drag-text image-upload-wrap">
                                <i class="far fa-image text-img text-light-grey"></i><br>
                                <label class="text-medium" for="upFile">BROWSE FILE HERE </label>
                            </div>
                            <input id="upFile" type="file" multiple hidden>
                        </div>
                        <div id="file-container">
                            <ul id="fileList" class="row">
                            </ul>
                        </div>
                      <input type="hidden" id="fileArray">
                    </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-sm-4 ">
                    <a href="list_property7.php"><div class="btn-grey mt-3">Back</div></a>
                </div>
                <div class="col-sm-4 ">
                    <a href="list_property9.php"><div class="btn-orange mt-3">Next</div></a>
                </div>
            </div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
   <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>

<script>
    (function hide(){
       $(this).hide();
  })(jQuery);

$(document).ready( function(){
  //Setto la data-value come oggetto vuoto {}
  $('#fileArray').val( JSON.stringify( {} ) );
  
$('#upFile').change(function(e) {
    var files = e.target.files;
    var obj = {};
		for (var i = 0; i <= files.length; i++) {
      
      var file = files[i];
      var reader = new FileReader();
      // when i == files.length reorder and break
      if(i==files.length){
        // need timeout to reorder beacuse prepend is not done
        if('0' != files.length){
          setTimeout(function(){ updateArray(obj); }, 100); 
        }
        break;
      }
      
      reader.onload = (function(file, i) {
        return function(event){
       obj[i] =  event.target.result ;
              $('#fileList').prepend('<div class="col-sm-4 col-6"><li data-id="'+file.lastModified+'"><div class="file-upload-image"><img class="w-100" src="' + event.target.result + '" onerror="hide()"  /><div class="removeBtn">X</div><div class="separator"><div class="ood">'+ file.name +' </div><div class="clear-both"></div></div> </div></li></div>');
        };
      })(file, i);
      
      reader.readAsDataURL(file);
    }// end for;
    
});
  
   
  $('#fileList').on('click','.removeBtn', function(){
    var src = $(this).parents('.block').children('img').attr('src');
    $(this).parents('li').remove();
    removeItem(src);
  });

  
  function removeItem( items ){
    var obj = $('#fileArray').val();
    obj = JSON.parse(obj);
    
    var y = [];
    if (typeof items != "object") {
      $.each(obj ,function (chiave,valore) {
              if (valore == items) {
                  delete obj[chiave];
                   // esce alla chiave 2
                  return false;
            }
     
      });
      
     
      $('#fileArray').val( JSON.stringify(obj) );
   
      return false;
      
      var arr = $('#fileArray').val();
      
      $.each( JSON.parse(arr), function(c,v){
      
      } );
     
  }
    
  
    $.each( obj, function(c,v){
  
      y.push(v);

    });
 
    $.each(items, function(c, v){
     
      if( $.inArray(v , y) != -1 ){
      
        return true;
      }
      y.push(v);
      
     
      
      });
  
    obj = $.extend({}, y);
  
    return obj;

  }
  
  function updateArray(items){
   
    var newArray = removeItem(items);
 
    $('#fileArray').val( JSON.stringify( newArray ) );
     
    var arr = $('#fileArray').val();
      
      $.each( JSON.parse(arr), function(c,v){
       
      } );

    
  }
  
  
});

</script>