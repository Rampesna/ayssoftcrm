@extends('layouts.master')
@section('title', 'Yapılacak İşler')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <div class="row">
        <div class="col-xl-12 text-right">
            <a href="{{ route('teams.create') }}" class="btn btn-primary">Yeni İş Oluştur</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <table class="table" id="list">
                                <thead>
                                <tr>
                                    <th>İş Başlığı</th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-styles')
    <link href="{{ asset('assets/crm/plugins/custom/datatables/datatables.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css"/>

@stop

@section('page-script')
    <script src="{{ asset('assets/crm/plugins/custom/datatables/datatables.bundle.js?v=7.0.3') }}"></script>
    <script src="{{ asset('assets/crm/js/pages/crud/datatables/extensions/buttons.js?v=7.0.3') }}"></script>

    <script>
        var table = $('#list').DataTable({
            language: {
                info: "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                infoEmpty: "Gösterilecek Hiç Kayıt Yok.",
                loadingRecords: "Kayıtlar Yükleniyor.",
                zeroRecords: "Tablo Boş",
                search: "Arama:",
                infoFiltered: "(Toplam _MAX_ Kayıttan Filtrelenenler)",
                lengthMenu: "Sayfa Başı _MENU_ Kayıt Göster",
                sProcessing: "Yükleniyor...",
                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
                select: {
                    rows: {
                        "_": "%d kayıt seçildi",
                        "0": "",
                        "1": "1 kayıt seçildi"
                    }
                }
            },
            dom: 'Bfrtipl',

            buttons: [
                'excel', 'pdf', 'print', 'csv', 'copy'
            ],

            responsive: true,
            select: false
        });
    </script>

@stop
