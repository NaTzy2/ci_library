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
        <div class="card-header pt-3"><h4>Input Books Data</h4></div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert isbn" name="isbn">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert title" name="title">
                </div>

                <div class="mb-3">
                    <label for="synopsis" class="form-label">Synopsis</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert synopsis" name="synopsis">
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert author" name="author">
                </div>

                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert publisher" name="publisher">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert category" name="category">
                </div>

                <div class="mb-3">
                    <label for="language" class="form-label">Language</label>
                    <input type="text" class="form-control bg-dark" placeholder="insert language" name="language">
                </div>

                <button class="btn-submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</main>