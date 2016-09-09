<ul class="sidebar2" style="height: 750px;padding-left: 10px;">
    <li class="title" style="line-height: 28px;text-align: center;">Panel administrativo</li>
    <hr>
    <li class="stick bg-blue"><a href="admin.php"><span class="mif-home icon fg-blue" ></span> Inicio</a></li>
    <li class="stick bg-taupe"><a href="../Front/index.php" target="_blank"><span class="mif-earth icon fg-taupe" ></span> Pagina publica</a></li>
    <?php if($_SESSION['tipo']==1){ ?>
    <li class="stick bg-orange">
        <a class="dropdown-toggle" href="#"><span class="mif-users icon fg-orange"></span> Usuarios</a>
        <ul class="d-menu" data-role="dropdown">
            <li><a href="usuarioagregar.php"><span class="mif-users icon fg-black" ></span> Usuarios</a></li>
            <li><a href="usuariocontra.php"><span class="mif-user icon fg-black" ></span> Modificar mi contraseña</a></li>
            <li><a href="preguntasagregar.php"><span class="mif-question icon fg-black" ></span> Preguntas de seguridad</a></li>
        </ul>
    </li>
    <?php } ?>
    <?php if($_SESSION['tipo']==2){ ?>
    <li class="stick bg-orange">
        <a class="dropdown-toggle" href="#"><span class="mif-users icon fg-orange"></span> Usuario</a>
        <ul class="d-menu" data-role="dropdown">
            <li><a href="usuariocontra.php"><span class="mif-user icon fg-black" ></span> Modificar mi contraseña</a></li>
        </ul>
    </li>
    <?php } ?>
    <li class="stick bg-teal">
        <a class="dropdown-toggle" href="#"><span class="mif-barcode icon fg-teal"></span> Productos</a>
        <ul class="d-menu" data-role="dropdown">
            <li><a href="productosagregar.php"><span class="mif-barcode icon fg-black" ></span> Productos</a></li>
            <li><a href="productosmanto.php"><span class="mif-pencil icon fg-black" ></span> Mantenimiento</a></li>
        </ul>
    </li>
    <li class="stick bg-green">
        <a class="dropdown-toggle" href="#"><span class="mif-cog icon fg-green"></span> Servicios</a>
        <ul class="d-menu" data-role="dropdown">
            <li><a href="serviciosagregar.php"><span class="mif-cog icon fg-black" ></span> Servicios</a></li>
            <li><a href="serviciosmanto.php"><span class="mif-pencil icon fg-black" ></span> Mantenimiento</a></li>
            <li><a href="iconos.php" target="_blank"><span class="mif-image icon fg-black" ></span> Iconos</a></li>
        </ul>
    </li>
    <li class="stick bg-amber">
        <a class="dropdown-toggle" href="#"><span class="mif-dollars icon fg-amber"></span> Promociones</a>
        <ul class="d-menu" data-role="dropdown">
            <li><a href="promocionesagregar.php"><span class="mif-dollars icon fg-black" ></span> Promociones</a></li>
            <li><a href="promocionesmanto.php"><span class="mif-pencil icon fg-black" ></span> Mantenimiento</a></li>
        </ul>
    </li>
    <li class="stick bg-darkRed">
        <a class="dropdown-toggle" href="#"><span class="mif-images icon fg-darkRed"></span> Editor Slider</a>
        <ul class="d-menu" data-role="dropdown">
            <li><a href="slideragregar.php"><span class="mif-images icon fg-black" ></span> Agregar imagenes</a></li>
            <li><a href="slidermanto.php"><span class="mif-pencil icon fg-black" ></span> Mantenimiento</a></li>
        </ul>
    </li>
    <li class="stick bg-darkGray">
        <a style="padding:0;">
            <form action="../login/logout.php" method="post" style="border: none;margin: 0;padding: 0;">
                <button name="cerrar" style="font-size: 14px;text-align: left;border: none;margin: 0;padding: 0 0 0 15px;width: 100%;height: 44px;" class="fg-gray bg-white"><span class="mif-enter fg-black" style="font-size: 18px;"></span> &nbsp;Cerrar sesión</button>
            </form>
        </a>
    </li>
</ul>