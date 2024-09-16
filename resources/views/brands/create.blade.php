@extends('template')
@section('title','Crear categoría')
@push('css')
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        #description{
            resize: none !important;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid mb-4">
        <h1 class="h3 mb-3 text-gray-800">Crear marca</h1>
        <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
           <li class="breadcrumb-item"> <a href="{{route('brands.index')}}">Marcas</a></li>
            <li class="breadcrumb-item active">Crear marca</li>
        </ol>
        <div class="w-100 mt-3 border border-3 border-primary rounded p-4">
            <form action="{{ route('brands.store') }}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese un nombre" value="{{old('name')}}">
                        @error('name')
                            <small class="text-danger">{{'* '.$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea name="description" id="description" rows="10" class="form-control">{{old('description')}}</textarea>
                        @error('description')
                            <small class="text-danger">{{'* '.$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 text-right mt-3">
                        <button type="submit" class="btn btn-primary text-center px-4 py-2">CREAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    
@endpush