<?php

include_once './build/index.html';

if(isset($_GET['status'])){
    if($_GET['status'] == 'success'){
        echo(
            "<script>
              var x = document.getElementById('snackbar');
              x.className = 'show';
              setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
              
            </script>"
        );
       

      
    }else{
        echo(
            "<script>
                var x = document.getElementById('snackbarError');
                x.className = 'show';
                setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
                var onlyUrl = window.location.href.replace(window.location.search,'');
                
            </script>"
        );
    }
}


?>