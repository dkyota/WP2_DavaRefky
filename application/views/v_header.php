<html>

<head>
    <meta charset="utf-8">
    <title>
        Web Prog II | Merancang Template Sederhana dengan Codeigniter
    </title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Rental Buku</h1>
                <h3>Membuat Template Sederhana dengan Codeigniter</h3>
            </hgroup>

            <nav>
                <ul>
                    <li><a href="<?php echo base_url(). 'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url(). 'index.php/web/about' ?>">About</a></li>
                    <li><a href="<?php echo base_url(). 'index.php/web/user' ?>">User</a></li>
                    <li><a href="<?php echo base_url(). 'index.php/web/login' ?>">Login</a></li>

                </ul>
            </nav>

            <div class="clear"></div>
        </header>
    </div>
</body>

</html>