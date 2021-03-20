@include('components.head')
@include('components.icons.icons')
@include('components.navbar')
@include('components.departamentos')
@include('components.footer')

@yield('head')

<body>
@yield('navbar')

<main class="">
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