<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário simples</title>
    <link href="formCadastro.css" rel="stylesheet" />
</head>

<body>
    <?php
    $cidade = [];


    $conn = new mysqli("localhost", "root", "", "tito");

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "select * from cidade";
    $result = $conn->query($sql);
    while ($row = $result->fetch_array()) {

        array_push($cidade, $row);
    }

    ?>
    <div class="formulario-container center">
        <form onsubmit="onSubmitForm(event)" method="POST" action="cardMemori.php">
            <table style="width: 100%;">
                <tr>
                    <td>Nome: </td>
                    <td>
                        <input type="text" name="nome" />
                    </td>
                </tr>
                <tr>
                    <td>Idade: </td>
                    <td>
                        <input type="number" name="idade" />
                    </td>
                </tr>
                <tr>
                    <td>Data Nascimento: </td>
                    <td>
                        <input type="date" name="nascimento" />
                    </td>
                </tr>
                <tr>
                    <td>Cidade: </td>
                    <td>
                        <select name="cidade" style="
    width: 100%;padding: 8px;    box-sizing: border-box;
">
                            <option>Selecionar a Cidade</option>
                            <?php

                            for ($i = 0; $i < count($cidade); $i++) {
                                echo "<option value=" . $cidade[$i]["id"] . ">" . $cidade[$i]["nome"] . "</option>";
                            }
                            ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" style="float: right;">Cadastrar</button>
                    </td>
                </tr>
            </table>
        </form>

    </div>

    <br />
    <br />
    <br />
    <br />

    <script>
        function editarCadastro(id, nome, idade, dataNascimento) {

            var txtCPF = document.getElementById("txtNome");
            var txtCreci = document.getElementById("txtIdade");
            var txtId = document.getElementById("txtDTN");
            var cidadeSelecionada = document.getElementById("cidadeSelecionada");



            txtNome.value = nome;
            txtIdade.value = idade;
            txtDTN.value = dataNascimento;
            txtCidade.value = cidade;
        }

        function onSubmitForm(e) {


            var txtNome = document.getElementById("txtnome");
            var txtIdade = document.getElementById("txtIdade");
            var txtDTN = document.getElementById("txtDTN");

            if (txtnome.value.length != 20) {
                e.preventDefault();
                alert("o CPF deve conter 11 digitos numericos")
                return;
            } else if (txtIdade.value.length < 2) {
                e.preventDefault();
                alert("A idade deve conter pelo menos 2 caracteres");
                return;

            } else if (txtDTN.value.length < 12) {
                e.preventDefault();
                alert("o Nome deve conter pelo menos 12 caracteres");
                return;
            }

            if (txtCidade.value.length > 25) {
                e.preventDefault();
                alert("Creci não pode conter mais de 25 caracateres");
                return;
            }


        }
    </script>




</body>

</html>

<!--test input
            
            <tr>
                    <label for="CidadeSelect" name="cidades" >Selecione Sua cidade: </label>
                        <select class="select-cid" id="cidade-select">
                            <option value="cid1">Ipiranga</option>
                            <option value="cid2">Mooca</option>
                            <option value="cid3">Jardins</option>
                            <option value="cid4">Tatuapé</option>
                        </select>
                        <input type="text" placeholder="Nome" id="txtCidade" name="Cidades-form" maxLength="11" />
                </tr>
-->