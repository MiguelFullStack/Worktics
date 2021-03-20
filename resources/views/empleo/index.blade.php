@include('components.head')
@include('components.icons.icons')
@include('components.navbar')
@include('components.departamentos')
@include('components.footer')

@yield('head')
@yield('navbar')
<main>
    <div style="background: url('https://images.unsplash.com/photo-1572613328185-876121c0f763?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'); height:50vh; background-size:cover; background-position:center;">
     <div style="background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(89,16,34,1) 0%, rgba(0,212,255,0) 50%); height:100% ">
          <div class="text-white container py-5 ">
        <h2 style="font-size:45px !important; font-weight:700" >Buscador de ofertas de </h2>
        <h2 style="font-size:45px !important; font-weight:700">trabajo, ofertas de empleo</h2>
          </div>

          <div class="d-flex col-sm-12 justify-content-between container px-4 py-3 rounded shadow-lg" style="background: white">
            <div class=" col-5">
                <label for="exampleFormControlInput1" class="form-label">¿Qué buscas?</label>
                <input type="email" class="form-control" id="" placeholder="Por ejemplo: Taxista">
              </div>

              <div class=" col-5">
                <label for="exampleFormControlInput1" class="form-label">¿Dónde?</label>
                <input type="email" class="form-control" id="" placeholder="Lima">
              </div>

              <div class="col-1 d-flex justify-content-center align-items-end"><a href="" class="btn btn-dark">Buscar</a></div>

        </div>
          
    </div>



    </div>
    @yield('departamentos')
    <div class="container py-2 mt-4 shadow-lg" style="background: rgb(175, 173, 173); border-radius:10px">
        <h3>Búsquedas frecuentes</h3>
    </div>
    
        <div class="d-flex align-items-center container" style="height:40vh;">
            <div class="d-flex flex-column justify-content-around h-100 col-md-4 col-cm-12 ozy ">
                <a href="">ingenieria callao</a>
                <a href="">recursos humanos lambayeque</a>
                <a href="">ingenieria cusco</a>
                <a href="">atencion cliente tacna</a>
                <a href="">administracion tacna</a>
                <a href="">recursos humanos ica</a>
                <a href="">recursos humanos chiclayo</a>
            </div>
            <div class="d-flex flex-column justify-content-around h-100 col-md-4 col-cm-12 ozy ">
                <a href="">ventas magdalena mar</a>
                <a href="">call center callao</a>
                <a href="">comercial arequipa</a>
                <a href="">recursos humanos trujillo</a>
                <a href="">ventas ica</a>
                <a href="">construccion cajamarca</a>
                <a href="">recursos humanos chorrillos</a>
            </div>
            <div class="d-flex flex-column justify-content-around h-100 col-md-4 col-cm-12 ozy ">
                <a href="">ingenieria san borja quintas</a>
                <a href="">ventas chiclayo</a>
                <a href="">ventas trujillo</a>
                <a href="">recursos humanos callao</a>
                <a href="">administracion cusco</a>
                <a href="">ventas piura</a>
                <a href="">sales huancayo</a>
        
    </div>
</main>
@yield('footer')