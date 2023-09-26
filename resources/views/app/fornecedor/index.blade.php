
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existe</h3>
@elseif (count($fornecedores)> 10)
    <h3>Existem</h3>
@else
    <h3>Não existem</h3>
@endif



<h1>Fornecedor : {{ $fornecedores[0] ['nome'] }}</h1>
<h1>Status : {{ $fornecedores [0] ['status'] }}</h1>

@dd($fornecedores);
