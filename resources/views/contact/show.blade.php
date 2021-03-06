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

                        {{ $contact->name }}
                        {{ $contact->title }}
                        {{ $contact->email }}
                        {{ $contact->url }}
                        {{ $gender }}
                        {{ $age }}
                        {{ $contact->contact }}

                        <form method="GET" action="{{ route('contact.edit', ['id' => $contact->id]) }}">
                            @csrf
                            <input class="btn btn-primary" type="submit" value="変更する">
                        </form>

                        <form method="GET" action="{{ route('contact.destroy', ['id' => $contact->id]) }}">
                            @csrf
                            <input class="btn btn-danger" type="submit" value="削除する">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
