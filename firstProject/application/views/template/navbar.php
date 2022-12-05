<link rel="stylesheet" href="<?= base_url('/assets/css/navbar.css');?>">
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/books')?>">Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('member')?>">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/librarian')?>">Librarian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('trxmember')?>">trxmember</a>
      </li>
    </ul>
  </div>
</nav>