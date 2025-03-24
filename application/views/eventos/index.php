<!-- SECCION DONDE SE ENCUENTRAN LOS BANNER DENTRO DE UN SWITCH DEPENDIENDO DEL EVENTO -->
<section class="text-light no-top no-bottom position-relative z-1000">
    <div class="v-center">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" data-jarallax-element="150">
                    <?php switch ($tipo) {
                        case 'trail':
                            echo '<div class="swiper-inner d-none d-sm-block" data-bgimage=url(' . base_url('app-assets/images/banner-trail.jpg') . ')> </div>
                            <div class="swiper-inner d-block d-sm-none" data-bgimage=url(' . base_url('app-assets/images/banner-movil-trail.jpg') . ')> </div>';
                            break;

                        case 'malinche':
                            echo '<div class="swiper-inner d-none d-sm-block" data-bgimage=url(' . base_url('app-assets/images/banner-2.jpg') . ')></div>';
                            echo '<div class="swiper-inner d-block d-sm-none" data-bgimage=url(' . base_url('app-assets/images/banner-movil-2.jpg') . ')></div>';
                            break;

                        case 'octil':
                            echo '<div class="swiper-inner d-none d-sm-block" data-bgimage=url(' . base_url('app-assets/images/banner-1.jpg') . ')></div>';
                            echo '<div class="swiper-inner d-block d-sm-none" data-bgimage=url(' . base_url('app-assets/images/banner-movil-1.jpg') . ')></div>';
                            break;

                        default:
                            # code...
                            break;
                    } ?>
                </div>
            </div>
        </div>
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    </div>
</section>

<!-- SWITCH DONDE SE AGREGA SECCION DE SIGNIFICADO DEPENDIENDO EL EVENTO -->
<?php switch ($tipo) {
    case 'trail':
        echo '<section class="significado no-top no-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 pt-5">
                                            <h3 class="c-verde mt-5">¿Que es Trail Chignautla?</h3>
                                            <p class="c-verde mt-5">Trail Chignautla disfrutarás (O sufrirás) en los senderos, peñascos, manantiales, túneles y cumbres de la mejor manera, los recibiremos con los brazos abiertos.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 text-center mt-5">
                                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid" width="90%" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>';
        break;

    case 'malinche':
        echo '<section class="seccion-malinche no-top no-bottom"> 
                <div class="container my-5">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 pt-5 text-center">
                            <h2 class="c-esmeralda-negritas text-center wow zoomIn mt-5">Ascenso a <span style="font-weight: 400;">"La Malinche"</span></h2>
                            <p class="text-malinche">"No conquistamos la montaña, nos conquistamos a nosotros mismos" <br> -Edmund Hillary</p>
                            <p class="text-justtify text-malinche">
                                El pasado 2 de febrero de 2025, más de 70 personas participaron en el emocionante Ascenso a La Malinche, un reto que puso a prueba la resistencia y determinación de cada uno. <br>
                                El evento fue un rotundo éxito, logrando que los participantes llegaran a la cima de esta majestuosa montaña. Más allá de la conquista del terreno, el verdadero desafío fue personal.<br>
                                Agradecemos a todos los que se sumaron a esta increíble experiencia de esfuerzo, compañerismo y superación. <br> ¡Hasta la próxima aventura!
                            </p>
                        </div>
                    </div>
                </div>
                <br><br>
                <br><br>
                <br><br>
            </section>';

        break;

    default:
        # code...
        break;
} ?>


