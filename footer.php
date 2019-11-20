
<div class="container fixed-bottom shadow">
    <div class="row">
        <div class="col-sm-12 ">
            <div class="custom-file">
                <form method="POST" action="index.php" enctype="multipart/form-data">
                    <input type="file" onchange="this.form.submit()" class="custom-file-input" name="archivo[]" multiple="">
                    <label class="custom-file-label bg-dark text-light" for="customFile">Subir Archivo</label>
                </form>
            </div>
        </div>
    </div>
</div>
