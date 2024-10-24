<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
</head>
<body>

    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
        </label>
            <br>
            <input type="text" name="name">

        <br>
        <label>
            ciudad:
        </label>
            <br>
            <input type="text" name="city">

            <br>
            <label>
                 email:
            </label>
                <br>
                <input type="text" name="email">


        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>

</body>
</html>