<!-- SWITCH DONDE SE AGREGA UN WIZARD DEPENDIENDO DEL EVENTO -->
<?php switch ($tipo) {
    case 'trail':
        echo '<section class="wizard no-bottom">
                <div class="container">
                    <div class="row text-center">
                                <h2 class="c-verde">Convocatoría</h2>
                                    <div class="col-lg-12 col-md-12">
                                        <div id="formWizard">
                                            <!-- Barra de Progreso -->
                                           <div class="col-12 d-none d-sm-block">
                                            <ul id="progressbar" class="text-center">
                                                <li class="active" id="step1"><strong>Carrera</strong></li>
                                                <li id="step2"><strong>Kit de Competidor</strong></li>
                                                <li id="step3"><strong>Premiación y Categorías</strong></li>
                                                <li id="step4"><strong>Costos y Distancias</strong></li>
                                                <li id="step5"><strong>Salidas por distancia</strong></li>
                                                <li id="step6"><strong>Inscripción</strong></li>
                                                <li id="step7"><strong>Responsiva</strong></li>
                                            </ul> 
                                           </div>
                                         
                                            <!-- Form Steps -->
                                            <div class="card mt-1">
                                                <div class="card-body">
                                                    <form id="wizardForm">
                                                        <div class="form-step form-step-active text-center">
                                                            <div class="row justify-content-center">
                                                                <h1>Trail Chignautla 9 Manantiales – 4ta Edición</h1>
                                                                <div class="col-lg-6 col-md-6 text-center text mt-3">
                                                                    <p><strong>Fecha:</strong> 25 de Mayo de 2025</p>
                                                                    <p><strong>Lugar:</strong> Chignautla, Puebla</p>
                                                                    <p><b>3 KM - 7 KM - 15 KM - 25 KM</b></p>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 text text-justtify mt-3">
                                                                    <p>¡Prepárate para desafiar tus límites en un recorrido espectacular entre cerros, túneles y los impresionantes 9 manantiales de Chignautla!</p>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-12 text-center">
                                                                <button type="button" class="btn-primary next">Siguiente</button>
                                                            </div> -->

                                                        </div>
                                                        <!-- A -->
                                                        <div class="form-step text-center">
                                                            <h3>KIT DE COMPETIDOR</h3>
                                                            <div class="row justify-content-center texto">
                                                                <div class="col-lg-4 col-md-4 mt-2">
                                                                    <ul class="text-justtify">
                                                                        <li>Bienvenida oficial en redes <br> (Del 13 de Enero al 30 de Abril)</li>
                                                                        <li>Fotografía en Ruta y Meta</li>
                                                                        <li>Video Oficial</li>
                                                                    </ul>

                                                                </div>
                                                                <div class="col-lg-4 col-md-4 mt-2">
                                                                    <ul class="text-justtify">
                                                                        <li>Playera conmemorativa</li>
                                                                        <li>Medalla conmemorativa (al cruzar la meta)</li>
                                                                        <li>Bolsa ecológica</li>
                                                                        <li>Dorsal de competidor</li>
                                                                        <li>Calcetas conmemorativas "CABE" <br>(Primeros 300 inscritos)</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 mt-2">
                                                                    <ul class="text-justtify">
                                                                        <li>Plan de Seguridad, con apoyo de protección civil en ruta y meta</li>
                                                                        <li>Fisioterapia Integral</li>
                                                                        <li>Hidratación en ruta y meta por</li>
                                                                        <div class="justify-items-center">
                                                                            <img src="' . base_url('app-assets/images/electrolic.png') . '" alt="Logo" class="img-fluid" width="100">
                                                                        </div>
                                                                    </ul>

                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-12 text-center">
                                                                <button type="button" class="btn-secondary prev">Anterior</button>
                                                                <button type="button" class="btn-primary next">Siguiente</button>
                                                            </div> -->

                                                        </div>
                                                        <!-- C -->
                                                        <div class="form-step text-center">
                                                            <h3>PREMIACIÓN</h3>
                                                            <h4>Categorias Varonil y Femenil</h4>
                                                            <div class="row texto">
                                                                <div class="col-lg-3 col-md-3 mt-2">
                                                                    <h3>25KM</h3>
                                                                    <h5>Absoluto</h5>
                                                                    <ul class="text-justtify offset-lg-2">
                                                                        <li>1° Lugar <b>$3000 MXN</b></li>
                                                                        <li>2° Lugar <b>$2000 MXN</b></li>
                                                                        <li>3° Lugar <b>$3000 MXN</b></li>
                                                                        <li>4° Lugar <b>$1000 MXN</b></li>
                                                                        <li>5° Lugar <b>ESPECIE</b></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 mt-2">
                                                                    <h3>15KM</h3>
                                                                    <h5>Libre y Veteranos</h5>
                                                                    <ul class="text-justtify offset-lg-2">
                                                                        <li>1° Lugar <b>$2000 MXN</b></li>
                                                                        <li>2° Lugar <b>$1500 MXN</b></li>
                                                                        <li>3° Lugar <b>$800 MXN</b></li>
                                                                        <li>4° Lugar <b>ESPECIE</b></li>
                                                                        <li>5° Lugar <b>ESPECIE</b></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 mt-2">
                                                                    <h3>7KM</h3>
                                                                    <h5>Libre y Local</h5>
                                                                    <ul class="text-justtify offset-lg-2">
                                                                        <li>1° Lugar <b>$1000 MXN</b></li>
                                                                        <li>2° Lugar <b>$800 MXN</b></li>
                                                                        <li>3° Lugar <b>$500 MXN</b></li>
                                                                        <li>4° Lugar <b>ESPECIE</b></li>
                                                                        <li>5° Lugar <b>ESPECIE</b></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 mt-2">
                                                                    <h3>3KM</h3>
                                                                    <h5>Familiar</h5>
                                                                    <ul class="text-justtify offset-lg-2">
                                                                        <li>1° Lugar <b>ESPECIE</b></li>
                                                                        <li>2° Lugar <b>ESPECIE</b></li>
                                                                        <li>3° Lugar <b>ESPECIE</b></li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                            <!-- <div class="col-12 text-center">
                                                                <button type="button" class="btn-secondary prev">Anterior</button>
                                                                <button type="button" class="btn-primary next">Siguiente</button>
                                                            </div> -->
                                                        </div>
                                                        <!-- D -->
                                                        <div class="form-step text-center">
                                                            <h3>COSTOS Y DISTANCIAS</h3>

                                                            <div class="row justify-content-center texto">
                                                                <div class="col-lg-4 col-md-4 mt-2 justify-content-center">
                                                                    <h5>PREVENTA</h5>
                                                                    <h5>Del 13 de Enero al 28 de Febrero</h5>
                                                                    <ul class="text-justtify offset-lg-2">
                                                                        <li>25KM <b>$450 MXN</b></li>
                                                                        <li>15KM <b>$400 MXN</b></b></li>
                                                                        <li>7KM <b>$350 MXN</b></li>
                                                                        <li>3KM <b>$350 MXN</b></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 mt-2">
                                                                    <h5>NORMAL</h5>
                                                                    <h5>Del 01 de Marzo hasta agotar existencias</h5>
                                                                    <ul class="text-justtify offset-lg-2">
                                                                        <li>25KM <b>$500 MXN</b></li>
                                                                        <li>15KM <b>$450 MXN</b></li>
                                                                        <li> 7KM <b>$400 MXN</b></li>
                                                                        <li> 3KM <b>$400 MXN</b></li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                            <!-- <div class="col-12 text-center">
                                                                <button type="button" class="btn-secondary prev">Anterior</button>
                                                                <button type="button" class="btn-primary next">Siguiente</button>
                                                            </div> -->
                                                        </div>
                                                        <!-- E -->
                                                        <div class="form-step text-center">
                                                            <div class="row justify-content-center">
                                                                <h3>SALIDAS POR DISTANCIA</h3>
                                                                <h4>Parque Municipal de Chignautla, Puebla</h4>
                                                                <div class="col-lg-8 col-md-8">
                                                                    <table class="table table-striped texto-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">SALIDAS</th>
                                                                                <th scope="col">DISTANCIA</th>
                                                                                <th scope="col">LÍMITE DE TIEMPO</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="texto-table">
                                                                                <th scope="row">1</th>
                                                                                <td>7:30 HRS</td>
                                                                                <td>25 KM</td>
                                                                                <td>Seis horas y media</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">2</th>
                                                                                <td>8:00 HRS</td>
                                                                                <td>15 KM</td>
                                                                                <td>Tres horas</td>
                                                                            </tr>
                                                                            <tr class="texto-table">
                                                                                <th scope="row">3</th>
                                                                                <td>8:30 HRS</td>
                                                                                <td>7 KM</td>
                                                                                <td>Hora y media</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td>8:30 HRS</td>
                                                                                <td>3 KM</td>
                                                                                <td>Media hora</td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                            <!-- <div class="col-12 text-center">
                                                                <button type="button" class="btn-secondary prev">Anterior</button>
                                                                <button type="button" class="btn-primary next">Siguiente</button>
                                                            </div> -->
                                                        </div>
                                                        <!-- F -->
                                                        <div class="form-step text-center">
                                                            <div class="row justify-content-center">
                                                                <h3>MÉTODO DE INSCRIPCIÓN</h3>
                                                                <div class="col-lg-5 col-md-5 mt-2 me-3 text-center card-digital pt-5">
                                                                    <h5>1. Método Digital</h5>
                                                                    <h5>Deposito bancario en cajero, ventanilla o transferencia </h5>
                                                                    <br>
                                                                    <div class="col-12 text text-center">
                                                                        <p>BBVA BANCOMER <b>4152313869619796</b></p>
                                                                        <p>Enviar comprobante de pago para generar tu folio al número <a title="Whatsapp" href="https://wa.link/dhdmx4" target="_blank"> <b>2313292395</b> </a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 col-md-5 texto-convocatoria mt-2 ms-3 pt-5 text text-center card-digital">
                                                                    <h5>2. Método Físico</h5>
                                                                    <img src="' . base_url('app-assets/images/logos-patrocinio/planet-gool.png') . '" alt="Logo" class="img-fluid" width="39">
                                                                    <p>Colonia Centro, Chignautla, Puebla</p>
                                                                    <img src="' . base_url('app-assets/images/pirma.png') . '" alt="Logo" class="img-fluid" width="39">
                                                                    <p>En tiendas Pirma</p>
                                                                    <p>Reforma Centro, Puebla.</p>
                                                                    <p>Altamirano #5, Col. Centro Xalapa Veracruz. <br> Calle Constitución #1, Col. Centro Coatepec, Veracruz.</p>
                                                                </div>

                                                            </div>
                                                            <!-- <div class="col-12 text-center">
                                                                <button type="button" class="btn-secondary prev">Anterior</button>
                                                            </div> -->
                                                        </div>
                                                        <!-- Responsiva -->
                                                        <div class="form-step text-center">
                                                            <div class="row justify-content-center">
                                                                <h3 style="margin-top:15%;">Descarga la responsiva de este evento</h3>
                                                                <div class="col-lg-12 col-md-12 mt-2">
                                                                    <div class="col-12">
                                                                        <a class="btn-main descargar-btn text-center" title="Descargar pdf" id="descargar-trail" href="' . base_url('app-assets/documentos/octil.pdf') . '" download>
                                                                            📄 Descargar Responsiva
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- <div class="col-12 text-center">
                                                                <button type="button" class="btn-secondary prev">Anterior</button>
                                                            </div> -->
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <button type="button" id="prev" class="btn-secondary prev">Anterior</button>
                                                            <button type="button" id="next" class="btn-primary next">Siguiente</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </section>';
        break;

    case 'malinche':
        echo '';
        break;

    default:
        # code...
        break;
} ?>

