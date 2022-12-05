<link href="<?= base_url('/assets/css/index.css')?>" rel="stylesheet">

<main class="container">
    <div class="card">
        <div class="card-header pt-3"><h4>Librarian Data</h4></div>
        <div class="card-body">
        <table class="table table-bordered" style="white-space: nowrap;">
                <tr>
                    <th width='5%'>No.</th>
                    <th width='15%'>Avatar</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
    
                <?php
                    $no = 1;
                    foreach($librarians as $key=>$row){
                ?>

                <tr>
                    <td><?php print $no++.'.';?></td>
                    <td>
                        <img width="75%" class="img-ctr"  id="tableImg" src="<?php print base_url('/assets/img/').$row->avatar;?>">
                    </td>
                    <td><?php print $row->username;?></td>
                    <td><?php print $row->name;?></td>
                    <td><?php print $row->email?></td>
                    <td class="action-holder">
                        <a href="<?= base_url('index.php/librarian/edit')."/$row->id"?>" class="btn-left">Edit</a>
                        <a href="<?= base_url('index.php/librarian/delete')."/$row->id"?>" class="btn-right">Delete</a>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </div>
        <div class="card-footer pt-3 pb-3 btn-holder">
            <a href="<?= base_url('index.php/librarian/create')?>" class="btn-insert">Add</a>
        </div>
    </div>
</main>

<script src="<?= base_url('/assets/js/librarian.js')?>"></script>