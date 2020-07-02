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
        $_GET['status'] = '';
      
    }else{
        echo(
            "<script>
                var x = document.getElementById('snackbarError');
                x.className = 'show';
                setTimeout(function(){ x.className = x.className.replace('show', ''); }, 3000);
            </script>"
        );
    }
}


?>