<?php 
    $relevateTexts = new RelevateTexts();
?>

<!-- Bootstrap two fields validate/match -->
<script type="text/javascript" src="../<?php echo $GLOBALS['public']; ?>/js/matchFieldsValidation.js"></script>



<script>
    function checkCondition(elem) {
        if (elem.value == 'Sí') {
            document.getElementById("other-div").style.display = 'block';
        } else {
            document.getElementById("other-div").style.display = 'none';
        }
    }
</script>


<p> </p>
<div class="container">    
    <?php 
        if(isset($inscriptionCreated) && $inscriptionCreated){ 
            include (VIEWS.'relevate/modalRelevate.php');     
        } 
    ?>  
                            
    <div class="alert alert-info" id="mensaje" name="mensaje"> 
        <h4> <?php echo $relevateTexts->getText1(); ?> </h4>       
    </div> 

    <div class="card">
        <div class="card bg-dark text-white">
            <img class="card-img" src="img/body/coverPage/educationOPDS.png" alt="Educación">
            <div class="card-img-overlay">
                <h1 class="card-title"> <?php echo $relevateTexts->getText2(); ?> </h1>
            </div>
        </div>

        <div class="card-header">
            <p class="card-text text-center"> 
                <h4> 
                <p>
                    A partir de esta información solicitada, se procederá a realizar un relevamiento en el lugar con personal 
                    de la Dirección Provincial de Controladores Ambientales con el objetivo final de diseñar un plan 
                    de trabajo en conjunto con las demás áreas de la administración provincial a fines de brindarle a 
                    los municipios una herramienta que permita brindarle una solución a una problemática histórica de 
                    la Provincia.
                </p>
                <p>
                A tal fin solicitamos por favor complete el siguiente formulario
                </p>
                </h4>
            </p>
        </div>
    </div>

    <br>
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Por cualquier duda sobre el formulario puede comunicarse mediante correo electrónico a: <strong> <p>ssfyea@opds.gba.gov.ar</p> </strong> También a los teléfonos: (0221) 429-5508 / 429-5753
    </div>   

    <div class="alert alert-secondary">
        <?php echo $relevateTexts->getText4(); ?>
    </div>

    <div class="container">   
        <form name="formRelevate" class="needs-validation" novalidate method="post" action=<?php INDEX ?> >   

            <input id="c" name="c" type="hidden" value="relevate">
            <input id="a" name="a" type="hidden" value="createRelevate"> 

            <div class="form-group row">                
                <div class="col-12 col-md-6"> 
               
                    <label for="municipio"> Municipio </label>
                    <input name="municipio" id="municipio" value="" type="text" maxlength="50" class="form-control text-capitalize" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]+[a-zA-ZáéíóúÁÉÍÓÚ ]" required> 
                                                                                                                                    <!-- pattern sin tildes  ="[a-zA-Z ]+[a-zA-Z ]" -->
                    <div class="valid-feedback"> </div>
                    <div class="invalid-feedback"> Incorrecto. Ingrese el municipio correctamente </div>
                </div> 

                <div class="col-12 col-md-6"> 
                    <label for="nombreApe"> Nombre y Apellido del responsable ambiental </label>
                    <input name="nombreApe" id="nombreApe" value="" type="text" class="form-control text-capitalize" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]+[a-zA-ZáéíóúÁÉÍÓÚ ]" required>  

                    <div class="valid-feedback"> </div>
                    <div class="invalid-feedback"> Incorrecto. Ingrese su nombre y/o apellido correctamente</div>   
                </div>
            </div>

            <br><hr> 

            <div class="form-group row">
                <div id="almacena" class="col-12 col-md-6">
                    <label for="fname"> ¿Posee algún tipo de predio en donde se almacenen vehículos? </label>
                    
                    
                    <select id="mySelect" name="almacena" class="form-control" onChange="checkCondition(this);">
                        <option>No</option>
                        <option>Sí</option>
                    </select>

                </div>
            </div> 

            <div id="other-div" style="display:none;">
            <div class="form-group row">                
                <div id="titular" class="col-12 col-md-6">
                    <label for="fname"> Titular del terreno </label>
                    
                    <select id="titular" name="titular" class="form-control">
                        <option value=""> -Seleccione uno- </option>
                        <option value="Publico"> Público </option>
                        <option value="Privado"> Privado </option>                    
                    </select>

                </div> 

                <div class="col-12 col-md-6"> 
                    <label for="dimension"> Dimensi&oacute;n aproximada (En m2) </label>
                    <input name="dimension" id="dimension" value="" type="text" class="form-control text-capitalize" pattern="[0-9]{1,8}">  

                    <div class="valid-feedback"> </div>
                    <div class="invalid-feedback"> Incorrecto. Ingrese la Dimensi&oacute;n correctamente</div>   
                </div>
            </div>

            <div class="form-group row">                
                <div class="col-12 col-md-6"> 
               
                    <label for="cantVehiculos"> Cantidad de vehículos acumulados estimados </label>
                    <input name="cantVehiculos" id="cantVehiculos" value="" type="text" maxlength="10" class="form-control text-capitalize" pattern="[0-9]{1,9}"> 
                                                                                                                                   
                    <div class="valid-feedback"> </div>
                    <div class="invalid-feedback"> Incorrecto. Ingrese la cantidad correctamente </div>
                </div> 

                <div class="col-12 col-md-6"> 
               
                    <label for="direccion"> Direcci&oacute;n </label>
                    <input name="direccion" id="direccion" value="" type="text" maxlength="255" class="form-control text-capitalize" required> 
                                                                                                                                    
                    <div class="valid-feedback"> </div>
                    <div class="invalid-feedback"> Incorrecto. Ingrese la direcci&oacute;n correctamente </div>
                </div> 
            
            </div>

            <div class="form-group row">     
                <div class="col-12 col-md-6"> 
                    <label for="comentarios"> Comentarios adicionales </label>
                    <input name="comentarios" id="comentarios" value="" type="text" class="form-control" >  
                </div>
            </div>

            </div>

            <br><hr> 
            <!-- Captcha -->
            <?php include ("captcha.php"); ?> 

            <div class="form-group row"> 
	            <div class="col-12 col-md-8 offset-md-2" >
                    <button name="sendInscription" id="sendInscription" type="submit" class="btn btn-outline-primary btn-round btn-block btn-lg" onClick="return validateCaptcha();"> <?= $relevateTexts->getButtonRelevate(); ?> </button>
                </div>
            </div>
        </form>

    </div>                                              
</div> 