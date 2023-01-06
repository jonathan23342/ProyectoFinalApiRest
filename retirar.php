<?php 
session_start();
header('Access-Control-Allow-Origin: *'); 

if($_SESSION['cuenta']){

}else{
    echo"<script type='text/javascript'>
    alert('No has iniciado sesion!');
    window.location.href='index.php';
    </script>";
}


$numero_cuenta=0;
if($_SESSION['cuenta']){
    $numero_cuenta = $_SESSION['cuenta'];
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
    </script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- iconos-->
    <link rel="stylesheet" type="text/css" href="icons/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>


<style>
    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }

    body{
  /* The image used */
  background-image: url(https://media.istockphoto.com/vectors/blue-abstract-geometric-dynamic-shape-paper-layers-subtle-background-vector-id1284691550?k=20&m=1284691550&s=612x612&w=0&h=M_gHdREUJ4UwnL4G5jrrO1jtat9pLDiv1ErqwxuQgLE=);
            /* Full height */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
</style>

<body class="bg-info">
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="d-flex justify-content-center align-items-center">
                <div class="rounded bg-light" style="width: 700px; height: 500px; margin-top: 50px;">
                    
                <div class="text-center rounded-top" style="background-color:#29C789">
                        <p class="text-center fw-bold mx-3 mb-10 h3 text-white" style="padding-top:10px; padding-bottom:10px;">Retirar</p>
                    </div>

                    <form action="realizarRetiro.php" method="GET">               
                        <div class="text-center text-lg-start mt-4 pt-2 aling">
                                <!-- Password input -->

                            <input type="text" name="cuenta" hidden value="<?php echo $numero_cuenta?>"/>

                            <center><br>
                            <div>
                            <label class="form-label h6" for="form3Example4">Ingresa la cantidad a retirar</label>
                                <input type="number" id="form3Example4" class="form-control form-control-lg" style="width: 300px; height: 20px;"
                                    placeholder="$" name="cantidad"/>                            
                            </div>
                            </center>
                            <br><br>
                            <center>              
                                <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; width: 200px;">Retirar</button>
                            </center>
                            <br>
                            <center>       
                                <a href="acciones.php"><button type="button" class="btn btn-danger btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; width: 200px;">
                                Cancelar                                
                            </button></a>                         
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
    </section>
</body>