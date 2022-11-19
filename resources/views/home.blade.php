@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 m-auto">
                @if(session()->has("success"))
                    <div class="alert alert-success">
                        {{ session()->get("success") }}
                    </div>
                @endif
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/save" method="post">
                    {{ @csrf_field() }}
                    <div class="mb-3">
                        <label for="">Nama lengkap</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Jabatan</label>
                        <select class="form-select" id="inputJabatan" name ="jabatan">
                            @foreach($jabatan as $j)
                                <option value="{{ $j->name }}">{{$j->name}}</option>
                            @endforeach
                        </select>          
                    </div>
                    <div class="mb-3">
                        <label for="">Telepon</label>
                        <input type="tel" class="form-control" name="telepon">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="">Tahun Lahir</label>
                        <input type="number" class="form-control" name="tahunlahir" min="1" max="9999">
                    </div>
                    <div class="mb-3">
                        <label for="">Skill Sets</label>
                        <input type="text" class="form-control" name="skillsets">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
</div>
                </form>
            </div>
        </div>
    </div>
@endsection