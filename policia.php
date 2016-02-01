<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Policía | El Vocero</title>
        <link href="img/favicon.png" rel="icon"/>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/> 

        <!-- CSS -->
        <link href="css/mis-estilos.css" rel="stylesheet"/>

        <!-- FontAwesome Icons -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lobster|Patua One' rel='stylesheet' type='text/css'/>
    </head>

    <body>

        <!-- HEADER -->
        <?php include 'encabezado.php' ?>
        <!-- /Header -->

        <!-- CONTENIDO -->
        <section class="container espacio">
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading" id="ppolicia">
                        <h1 class="panel-title"><b>POLICIA</b></h1>
                    </div> <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="imgsintesis" src="img/images (2).jpg" alt="">
                            </div> <!-- /.sm-4 -->
                            <div class="col-sm-7">

                                <a href=""><h4 class="titulosintesis">T I T U L O  N O T I C I A</h4></a>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fecha"> Febrero 01, 2016</p>
                                        <p class="sintesis">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        </p>

                                    </div>
                                </div>

                            </div> <!-- /.sm-8 -->
                        </div> <!-- /.row -->
                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="imgsintesis" src="img/images (2).jpg" alt="">
                            </div> <!-- /.sm-4 -->
                            <div class="col-sm-7">

                                <a href=""><h4 class="titulosintesis">T I T U L O  N O T I C I A</h4></a>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="fecha"> Febrero 01, 2016</p>
                                        <p class="sintesis">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                        </p>

                                    </div>
                                </div>

                            </div> <!-- /.sm-8 -->
                        </div> <!-- /.row -->
                        
                    </div> <!-- /.panel-body -->
                    
                </div> <!-- /.panel -->
            </div> <!-- /.lg-7 -->
            
            <?php include'publicidadnotas.php' ?>
            
        </section> <!-- /.Container -->
        <!-- /Contenido -->

        <br>
        
        <?php include 'paginacion.php' ?>
        
        <!-- FOOTER -->
        <?php include 'footer.php' ?>
        <!-- /Footer -->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
