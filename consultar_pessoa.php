<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário simples</title>
    <link href="formCadastro.css" rel="stylesheet" />
    < </head>

<body>

    <div class="formulario-container center">
        <form onsubmit="onSubmitForm(event)" method="POST" action=" ">
            <input type="hidden" name="id" id="txtId" />
            <table style="width: 100%;">
                <tr>
                    <td colspan="2">
                        <h3>Tito</h2>
                    </td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td colspan="3"> <input type="text" placeholder="Nome" id="txtNome" name="nome" maxLength="11" />
                    </td>

                </tr>

                <tr>
                    <td>Dat Nas</td>
                    <td>
                        <input type="date" placeholder="Data nascimento" id="txtDTN" name="dataNascimento" />
                    </td>
                    <td>Até</td>
                    <td>
                        <input type="date" placeholder="Até" name="ate" />
                    </td>
                </tr>

                <tr>
                    <td> Cidades:</td>
                    <td colspan="3">
                        <input type="text" name="cidade" id="txtCidade">
                    </td>
                </tr>

                <tr>
                    <td colspan="4">
                        <button type="submit"> TXT</button>
                        <button type="submit"> Excel</button>
                        <button type="submit"> PDF</button>
                    </td>
                </tr>
            </table>
        </form>

    </div>




</body>

</html>