<?php
if(validation_errors() != FALSE){
    ?>
    <div class="alert alert-danger" role="alert">
        <?php print validation_errors()?>
    </div>
    <?php
}
?>

<link href="<?= base_url('/assets/css/edit.css')?>" rel="stylesheet">

<main class="container">
    <div class="card">
        <div class="card-header"><h4>Edit Librarian Data</h4></div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control bg-dark" name="id" value="<?= $librarian->id?>">

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control bg-dark" name="username" value="<?= $librarian->username?>">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control bg-dark" name="name" value="<?= $librarian->name?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control bg-dark" name="email" value="<?= $librarian->email?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control bg-dark" name="password" value="<?= $librarian->password?>">
                </div>

                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input type="file" class="form-control bg-dark" name="avatar" value="<? $libarian->avatar?>">
                </div>

                <button class="btn-submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</main>