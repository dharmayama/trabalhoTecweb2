<?php 

$nomeFunc = $_POST["nomeFunc"];
$idadeFunc = $_POST["idadeFunc"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../client/plugins/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-responsive striped">
                    <thead>
                        <tr>
                            <td>Nome do funcionário</td>
                            <td>Idade do funcionário</td>
                            <td>Filhos</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $nomeFunc ?>
                            </td>
                            <td>
                                <?php echo $idadeFunc ?>
                            </td>
                            <td>
                                <?php 
                                    foreach ($_POST as $key => $value) {
                                        if( ($key != "nomeFunc") && ($key != "idadeFunc") )
                                        {
                                            if (strpos($key, 'nome') !== false) {
                                                echo "<div>
                                                        Nome: $value
                                                    </div>";
                                            } else {
                                                echo "<div>
                                                        Idade: $value
                                                    </div>";
                                            }    
                                        }
                                    }                            
                                ?>
                            </td>
                        </tr>                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../client/plugins/jquery/jquery.js"></script>
    <script src="../client/plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>        