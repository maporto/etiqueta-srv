<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div class="etiquetas">
            @foreach ($etiquetas as $etiqueta)
                @for ($i = 0; $i < $etiqueta['quantidade']; $i++)
                    <div id="etiqueta">
                            <span>
                                CNPJ:{{ $etiqueta['cnpj'] }}
                            </span>
                            <span style="height:60%;">
                                @php
                                echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG($etiqueta['codigoBarras'], 'EAN13',3,33) . '" alt="barcode"   />';
                                @endphp
                                {{ $etiqueta['codigoBarras'] }}
                            </span>
                            <span>
                                @if (array_key_exists('dataValidade', $etiqueta))
                                    {{ $etiqueta['dataValidade'] }}
                                @else
                                    Validade Indeterminda
                                @endif
                            </span>
                    </div>
                @endfor
            @endforeach
        </div>
    </body>
</html>
<style>
html, body {
    background-color: #fff;
    font-weight: 100;
    height: 842px;
    width: 595px;
    margin: 0;
    max-height: 842px;
    max-width: 595px;
    font-size:10px;
}
#etiqueta {
    width:135px;
    height:90px;
    float: left;
    border:dashed 1px #000000;
}
#etiqueta span{
    text-align: center;
    display: block;
    height: 20%;
}
#etiqueta span img{
    width:125px;
    height:35px;
}
</style>
