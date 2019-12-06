<html>
<head>
    <meta charset="utf-8" />
    <title>Escola - Sistema de cadastro</title>
    <link rel="stylesheet" href="estilo/css/bootstrap.min.css"/>
    <link rel='stylesheet' href='estilo/css/simple-sidebar.css'/>
</head>

<body>

    <div class='d-flex' id='wrapper'>
        <div class='bg-light border-right' id='sidebar-wrapper'>
            <div class='sidebar-heading'>Escola - Pessoas</div>
            <div class='list-group list-group-flush'>
                <a href="index.php" class='list-group-item list-group-item-action bg-light'>Página inicial</a>
                <a href="cadastroAluno.php" class='list-group-item list-group-item-action bg-light'>Cadastro de Aluno</a>
                <a href="consultaAluno.php" class='list-group-item list-group-item-action bg-light'>Consulta de Aluno</a>
                <a href="cadastroProfessor.php" class='list-group-item list-group-item-action bg-light'>Cadastro de Professor</a>
                <a href="consultaProfessor.php" class='list-group-item list-group-item-action bg-light'>Consulta de Professor</a>
            </div>
        </div>
        <div id='page-content-wrapper'>
            <nav class='navbar navbar-expand-lg navbar-light bg-light border-bottom'>
                <button class='btn btn-primary' id='menu-toggle'>Recolher Menu</button>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
            </nav>
            <div class='container-fluid'>
                <h3 class='mt-3'><?php echo "$titulo"; ?></h3>
        
