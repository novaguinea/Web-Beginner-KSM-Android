<?php

require 'function.php';

if (isset($_POST['submit'])) {
    if (insert($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil dimasukkan');
            
            document.location.href = 'index.php';
        </script>
        
        ";
    } else {
        echo "
        
        <script>
            alert('data gagal dimasukkan');
            
            document.location.href = 'index.php';
        </script>
        
        ";
    }
}
