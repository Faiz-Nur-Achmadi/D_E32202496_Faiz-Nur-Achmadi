@extends('backend/layouts.template') 

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i> Pemesanan</h3>
                <ol class="breadcrumb">
                    <li class="fa fa-home"><a href="{{ url('dashboard')}}"> Home</a></li>
                    <li><i class="icon_document_alt"></i> Pemesanan</li>
                    <li><i class="fa fa-files-o"> a </i></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel"> 
                    <header class="panel-heading">
                        a
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                        @endif
                        <a href="{{ route('pendidikan.create') }}"><button class="btn btn-primary" type="button"><i class="fa fa-plus">Tambah</i></button></a>
                        <br><br>
                        <table class="table table-striped table-advance table-hover"><tbody>
                            <tr>
                                <th><i class="icon_bag"></i> Nama</th>
                                <th><i class="icon_bag"></i> Alamat</th>
                                <th><i class="icon_document"></i> Madu Besar</th>
                                <th><i class="icon_document"></i> Madu Sedang</th>
                                <th><i class="icon_document"></i> Madu Kecil</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach ($pendidikan as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>
                                    @if ($item->besar==0)
                                    0
                                    @elseif ($item->besar==1)
                                    1
                                    @elseif ($item->besar==2)
                                    2
                                    @endif
                                </td>
                                <td>
                                    @if ($item->sedang==0)
                                    0
                                    @elseif ($item->sedang==1)
                                    1
                                    @elseif ($item->sedang==2)
                                    2
                                    @endif
                                </td>
                                <td>
                                    @if ($item->kecil==0)
                                    0
                                    @elseif ($item->kecil==1)
                                    1
                                    @elseif ($item->kecil==2)
                                    2
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('pendidikan.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-warning" href="{{ route('pendidikan.edit',$item->id) }}"> <i class="fa fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            <i class="fa fa-trash-o"></i></button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection