<?php include("includes/header.php"); include("CRUD/db.php"); ?>

<div class="container">
    <div class="row border">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?=$_SESSION['type']?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); } ?>
        <div class="card col-4 p-3">
            <form action="CRUD/create.php" method="post">
                <input type="text" class="form-control" name="Titulo" placeholder="Titulo del Libro" required >
                <input type="text" class="form-control mt-3" name="Autor" placeholder="Nombre del Autor" required>
                <label for="fecha" class="form-label">Año de Publicacion</label>
                <input type="number" class="form-control" name="fecha" id="fecha" min="800" max="<?= $year + 5; ?>" value="<?=$year; ?>" required>
                <label for="desc" class="form-label">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="desc" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-primary mt-3"name="save" >Aceptar</button>
            </form>
        </div>
        <div class="col-8">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Año</th>
                <th scope="col">Accion</th>
                <!-- <th scope="col">Descripcion</th> -->
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                // $query = "SELECT * FROM library";
                // $result = mysqli_query($conn,$query);


                $result = showTable('library',$conn);

                while ($row = mysqli_fetch_array($result)) {?>
                    <tr>
                        <td><?php echo($row["id_lib"]) ?></td>
                        <td><?php echo($row["title"]) ?></td>
                        <td><?php echo($row["author"]) ?></td>
                        <td><?php echo($row["_year"]) ?></td>
                        <td> 
                            <button class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#myModal"><i class='fas fa-marker'></i></button>
                            <a href="CRUD/delete.php?id=<?php echo($row['id_lib'])?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php    
                }
                ?>
            </tbody>
            </table>

        </div>
    </div>
</div>
<?php include("CRUD/edit_modal.php") ?>








<?php include("includes/footer.php"); ?>