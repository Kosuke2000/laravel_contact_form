@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ route('contact.create') }}">
                            <button class="btn btn-primary">
                                新規登録
                            </button>
                        </a>
                        <form method="GET" action="{{ route('contact.index') }}">
                            @csrf
                            <input type="search" class="form-control" name="search">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">検索する</button>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">title</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->title }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td>
                                            <a href="{{ route('contact.show', ['id' => $contact->id]) }}">
                                                detatail
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
