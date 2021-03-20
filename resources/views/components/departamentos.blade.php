@section('departamentos')
<style>
    .btn:hover{
      color: orange !important;
    }
    .btn-primary{
      border-color: gray;
      color:rgb(56, 49, 49);
      font-weight:600 ;
    }
    .jk > a {
      color: white;
      list-style-type: none;
      text-decoration: none;
    }
    .ozy > a {
      color: black;
      list-style-type: none;
      text-decoration: none;
    }
  </style>
<div class="col-md-12 py-5" style="background:#034359 ;">
    <div class="container">
        <h3 class="text-center py-3" style="color: white">Global market</h3>
        <p class="text-center" style="color: white">Mitula ya está en 49 países</p>
        <p class="text-center" style="color: white">(y seguimos creciendo...)</p>
        <!--Down-->
        <div class="d-flex align-items-center" style="height:40vh;">
            <div class="d-flex flex-column justify-content-around h-100 col-md-3 col-cm-12 jk">
                <a href="">Amazonas</a>
                <a href="">Ancash</a>
                <a href="">Apurimac</a>
                <a href="">Arequipa</a>
                <a href="">Ayacucho</a>
                <a href="">Cajamarca</a>
            </div>
            <div class="d-flex flex-column justify-content-around h-100 col-md-3 col-cm-12 jk">
                <a href="">Callao</a>
                <a href="">Cusco</a>
                <a href="">Huancavelica</a>
                <a href="">Huanuco</a>
                <a href="">Ica</a>
                <a href="">Junín</a>
            </div>
            <div class="d-flex flex-column justify-content-around h-100 col-md-3 col-cm-12 jk">
                <a href="">La Libertad</a>
                <a href="">Lambayeque</a>
                <a href="">Lima</a>
                <a href="">Loreto</a>
                <a href="">Madre de Dios</a>
                <a href="">Moquegua</a>
            </div>
            <div class="d-flex flex-column justify-content-around h-100 col-md-3 col-cm-12 jk">
                <a href="">Pasco</a>
                <a href="">Piura</a>
                <a href="">Puno</a>
                <a href="">San Martín</a>
                <a href="">Tacna</a>
                <a href="">Tumbes</a>
                <a href="">Ucayali</a>
            </div>    
        </div>
    </div>
</div>
@endsection