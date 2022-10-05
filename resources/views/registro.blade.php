<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jalisco - Registro de Vacunación Covid-19</title>
    <!--<link rel="stylesheet" href="http://127.0.0.1:5173/resources/sass/app.scss">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/utilities.css">
</head>
<body>
    <main class="container-fluid " >
        <!-- top-->
        <div class="row  align-items-center" >
            <div class="col-9 col-xl">
                <img class="px-5 " src="/icons/logo_jaliscosedefiende.png" alt="">
                <img class="px-5 mx-3 border-2 border-start" src="/icons/logo_jal.png" alt="">
            </div>
            <div class="col">

                <a class="pB mx-4" href="">Calculadora</a>
                <img src="/icons/ico_avisoprivacidad.png" >
                <a class="pB" href="">Aviso de privacidad</a>
                  
            </div>

        </div>
        <!-- mid-->
        <a class="tel position-fixed p-1 rounded-5" href=""> 
            <img src="/icons/ico_tel.png" alt="">
             
             <div class="d-none d-lg-inline"> 33 3823 3220</div>
        </a>
        <div class="row grado  justify-content-center">
            <div class="col-2 f1 d-none d-xl-inline">
                <img src="/icons/flecha.png" alt="">
            </div>
            <div class="col-2 puntos d-none d-xl-inline">
                <img src="/icons/puntos.png" alt="">
            </div>
            <div class=" col-8 bg-light   rounded-bottom  mb-3">
                <div class="row justify-content-center">
                    <h1  class=" col-10  text-center ">Campañas activas de vacunación contra Covid-19 (ZMG)</h1>
                </div>
                <div class="row justify-content-center   my-1">
                     <!-- fecha-->
                    <div class="col  text-end pt-5">
                            <img  src="/icons/ico_l.png" alt="">
                        
                    </div>
                    <!-- vacuna-->
                    <div class="col-8 col-lg-4 col-xl-3 shadow-sm p-1 mb-5 bg-white rounded ">
                        <img src="/icons/Group 5447.png" alt="">
                        <p>Personas de 18 o mas</p>
                        <p class="pB"><span>1</span> Primera Dosis</p>
                    </div>
                    <!-- vacuna2-->
                    <div class="col-4 col-xl-3 shadow-sm p-1  mb-5 ms-4 bg-white rounded  d-none d-lg-inline">
                        <img src="/icons/Group 5447.png" alt="">
                        <p>Personas de 18 o mas</p>
                        <p class="pB"><span>2</span> Segunda Dosis</p>
                        <h5>AZTRA ZENECA</h5>
                        <P class="pO">Pimera dosis aplicada antes del 15 de Agosto</P>
                    </div>
                    <!-- fecha-->
                    <div class=" col  pt-5">
                        <img src="/icons/ico_r.png" alt="">
                    </div>

                </div>
                
                <div class="row mx-lg-5 px-lg-5" >
                    <h2 class="col-10 pB pt-4 mx-xl-5 mx-3   border-2 border-top">Comenzar ahora</h2>
                    
                    <div class="row">
                        <samp class="col  mx-lg-5">
                            Ingresa tu CURP para agendar una cita  o para <a href="">cancelar una cita</a> ya registrada.
                        </samp>
                    </div>
                    <div class=" py-2 ">
                       
                        <form action="{{route('registrarCurp')}}" method="POST" class="row mx-lg-5">
                            @csrf
                            <div class=" col-12 col-xl-7 shadow-sm p-2 me-5  bg-white rounded">
                                <img src="/icons/ico_user.png" alt="">
                                <input name="curp" class=" cup border-0" type="text" maxlength="18" placeholder="Introduce tu CURP">
                            </div>
                            
                            <div class="col-12 col-xl-4">
                            
                                <button class=" p-2  mt-2 mt-xl-0  rounded-4 border-0 continuar">Continuar</button>
                            </div>
                            @error('curp')
                                <small>-{{$message}}</small>
                            @enderror
                        </form>
                    </div>
                    <div class=" mx-lg-5 mb-lg-5 mt-2">
                        <p class="pcurp">Si no conoces tu CURP <a href="">consulta aquí</a></p>
                    </div>
                </div>

            </div>
            <div class="col-2 f2 d-none d-xl-inline">
                <img src="/icons/flecha.png" alt="">
            </div>
        </div>
        <!-- bot-->
        <div class="row align-items-center justify-content-center text-center ">
            <div class="col-12 col-lg"><img src="/icons/Group 4009.png" alt=""></div>
            <div class="col-12 col-lg"><img src="/icons/Group 4023.png" alt=""></div>
            <div class="col-12 col-lg"><img src="/icons/Group 3997.png" alt=""></div>
            <div class="col-12 col-lg"><img src="/icons/Group 3999.png" alt=""></div>
            <div class="col-12 col-lg"><img src="/icons/Group 4000.png" alt=""></div>
            <div class="col-12 col-lg"><img src="/icons/Group 4112.png" alt=""></div>
            <div class="col-12 col-lg"><img src="/icons/Group 5363.png" alt=""></div>
        </div>

    </main>
</body>
</html>