<link href="<?= base_url('/assets/css/index.css')?>" rel="stylesheet">

<main class="container">
    <div class="card">
        <div class="card-header pt-3"><h4>Books Data</h4></div>
        <div class="card-body">
        <table class="table table-bordered">
                <tr>
                    <th width='5%'>No.</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Synopsis</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Category</th>
                    <th>Language</th>
                    <th>Action</th>
                </tr>
    
                <?php
                    $no = 1;
                    foreach($book as $key=>$row){
                ?>

                <tr>
                    <td><?php print $no++.'.';?></td>
                    <td><?php print $row->isbn;?></td>
                    <td><?php print $row->title;?></td>
                    <td><?php print $row->synopsis;?></td>
                    <td><?php print $row->author;?></td>
                    <td><?php print $row->publisher;?></td>
                    <td><?php print $row->category;?></td>
                    <td><?php print $row->language;?></td>
                    <td class="action-holder">
                        <a href="<?= base_url('index.php/books/edit')."/$row->id"?>" class="btn-left">Edit</a>
                        <a href="<?= base_url('index.php/books/delete')."/$row->id"?>" class="btn-right">Delete</a>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>
        <div class="card-footer pt-3 pb-3 btn-holder">
            <a href="<?= base_url('index.php/books/create')?>" class="btn-insert">Add</a>
        </div>
    </div>
</main>