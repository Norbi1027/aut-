<body>
<?php
        require_once('menu.php');
        switch ($menuItem){
            case 'home':
                require_once('home.php');
                break;
            case 'keszito':
                require_once('keszito.php');
                break;
            default:
               echo 'Üdv!';     
            break;
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>