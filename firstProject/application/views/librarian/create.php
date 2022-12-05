<?php
if(validation_errors() != FALSE){
    ?>
    <div class="alert alert-danger" role="alert">
        <?php print validation_errors()?>
    </div>
    <?php
}
?>

<link href="<?= base_url('/assets/css/insert.css')?>" rel="stylesheet">

<main class="container">
    <div class="card">
        <div class="card-header pt-3"><h4>Input Librarian Data</h4></div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert username" name="username">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert name" name="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control bg-dark" placeholder="example@domain.com" name="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control bg-dark" placeholder="insert password" name="password">
                </div>

                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input type="file" class="form-control bg-dark" name="avatar">
                </div>

                <button class="btn-submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</main>