@extends('backend.layouts.app')

@section('breadcrumb')
    {!! cui_breadcrumb([
        'Home' => route('admin.home'),
        'pengabdian' => route('admin.pengabdian.index'),
        'Index' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui_toolbar_btn(route('admin.pengabdian.create'), 'icon-plus', 'Tambah pengabdian') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    Daftar Pengabdian
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">
                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $Pengabdians->links() }}
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">Judul</th>
                            <th class="text-center">Tahun</th>
                            <th class="text-center">Total Dana</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Pengabdians as $pengabdian)
                            <tr>
                                <td>{{ $pengabdian->judul }}</td>
                                <td class="text-center">{{ $pengabdian->tahun }}</td>
                                <td class="text-center">{{ $pengabdian->total_dana }}</td>
                                <td class="text-center">
                                    {!! cui_btn_view(route('admin.pengabdian.show', [$pengabdian->id])) !!}
                                    {!! cui_btn_edit(route('admin.pengabdian.edit', [$pengabdian->id])) !!}
                                    {!! cui_btn_delete(route('admin.pengabdian.destroy', [$pengabdian->id]), "Anda yakin akan menghapus data pengabdian ini?") !!}
                                    - !{!! cui_btn_view(route('admin.pengabdiananggota.index', [$pengabdian->id]), " Anggota") !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">

                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $Pengabdians->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
