

<div id="bala" class="container" style="width: 35rem;">
<h2>BOLO DE FESTAS </h2>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?php echo $produtos["Festa_Bolo_115"]["img"];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"></div>
      <div class="card" style="width: 40rem;">
        <div class="card-body">
        <h5 class="card-title"><img src="./img/Img_Bolo_Logo.png" width="50" height="50"><?php echo $produtos["Festa_Bolo_115"]["descricao"]?> |  R$ <?php echo $produtos["Festa_Bolo_115"]["preco"]?></h5>
        <p class="card-text"> <?php echo $produtos["Festa_Bolo_115"]["info"]?></p>
        <a href="#" class="btn btn-success">Comprar</a>
      </div>
</div>
  </div >
    <div  class="carousel-item" data-bs-interval="2000">
      <img src="<?php echo $produtos["Festa_Bolo_43"]["img"];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 id='carrosel'><?php echo $produtos["Festa_Bolo_43"]["descricao"]?></h5>
        <p id='carrosel'>R$ <?php echo $produtos["Festa_Bolo_43"]["preco"]?>
        <p class="card-text"> <?php echo $produtos["Festa_Bolo_43"]["info"]?></p>
        <a href="#" class="btn btn-success">Comprar</a>
      </div>
      
    </div>
    <div class="carousel-item">
    <img src="<?php echo $produtos["Festa_Bolo_117"]["img"];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 id='carrosel'><?php echo $produtos["Festa_Bolo_117"]["descricao"]?></h5>
      <p id='carrosel'>R$ <?php echo $produtos["Festa_Bolo_117"]["preco"]?>
      <p class="card-text"> <?php echo $produtos["Festa_Bolo_117"]["info"]?></p>
      <a href="#" class="btn btn-success">Comprar</a>
      </div>
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</html>