<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Editar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="crud/edit.php" method="post">
                <div class="modal-body">
                    <label class="form-label" for="">Titulo</label>
                    <input type="text" class="form-control">
                    <label class="form-label" for="">Autor</label>
                    <input type="text" class="form-control">
                    <label class="form-label" for="">Año</label>
                    <input type="number" class="form-control">
                    <label class="form-label" for="">descripción</label>
                    <textarea class='form-control' name="" id="" cols="30" rows="6"></textarea>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div> 
</div>