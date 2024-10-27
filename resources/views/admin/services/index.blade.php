@extends('admin.layout')

@section('content')
    <h2>Xidmətlər</h2>
    <a href="{{ route('admin.services.create') }}">Yeni Xidmət Yarat</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Xidmətin Adı</th>
            <th>Əməliyyatlar</th>
        </tr>
        @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>
                    <a href="{{ route('admin.services.edit', $service->id) }}">Redaktə</a>
                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Sil</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
