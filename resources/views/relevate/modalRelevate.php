<script>
    $(document).ready(function(){
        $("#myModal").modal();
    });
</script>

<!-- Auto execute Modal with condition -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Relevamiento ambiental - OPDS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <div class="card">
                <img src="img/body/coverPage/inscriptionOnline.jpg" class="card-img-top"/>
            </div>
            <br>

            <p> 
                Queda relevado el municipio <span class="font-weight-bold"> <?php echo($municipio); ?> </span>
            </p>
            <p> 
               <!-- Con una cantidad de  <span class="font-weight-bold"> <?php //echo($cantVehiculos); ?> </span> vehículos -->
            </p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
</div>
<!-- End Modal -->
