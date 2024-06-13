<?php 
    // $uri = "http://PWL4_202143500714";
    $uri =  parse_url((empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]",PHP_URL_PATH);
?>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Daftar Folder</div>
                <a class="nav-link" href="<?php echo $uri ."?page=biodata"?>">
                    Biodata
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Y6G"
                    aria-expanded="false" aria-controls="Y6G">
                    Y6G
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Y6G" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $uri . "?page=helloWorld" ?>">Hello World</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=variable" ?>">Variable</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=object" ?>">Object</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=konstanta" ?>">Konstanta</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=aritmatika" ?>">Operator Aritmatika</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=perbandingan" ?>">Operator Perbandingan</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=string" ?>">Operator String</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Y6G"
                    aria-expanded="false" aria-controls="Y6G">
                    Y6G
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Y6G" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $uri . "?page=kondisiIf" ?>">Kondisi If</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=kondisiIfElse" ?>">Kondisi ElseIf</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=switch" ?>">Kondisi Switch</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=whileLoop" ?>">While Loop</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=doWhile" ?>">Do While Loop</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=forLoop" ?>">For Loop</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=foreachLoop" ?>">Foreach Loop</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#PWL4_202143500714"
                    aria-expanded="false" aria-controls="PWL4_202143500714">
                    PWL4_202143500714
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="PWL4_202143500714 " aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo $uri . "?page=function" ?>">Function</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=functionParameter" ?>">Function Dengan Parameter</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=optionalArugment" ?>">Optional Argument</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=callByValue" ?>">Call By Value</a>
                        <a class="nav-link" href="<?php echo $uri . "?page=callByReference" ?>">Call By Reference</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Template By :</div>
            Start Bootstrap
        </div>
    </nav>
</div>