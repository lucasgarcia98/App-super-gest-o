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
{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>

    Status: {{ $fornecedores[1]['status'] }}
    <br>

    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não preenchido' }}
        {{-- $variavel testada não estiver definida (isset)
            ou
            $variavel testada possuir o valor null --}}
{{-- @endisset

    CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
    <br>
    Telefone: {{ $fornecedores[1]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }}
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
        @break
        @case('32')
            Juiz de Fora - MG
        @break
        @case('85')
            Fortaleza - CE
        @break
        @default
        Estado não identificado
    @endswitch
    <br>
@endisset --}}
{{-- Executa se for true
@if ($fornecedores[0]['status'] == 'S')
Fornecedor ativo
@endif --}}

{{-- Executa se for false
@unless($fornecedores[0]['status'] == 'S') 
Fornecedor inativo
@endunless --}}

{{-- if(empty($variavel)) {} Retonar tru se a variável estiver vazia

- ''
- 0
- 0.0
- '0'
- null
- false
- array()
- $var --}}

{{-- Uso de for --}}
{{-- @isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset --}}

{{-- Uso de While --}}
{{-- @isset($fornecedores)
    @php $i = 0 @endphp
    @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset --}}

{{-- Uso de Foreach --}}
{{-- @isset($fornecedores)

    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach

@endisset --}}

{{-- Uso do Forelse
    Verifica se existe algum item no array, se não exister ele executa o que estiver dentro da instrução @empty --}}
{{-- @isset($fornecedores)

    @forelse($fornecedores1 as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse

@endisset --}}

{{-- Para imprimir a tag de exibição do Blade, adicione o @ antes 
    @{{1}} vai imprimir
        - {{1}}
    --}}
@isset($fornecedores)

    @forelse($fornecedores1 as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse

@endisset
