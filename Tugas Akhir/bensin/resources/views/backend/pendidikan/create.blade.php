@extends('backend.layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Jual</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('dashboard')}}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Jual-Beli</li>
                    <li><i class="fa fa-files-o"></i>Jual Bensin</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Pendidikan
                    </header>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="pendidikan_form" method="POST"
                            action="{{ isset($pendidikan) ? route('pendidikan.update',$pendidikan->id) :  route('pendidikan.store') }}">
                                {!! csrf_field() !!}
                                {!! isset($pendidikan) ? method_field('PUT') : '' !!}
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Nama<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="nama" name="nama" minlength="5" type="text" value="{{ isset($pendidikan) ? $pendidikan->nama : '' }}"
                                            required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Alamat Lengkap<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="alamat" name="alamat" minlength="5" type="alamat" value="{{ isset($pendidikan) ? $pendidikan->alamat : '' }}"
                                            required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cemail" class="control-label col-lg-2">Madu Besar <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="besar" id="besar" required>
                                            <option value="1" {{ (isset($pendidikan) && $pendidikan->besar == 0) ? 'selected' : '' }}>0</option>
                                            <option value="2" {{ (isset($pendidikan) && $pendidikan->besar == 1) ? 'selected' : '' }}>1</option>
                                            <option value="3" {{ (isset($pendidikan) && $pendidikan->besar == 2) ? 'selected' : '' }}>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cemail" class="control-label col-lg-2">Madu Sedang <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="sedang" id="sedang" required>
                                            <option value="1" {{ (isset($pendidikan) && $pendidikan->sedang == 0) ? 'selected' : '' }}>0</option>
                                            <option value="2" {{ (isset($pendidikan) && $pendidikan->sedang == 1) ? 'selected' : '' }}>1</option>
                                            <option value="3" {{ (isset($pendidikan) && $pendidikan->sedang == 2) ? 'selected' : '' }}>2</option>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label for="cemail" class="control-label col-lg-2">Madu Kecil <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="kecil" id="kecil" required>
                                            <option value="1" {{ (isset($pendidikan) && $pendidikan->kecil == 0) ? 'selected' : '' }}>0</option>
                                            <option value="2" {{ (isset($pendidikan) && $pendidikan->kecil == 1) ? 'selected' : '' }}>1</option>
                                            <option value="3" {{ (isset($pendidikan) && $pendidikan->kecil == 2) ? 'selected' : '' }}>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <a href="{{route('pendidikan.index') }}"><button class="btn btn-default" type="button">Cancel</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection
