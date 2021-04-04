<!DOCTYPE html>
<html lang="PT-pt">
<meta charset="utf-8">
<head>
	<title>Instituto Aslhamine</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<style type="text/css">
  section div div{
    border: 2px solid #eee;
    margin: 43px;
    height: 300px;
    border-radius: 15px;
  }
  section div div:hover{
    opacity: 0.7;
    border:none;
  }
  section div div p img{
    width: 100%;
    padding-top: 5px;
  }
  section div div a{ 
    text-decoration: none;
    font-size: 20px;
    color: #333;
    border: 1px solid #eee;
    padding:5px 20px 5px 20px;
    border-radius: 5px;
    text-indent: center;
    margin-left: 50px;
    margin-bottom: 20px
  }
  section div div a:hover{
    text-decoration: none;
    color: blue;
    font-size: 24px;
  }
  
</style>

<body >
  <div class="container">
<?php
  include "navbar.html";
?>
  <br>

    <div class="container">
      <div class="row">
        <div class="col-lg-2 text-dangerous bg-info">
          <div style="margin-top: 30px">
            <h4 style="text-align: center; font-size: 25px">Requisitos</h4>
              <ul class="list-unstyled" style="padding-top: 5px">
                <li style="text-align: center; font-size: 18px; padding: 5px">Certificado da 10</li>
                <li style="text-align: center; font-size: 18px; padding: 5px">Copia de BI</li>
                <li style="text-align: center; font-size: 18px; padding: 5px">Certificado da 10</li>
                <li style="text-align: center; font-size: 18px; padding: 5px">Copia de BI</li>
                <li style="text-align: center; font-size: 18px; padding: 5px">Certificado da 10</li>
                <li style="text-align: center; font-size: 18px; padding: 5px">Copia do BI</li>
              </ul>
          </div>
        </div>

        <div class="col-lg-10">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

              <div class="carousel-inner">
                <div class="carousel-item active"><img src="../imagens/slide2.jpg" alt="imagem do slide" width="100%" height="330"></div>
                <div class="carousel-item"><img src="../imagens/slide.jpg" alt="imagem do slide" width="100%" height="330"></div>
                <div class="carousel-item"><img src="../imagens/slide3.jpg" alt="imagem do slide" width="100%" height="330"></div>
              </div>
                  <a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                  <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
          </div>
        </div>
      </div>
    </div>
<br>
<br>

    <div class="jumbotron bg-info" style="padding: 2px">
      <p style="text-align: center;"><img src="../imagens/logo.png" height="100px"></p>
      <h2 class="text-dark" style="text-align: center">Rumo ao sucesso profissional</h2>
    </div>

<section class="container"  >
  <div class="row">
    <div class="col-lg-3">
      <p><img src="../imagens/github.png" height="200px"></p>
      <br> <a href="cursos.php.#git">Saiba mais</a>
    </div>
    
    <div class="col-lg-3">
      <p><img src="../imagens/php_mysql.png"  height="200px"></p>
      <br> <a href="cursos.php.#php">Saiba mais</a> 
    </div>
    <div class="col-lg-3">
      <p><img src="../imagens/bootstrap.png" height="200px"></p>
      <br> <a href="cursos.php.#boot">Saiba mais</a>
    </div>
  </div>
</section>
<br><br>
<?php
  include "rodape.html";
?>
</div>
</body>
</html>

