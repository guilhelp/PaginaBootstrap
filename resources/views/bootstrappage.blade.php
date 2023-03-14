<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap w/ Vite</title>

    <!-- Styles -->
    @vite([
        'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
    <div class= "mx-auto">
        <div class="container-lg mx-auto px-0 py-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-lg">

                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link active" href="#">Cadastrar </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Consultar</a>
                </li>
                </ul>
                </div>
</nav>


    <div class="card">
            <div class="card-body">
                <div class="container-lg">
                    <h4 class="card-title"> Cadastrar - Agendamento de Potenciais Clientes </h1>

                    <p class="card-text"> Sistema utilizado para agendamento de serviços </p>
                    <br>
    
                    <form class="row g-3" method="post" id="form" nome="form">
                        <div class="form-row">
                            <label for="validationCustom01">Nome</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nome Completo" required>
                            <br>
                            <label for="validationCustom02">Telefone:</label>
                            <input type="tel" class="form-control" id="validationCustom02" placeholder="(xx) xxxxx-xxxx"  required>
                            <br>
                            <label for="inputState" class="form-label">Origem</label>
                            <select class="form-select" id="inlineFormCustomSelect" required>
                                <option selected>Celular</option>
                                <option value="1">Telefone Fixo</option>
                                <option value="2">Celular/Telefone Móvel</option>
                                <option value="3">Ramal</option>
                                <option value="4">Whatsapp</option>
                                <option value="5">Telegram</option>
                                <option value="6">Facebook</option>
                            </select>     
                            <br>
                            <label for="validationCustom03">Data do Contato:</label>
                            <input type="date" class="form-control" id="validationCustom03" placeholder="dd/mm/aaaa" required>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Observação:</label>
                                <textarea class="form-control" name="txtObservacao" id="txtObservacao" placeholder="Digite uma observação" rows="3" required></textarea>
                                <br>
                            </div>
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>