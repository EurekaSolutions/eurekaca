
<?php include('header.php'); ?>
<!-- 
    <style>
        body { margin: 0; }
        canvas { width: 100%; height: 100% }
    </style>

    <script src="js/three.min.js"></script>
    <script>
        // Our Javascript will go here.
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

        var renderer = new THREE.WebGLRenderer();
        renderer.setSize( window.innerWidth, window.innerHeight );
        document.body.appendChild( renderer.domElement );


        var geometry = new THREE.BoxGeometry( 1, 1, 1 );
        var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
        var cube = new THREE.Mesh( geometry, material );
        scene.add( cube );

        camera.position.z = 5;

        function render() {
          requestAnimationFrame( render );

         /* // Método 1
          cube.position = start_position;
          cube.quaternion = quaternion;
          cube.updateMatriz();

          // Método 2
          cube.matrix.setRotationFromQuaternion(quaternion);
          cube.matrix.setPosition(start_position);
          cube.matrixAutoUpdate = true;*/
          
          cube.rotation.x += 0.1;
          cube.rotation.y += 0.1;

          renderer.render( scene, camera );

        }
        render();
    </script>

   -->

    <div class="navbar-fixed">
      <nav class="black" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#!" class="brand-logo left"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
              <a href="portafolio.php">Trayectoria</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

     <?php //include('banner.php'); ?>  

<br>
    
<div class="container-birthday">
  <div class="balloon">
    <div><span>☺</span></div>
    <div><span>B</span></div>
    <div><span>D</span></div>
    <div><span>A</span></div>
    <div><span>Y</span></div>
    <div><span>!</span></div>
  </div>
  <h1>Estamos de cumpleaños / We are in our Birthday <br/>@Eureka Solutions</h1>
