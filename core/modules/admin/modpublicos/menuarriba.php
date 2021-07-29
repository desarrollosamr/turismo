    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <!-- activar cuando en el menu existan varias opciobes(laterales)
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Navegación de palanca</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
            <a class="navbar-brand" href="../home.php"> <?php echo $_SESSION["user"]; ?> </a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a></li>
                    <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a></li>
                    <li class="divider"></li>
                    <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
                </ul> <!-- /.dropdown-user -->
            </li> <!-- /.dropdown -->
        </ul>
    </nav>