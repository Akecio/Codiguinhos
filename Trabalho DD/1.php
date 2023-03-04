<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ouvidoria de alunos</title>
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="/">Ouvidoria de alunos</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="#">Início</a></li>
                <li><a href="#">Cadastro</a></li>
                <li><a href="#">Reclamações</a></li>
                <li><a href="">Sugestões</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <main></main>
        <script src="script.js">
        </script>
        <h3>Ouvidoria Estudantil</h3>
        <div class="row">
            <div class="col-sm-5">
                <label>Nome:</label> <input type="text" class="form-control">
            </div>
            <div class="col-sm-2">
                <label>Curso</label>
                <select class="form-select" id="inlineFormSelectPref">
                <option selected></option>
                <option value="1">Enfermagem</option>
              <option value="2">Informática</option>
              <option value="3">Comércio</option>
              <option value="4">Administração</option>
            </select>
            </div>
            <div class="col-sm-2">
                <label>Série</label>
                <select class="form-select" id="inlineFormSelectPref">
                <option selected></option>
              <option value="1">1°</option>
              <option value="2">2°</option>
              <option value="3">3°</option>
            </select>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <label>Email:</label> <input type="text" class="form-control" placeholder="email@email.com">
            </div>
            <div class="col-sm-3">
                <label>Telefone:</label> <input type="text" class=" form-control " placeholder="(00)00000-0000 ">
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col-sm-1 ">
                <button type="button " class="btn btn-primary ">Salvar</button>
            </div>
        </div>

    </div>


</html>