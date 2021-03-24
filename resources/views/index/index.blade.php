@include('components.head')
@include('components.icons.icons')
@include('components.navbar')
@include('components.departamentos')
@include('components.footer')

@yield('head')

<body>
@yield('navbar')

<main class="">
  <style>
    .form-index:focus{
      border-color:red !important;
      outline: none;
      color: gray;
    }
    a.form-index:hover{
      color: rgb(230, 230, 230) !important;
    }
  </style>
  <div style="height:80vh; background: url('https://images.unsplash.com/photo-1597404294360-feeeda04612e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size:cover; background-position:center;">
    <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center" style="background: #0000007e;">
      <div class="my-3 text-center">

        <h2 class="text-white">Lorem impsun</h2>
        <h3 class="text-white">Lorem impsun</h3>
      </div>
      <div class="p-3 d-flex align-items-center  justify-content-between rounded container" style="background:rgba(255, 255, 255, 0.2); width:57%; ">
        <div class="d-flex flex-row align-items-center justify-content-between bg-white rounded">
          <div class="d-flex" style=" border-right: 2px solid rgb(235, 235, 235) !important;">
            <p class="py-2 px-3" style="margin:0px !important; font-weight:600;">¿Qué buscas?</p>
            <input placeholder="prueba" style="border:0px;" type="text" class="form-index">
          </div>
          <div class="d-flex">
            <p class="py-2 px-3" style="margin:0px !important; font-weight:600;">Localidad</p>
            <input placeholder="prueba" style="border:0px;" type="text" class="rounded form-index">
          </div>
        </div>
        
        <a style="list-style: none; text-decoration:none; color:white;" class="btn btn-primary form-index m-0 py-2 px-2" href="#">Buscar</a>
        
      </div>
      <p class="mt-3"style="width:55%; color:white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo impedit, amet eos ratione mollitia accusamus, iste natus nobis nihil obcaecati quis assumenda eum dolorum? Aut laborum ea sunt sit voluptatibus?</p>
      
    </div>
  </div>
  <!--left -->
  <div class="d-flex d-flex flex-sm-column flex-md-row">
    <div class="container-fluid col-sm-12 col-md-4 text-center px-5 text-white py-5" style="padding:100px 0px !important; background:#591022;">
        @yield('icons_home')
        <h2 class="py-4">
            Casas
        </h2>
        <h2 style="font-size:22px">
            251,345 anuncios
        </h2>

        <a href="" class="btn btn-primary px-5" style="background:white ;">Buscar</a>

        <div class="d-flex flex-column py-2 jk">
          <a href="">Casas Pucallpa</a>
          <a href="">Casas Cajamarca</a>
          <a href="">Casas Comas Quintas</a>
          <a href="">Casas Santa</a>
          <a href="">Alquiler Casas Magdalena Mar</a>
        </div>
        </div>
  <!--Medium-->
        <div class="container-fluid col-sm-12 col-md-4 text-center px-5 text-white py-5" style="padding:100px 0px !important; background:#1E83A6 ;">
            @yield('icons_car')
        <h2 class="py-4">
            Autos
        </h2>
        <h3 style="font-size:22px">
          42.311 anuncios
        </h3>

          <a href="" class="btn btn-primary px-5" style="background:white ;">Buscar</a>

          <div class="d-flex flex-column py-2 jk">
          <a href="">Daewoo Nubira</a>
        <a href="">Honda Accord</a>
          <a href="">Nissan Ichi Van</a>
          <a href="">Mazda 2</a>
          <a href="">Mitsubishi Eclipse</a>
          </div>  
          </div>
  <!--Right -->
        <div class="container-fluid col-sm-12 col-md-4 text-center px-5 text-white py-5" style="padding:100px 0px !important; background:#034359 ;">
            @yield('icons_shopping')
            <h2 class="py-4">
                Empleo
            </h2>
          <h2 style="font-size:22px">
          300,145 anuncios
          </h2>

          <a href="" class="btn btn-primary px-5" style="background:white ;">Buscar</a>

          <div class="d-flex flex-column py-2 jk">
          <a href="">Administracion Lambayeque</a>
          <a href="">Recursos Humanos Lima</a>
          <a href="">Ventas Cusco</a>
          <a href="">Analista Tacna</a>
          <a href="">Atencion Cliente Lima</a>    
          </div>
</div>
</div>
<div class="text-center" style="padding:40px 0px !important;">

    <h3>Somos tu buscador de anuncios clasificados. Y encontraremos lo que buscas. ¿Vamos?</h3>

</div>

@yield('departamentos')
</main>

</body>
@yield('footer')