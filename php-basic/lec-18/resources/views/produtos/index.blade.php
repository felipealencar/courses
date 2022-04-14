@section('content')
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                        <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete">Excluir</button>
                    </form>
                
                </td>
            </tr>
        @endforeach
    </table>