<!-- SECCION DE GALERIA PARA CADA EVENTO -->

<!-- SWITCH DONDE SE AGREGA UN WIZARD DEPENDIENDO DEL EVENTO -->
<?php switch ($tipo) {
    case 'trail':
        echo '
        <section id="galeria" class="seccion-galeria-02 p-b-50 ">
    <div class="container">
        <div class="row">

            <div class="col text-center">
                <h2 class="c-esmeralda-negritas mt-8">Galería<span style="font-weight: 400;"></span></h2>
            </div>

            <div class="container my-5 mt-2 gallery-container">
                <!-- Botones de los años -->
                <div class="d-flex justify-content-center">
                    <button class="year-tab active" data-year="2025">2025</button>
                    <button class="year-tab" data-year="2024">2024</button>
                </div>

                <!-- Galería de imágenes -->
                <div class="row gallery-content overflow-auto">
                    <!-- Imágenes para 2025 -->
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2025">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2025">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2025">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                    </div>

                    <!-- Imágenes para 2024 -->
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                        <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">               </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                 </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                 </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
            <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
            <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                 </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                 </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2024">
                <img src="' . base_url('app-assets/images/trail-1.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">                 </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para la imagen -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>
        
        ';
        break;

    case 'malinche':
        echo '<section id="galeria" class="seccion-galeria-02 p-b-50 ">
    <div class="container">
        <div class="row">

            <div class="col text-center">
                <h2 class="c-esmeralda-negritas mt-8">Galería<span style="font-weight: 400;"></span></h2>
            </div>

            <div class="container my-5 mt-2 gallery-container">

                <!-- Galería de imágenes -->
                <div class="row gallery-content overflow-auto">
                    <!-- Imágenes para 2025 -->
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2025">
                     <img src="' . base_url('app-assets/images/img-malinche/malinche2.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2025">
                         <img src="' . base_url('app-assets/images/img-malinche/malinche3.jpg') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 gallery-item my-3" data-year="2025">
                         <img src="' . base_url('app-assets/images/img-malinche/malinche1.png') . '" class="img-fluid rounded" alt="Imagen 2025-1" data-bs-toggle="modal" data-bs-target="#imageModal">
                    </div>

                   
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para la imagen -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
        ';
        break;

    default:
        # code...
        break;
} ?>


























