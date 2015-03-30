<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Directorio Comparaonline - Brasil</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="http://www.comparaonline.cl/assets/favicon-9ffeae5a10a5c86a081d5208da7c9566.ico">
<style>
    #botones{
        display: inline-block;
    }
   
</style>
<script>
    function ConfirmarBorrado()
    {
        if (confirm("¿Seguro que quieres eliminar este registro?"))
        {     
            return true;      
        }     
        else  
        {     
            return false;     
        }
    }
</script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>"><img src="http://blog.comparaonline.cl/wp-content/themes/blog-servicios/images/layout/comparaonline_logo.png" width="127" height="33" ></a>
            
            </div>
            <!-- /.navbar-header -->
<ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a><i class="fa fa-user fa-fw"></i> <?=$this->session->userdata('username')?></a>
                        </li>
                        <li class="divider"></li>
                        <li><?=anchor(base_url().'login/logout_ci', 'Desloguear')?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?=base_url().'master'?>"><i class="fa fa-edit fa-fw"></i> Todos</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_corp'?>"><i class="fa fa-edit fa-fw"></i> Corp</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_chile'?>"><i class="fa fa-edit fa-fw"></i> Chile</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_brasil'?>"><i class="fa fa-edit fa-fw"></i> Brasil</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'master_colombia'?>"><i class="fa fa-edit fa-fw"></i> Colombia</a>
                        </li>
                       
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Directorio Brasil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                
                                <th><center>Nombre</center></th>
                                <th><center>Apellido</center></th>
                                <th><center>Cargo</center></th>
                                <th><center>Pais</center></th>
                                <th><center>Correo</center></th>
                                <th><center>Skype</center></th>
                                <th><center>Anexo</center></th>
                                <th><center>Directo</center></th>
                                 <th><center>Opciones</center></th>
                            </tr>
                                    </thead>
                                    <tbody>
                        <?php foreach ($usuarios as $u):?>
 
                            <tr>
                                
                                <td><?=$u->nombre?></td>
                                <td><?=$u->apellido?></td>
                                <td><?=$u->cargo?></td>
                                <td><?=$u->pais?></td>
                                <td><?=$u->correo?></td>
                                <td><?=$u->skype?></td>
                                <td><?=$u->anexo?></td>
                                <td><?=$u->directo?></td>
                                <td>
                                    <div id="botones">
                                    <form action="editar_registro" method="post">
                                        <input type="hidden" name="username" value="<?=$u->id?>" />
                                        <button name="button" type="submit" id="button" value="true" class="btn btn-primary btn-circle" ><i class="fa fa-edit"></i></button>
                                    </form>
                                    </div>
                                    <div id="botones">
                                    <form action="eliminar_registro" name="eliminar"method="post">
                                        <input type="hidden" name="username" value="<?=$u->id?>" />
                                        <button name="button" onclick="return ConfirmarBorrado()" type="submit" id="button" value="true" class="btn btn-danger btn-circle" ><i class="fa fa-times"></i></button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
 
                        <?php endforeach;?>
                    </tbody>
                                </table>
                            </div>
                            <div class="row-fluid">
                        <hr>
                    </div> 
                            <div class="col-md-4 col-md-offset-10">
    <a href="crear_usuario" class="btn btn-outline btn-primary" role="button">Agregar Usuario
    </a>
  </div>
                            <!-- /.table-responsive -->
                            <div class="col-md-4 col-md-offset-10">
    
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
  <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

     <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>