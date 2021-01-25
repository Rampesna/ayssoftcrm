@extends('layouts.master')
@section('title', 'Anket Cevabı Oluştur')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="name">Anket Cevabı Başlığı</label>
                                <input id="name" name="name" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-styles')

@stop

@section('page-script')

@stop
