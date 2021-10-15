<h3>Fornecedor</h3>

{{-- Comentário invisível --}}

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>

@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>

@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

{{-- @if Executa se o retorno for True --}}

{{-- @unless Executa se o retorno for False --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>

    Status: {{ $fornecedores[1]['status'] }}
    <br>

    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset

    <br>
@endisset
{{-- Executa se for true
@if ($fornecedores[0]['status'] == 'S')
Fornecedor ativo
@endif --}}

{{-- Executa se for false
@unless($fornecedores[0]['status'] == 'S') 
Fornecedor inativo
@endunless --}}