<!-- SCRIPT PARA EL FUNCIONAMIENTO DE LA SECCION GALERIA -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.year-tab');
        const items = document.querySelectorAll('.gallery-item');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remover clase activa de todos los tabs
                tabs.forEach(t => t.classList.remove('active'));

                // Añadir clase activa al tab seleccionado
                tab.classList.add('active');

                // Filtrar imágenes
                const year = tab.getAttribute('data-year');
                items.forEach(item => {
                    if (item.getAttribute('data-year') === year) {
                        item.classList.remove('d-none');
                    } else {
                        item.classList.add('d-none');
                    }
                });
            });
        });

        // Activar el primer tab por defecto
        tabs[0].click();
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Seleccionar todas las imágenes con el atributo data-bs-toggle
        const galleryImages = document.querySelectorAll('[data-bs-toggle="modal"]');
        const modalImage = document.getElementById('modalImage');

        galleryImages.forEach(img => {
            img.addEventListener('click', function() {
                // Cambiar el src de la imagen del modal al de la imagen seleccionada
                modalImage.src = this.src;
            });
        });
    });
</script>

<!-- SCRIPT PARA EL FUNCIONAMIENTO DEL WIZARD -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nextButtons = document.querySelectorAll('.next');
        const prevButtons = document.querySelectorAll('.prev');
        const formSteps = document.querySelectorAll('.form-step');
        const progressbarItems = document.querySelectorAll('#progressbar li');
        let formStepIndex = 0;

        console.log('nextButtons', nextButtons);
        console.log('prevButtons', prevButtons);
        console.log('formSteps', formSteps);
        console.log('progressbarItems', progressbarItems);

        function updateFormSteps() {
            formSteps.forEach((formStep, index) => {
                if (index === formStepIndex) {
                    formStep.classList.add('form-step-active');
                } else {
                    formStep.classList.remove('form-step-active');
                }
            });
        }

        function updateProgressbar() {
            progressbarItems.forEach((item, index) => {
                if (index <= formStepIndex) {
                    item.classList.add('active');
                    console.log('index', index);
                    console.log('formStepIndex', formStepIndex);
                    if (formStepIndex == 6) {
                        console.log('Ultimo tab')
                        document.getElementById('next').style.visibility = "hidden";
                    } else {
                        document.getElementById('next').style.visibility = "visible";
                    }

                    if (formStepIndex == 0) {
                        console.log('Ultimo tab')
                        document.getElementById('prev').style.visibility = "hidden";
                    } else {
                        document.getElementById('prev').style.visibility = "visible";
                    }
                } else {
                    item.classList.remove('active');
                }
            });
        }

        nextButtons.forEach(button => {
            button.addEventListener('click', () => {
                formStepIndex++;
                updateFormSteps();
                updateProgressbar();
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener('click', () => {
                formStepIndex--;
                updateFormSteps();
                updateProgressbar();
            });
        });

        progressbarItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                formStepIndex = index;
                updateFormSteps();
                updateProgressbar();
            });
        });

        document.getElementById('wizardForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Formulario completado!');
        });
    });
</script>