@extends('layouts.master')
@section('titulo','diseños')

@section('contenido')
<body style="background: #AED6F1">
<div id="cascada">
  <div class="row">
    <div class="col-md-12">

      <br>
      <center><label><h1>Seccion de Diseños </h1></label></center>
      <hr>


     
      <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
  
        
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <!-- <a class="portfolio-link" data-toggle="modal" href="index"> -->
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="imagenes/1.jpg" width="350" height="350" alt="">
          </a>
          <div class="portfolio-caption">
            <span class="glyphicon glyphicon-heart btn btn-danger"></span> <span class="glyphicon glyphicon-thumbs-up btn btn-primary"></span> 
            <span class="glyphicon glyphicon-share-alt btn btn-info"></span>

            <button class="btn btn-secondary">EditarImg</button>

            <h4><button class="btn btn-success" 
              data-toggle="modal" data-target="#comentFoto">comentar</button> <!-- <input type="text" ></h4> -->
            <p class="text-muted">Illustration</p>
          </div>

        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <!-- <a class="portfolio-link" data-toggle="modal" href="index"> -->
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="imagenes/1.jpg" width="350" height="350" alt="">
          </a>
          <div class="portfolio-caption">
             <span class="glyphicon glyphicon-heart btn btn-danger"></span> <span class="glyphicon glyphicon-thumbs-up btn btn-primary"></span>
             <span class="glyphicon glyphicon-share-alt btn btn-info"></span>
            <h4><button class="btn btn-success">comentar</button></h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
        <!--   <a class="portfolio-link" data-toggle="modal" href="index"> -->
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="imagenes/1.jpg" width="350" height="350" alt="">
          </a>
          <div class="portfolio-caption">
             <span class="glyphicon glyphicon-heart btn btn-danger"></span> <span class="glyphicon glyphicon-thumbs-up btn btn-primary"></span>
             <span class="glyphicon glyphicon-share-alt btn btn-info"></span>
            <h4><button class="btn btn-success">comentar</button></h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <!-- <a class="portfolio-link" data-toggle="modal" href="index"> -->
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="imagenes/1.jpg" width="350" height="350" alt=""> </a>
          <div class="portfolio-caption">
             <span class="glyphicon glyphicon-heart btn btn-danger"></span> <span class="glyphicon glyphicon-thumbs-up btn btn-primary"></span>
             <span class="glyphicon glyphicon-share-alt btn btn-info"></span>
            <h4><button class="btn btn-success">comentar</button></h4>
            <p class="text-muted">Branding</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
         <!--  <a class="portfolio-link" data-toggle="modal" href="index"> -->
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="imagenes/1.jpg" width="350" height="350" alt="">
          </a>
          <div class="portfolio-caption">
             <span class="glyphicon glyphicon-heart btn btn-danger"></span> <span class="glyphicon glyphicon-thumbs-up btn btn-primary"></span>
             <span class="glyphicon glyphicon-share-alt btn btn-info"></span>
          <h4><button class="btn btn-success">comentar</button></h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <!-- <a class="portfolio-link" data-toggle="modal" href="index"> -->
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="imagenes/1.jpg" width="350" height="350" alt="">
          </a>
          <div class="portfolio-caption">
             <span class="glyphicon glyphicon-heart btn btn-danger"></span> <span class="glyphicon glyphicon-thumbs-up btn btn-primary"></span>
             <span class="glyphicon glyphicon-share-alt btn btn-info"></span>
            <h4><button class="btn btn-success">comentar</button></h4>           
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- ventana modal de COMENTAR -->
<div class="modal fade" id="comentFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Comentar foto</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <input type="text" >
         <!--  <input type="text" name="nombre" class="form-control" v-model="nombre"><br>
          <label>Apellidos</label>
          <input type="text" name="appaterno" placeholder="Apellido peterno" v-model="appaterno" class="form-control">
          <br>
          <input type="text" name="apmaterno" placeholder="Apellido materno" class="form-control" v-model="apmaterno"><br>
          <br>
          <label>Correo</label>
          <input type="text" name="correo" placeholder="Correo" class="form-control" v-model="correo"><br>
          <label>Celular</label>
          <input type="number" name="celular" placeholder="Celular" class="form-control" v-model="celular"><br> -->


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="comentFoto">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- FIN DE LA VETANA MODAL -->
    

@endsection

@push('scripts')
  <script src="js/vue-resource.js"></script>
   <script src="js/bootstrap.min.js"></script>
  
@endpush