</div>

    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br>
        <h2 class="header center red-text">Nuestras habilidades</h2>
        <div class="row center">
          <div class="row logos">
            <div class="col s12 m12">
              <div class="card">
              <div class="row">
              <div class="card-content col s2"></div>
                <div class="card-content col s8">
                  <div class="img-wrap" style="padding-top: 50px;">
                    <img class="top-lg responsive-img no-flex" src="image/express-logo.png">
                    <h6>ExpressJS</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/angular-logo.png">
                    <h6>AngularJS</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/github-logo.png">
                    <h6>Github</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/html5-logo.png">
                    <h6>Html5</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/javascript-logo.png">
                    <h6>Javascript</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/jquery-logo.png">
                    <h6>Jquery</h6>
                  </div>
                  <!-- <div style="clear:both"></div> -->
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/nodejs_logo.png">
                    <h6>NodeJS</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/php-logo.png">
                    <h6>Php</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/postgresql-logo.png">
                    <h6>PostgresSQL</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/android-logo.png">
                    <h6>Android</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/aws-logo.png">
                    <h6>AmazonWS</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/mysql-logo.jpg">
                    <h6>Mysql</h6>
                  </div>
                  <!-- <div style="clear:both"></div> -->
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/opengl-logo.jpg">
                    <h6>OpenGL</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/webgl-logo.jpg">
                    <h6>WebGL</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/sql-logo.jpg">
                    <h6>SQL</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/shopify-logo.png">
                    <h6>Shopify</h6>
                  </div>
                  <div class="img-wrap">
                    <img class="top-lg responsive-img no-flex" src="image/java-logo.png">
                    <h6>Java</h6>
                  </div>
                  <!-- <div style="clear:both"></div> -->
                </div>
                <div class="card-content  col s2"></div>
              </div>
	              <div class="row">
	              	<div class="card-action">
	                  <a href="#!">y seguimos evolucionando...</a>
	                </div>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       

      <div class="container">
        <div class="row center">
          <h5 class="header col s12 blue-text">Si quieres contactarnos, por ahora tenemos estos medios</h5>
        </div>
        <br>
        <div class="section">
          <div class="row">
            <div class="col s12 m6">
              <div class="card" style="height:200px">
                <br>
                <br>
                <div class="card-image waves-effect waves-block waves-light">
                  <h4 style="text-align: center;">&nbsp;Marcos Ramírez&nbsp;</h4>
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">&nbsp;
                    <i class="material-icons right">more_vert</i>
                  </span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">
                    <i class="material-icons right">close</i>
                  </span>
                  <table class="centered">
                    <tbody>
                      <tr>
                        <td>
                          <img src="image/team-marcos.jpg" width="100" height="100" alt="" class="circle">
                        </td>
                        <td>
                          <i class=" material-icons">phone</i> <a href="tel:+584143453988">+58 414-3453988</a>
                          <br/>
                          <i class=" material-icons">email</i> <a href="mailto:mramirez@eureksolutions.com?Subject=" target="_top">mramirez@eureksolutions.com</a>
                          <br/>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card" style="height:200px">
                <br>
                <br>
                <div class="card-image waves-effect waves-block waves-light">
                  <h4 style="text-align: center;">Edgar Leal</h4>
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">
                    <i class="material-icons right">more_vert</i>
                  </span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">
                    <i class="material-icons right">close</i>
                  </span>
                  <table class="centered">
                    <tbody>
                      <tr>
                        <td>
                          <img src="image/team-edgar.jpg" width="100" height="100" alt="" class="circle">
                        </td>
                        <td>
                          <i class=" material-icons">phone</i> <a href="tel:+584143189549">+58 414-3189549</a>
                          <br/>
                          <i class=" material-icons">email</i> <a href="mailto:eleal@eureksolutions.com?Subject=" target="_top">eleal@eureksolutions.com</a>
                          <br/>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <h5 class="center-align header col s12 blue-text">O envianos un mensaje</h5>
        <div class="row" id="area_contacto">
          <form class="col s12" action="" id="contacto" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input id="nombre" type="text" length="10" class="validate" name="contacto[nombre]" required>
                <label for="nombre">Nombre</label>
              </div>
              <div class="input-field col s6">
                <input id="apellido" type="text" length="11" name="contacto[apellido]" required>
                <label for="apellido">Apellido</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="tlf" type="number" length="11" class="validate" name="contacto[tlf]" required>
                <label for="tlf">Telefono</label>
              </div>
              <div class="input-field col s6">
                <input id="email" type="email" class="validate" name="contacto[correo]" required>
                <label for="email" data-error="wrong" data-success="right" >Correo</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="mensaje" class="materialize-textarea" length="120" name="contacto[mensaje]" required></textarea>
                <label for="textarea1">Mensaje</label>
              </div>
            </div>
            <div class="right-align">
              <button class="btn waves-effect waves-light" type="submit" id="submit">
                <i class="material-icons">send</i>
              </button>
            </div>
          </form>
        </div>
        <h5 class="center-align header col s12 blue-text">Tambien puedes hacerlo por los correos:</h5>
        <br>
        <div class="row" style="text-align:center">
          <div class="col s4">
            <i class="medium material-icons">email</i>
            <br/><a href="mailto:eureka@eureksolutions.com?Subject=" target="_top">eureka@eureksolutions.com</a>
            </div>
          <div class="col s4">
            <i class="medium material-icons">email</i>
            <br/><a href="mailto:info@eureksolutions.com?Subject=" target="_top">info@eureksolutions.com</a></div>
          <div class="col s4">
            <i class="medium material-icons">email</i>
            <br/><a href="mailto:soporte@eureksolutions.com?Subject=" target="_top">soporte@eureksolutions.com</a></div>
        </div>
      </div>


      <!-- CALENDARIO GOOGLE -->
      <div class="container">
        <div class="row center">
          <div class="col s12">
            <br>
            <!-- <iframe src="https://www.google.com/calendar/embed?title=Horario%20de%20Atenci%C3%B3n&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=uvn97gm4dsegloaf3n5r6omuic%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FCaracas"
            style=" border-width:0 " width="400" height="300" frameborder="0" scrolling="no" align="center"></iframe> -->
            <!--<iframe src="https://www.google.com/calendar/embed?title=Eventos%20Eureka&amp;showTitle=0&amp;showPrint=0&amp;height=300&amp;wkst=1&amp;hl=es_419&amp;bgcolor=%23ff6666&amp;src=uvn97gm4dsegloaf3n5r6omuic%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FCaracas" style=" border-width:0 " width="400" height="300" frameborder="0" scrolling="no">-->
            <h3 class="header col s12 blue-text text-darken-1"> Eventos </h3>
            <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;height=300&amp;wkst=2&amp;hl=es&amp;bgcolor=%23ff6666&amp;src=hv3klldktob9t7rtupbt1jj8b0%40group.calendar.google.com&amp;ctz=America%2FCaracas"
            style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
            <br>
          </div>
        </div>
      </div>
      

      <?php include('footer.php'); ?>