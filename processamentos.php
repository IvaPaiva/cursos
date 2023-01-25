<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p{color: blue;
        text-align: center;
        }
        </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treina Recife</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <p>Tela inicial</p><br><br><hr>
  
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="cadastro.html">Tela de cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="alterar.html">Alterar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="excluir.html">Excluir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listar.html">Listar</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container mt-5">
  <div class="row" >
    
    <div class="col-sm-12">
        <!-- AQUI O DESIGNE ESPECÍFICO -->
        <?php

            echo "Nome: ".$_POST["fname"];
            echo "CPF: ".$_POST["fcpf"];

        ?>
    </div>
  </div>
</div>

</body>
</html>