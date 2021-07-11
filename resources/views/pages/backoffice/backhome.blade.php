@extends('layout.backoffice')
@section('content')
    {{-- FORMULAIRE D'AJOUT --}}
    <section>
        @if (session('message'))
            <div class="container w-50 mt-5 alert alert-success">{{ session('message') }}</div>
        @endif
        <h2 class="text-center my-5">Home Edit</h2>
        <form class="container mt-5 w-50" action="/backoffice/postbackhome" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group mb-5">
                <label class="form-label">Text</label>
                <textarea class="form-control" name="text" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-3 text-center">
                    <select class="form-select" name="icon" aria-label="Default select example">
                        <option value="fa fa-laptop">Computer</option>
                        <option value="fa fa-wrench">Wrench</option>
                        <option value="fa fa-arrows-alt">Arrows</option>
                        <option value="fa fa-cogs">Cogs</option>
                    </select>
                    <label class="form-label mt-1">Select Icon</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary px-3 text-white">Submit</button>
                </div>
            </div>
        </form>
    </section>
    <hr style="margin: 50px 30vh;">
    {{-- TABLEAU QUI REPRESENTE LES DONNÉES ENTRÉES --}}
    <section>
        <table class="table table-dark table-hover container w-75">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Icon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($backhomes as $backhome)
                    <tr>
                        <th scope="row">{{ $backhome->id }}</th>
                        <td>{{ $backhome->title }}</td>
                        <td>{{ $backhome->text }}</td>
                        <td><i class="{{ $backhome->icon }}"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
