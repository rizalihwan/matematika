@extends('layouts.dashboard.app',['title' => 'Detail Soal'])
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3><u>Detail Soal</u></h3>
                </div>
                <div class="card-body">
                    <div>
                        <b style="font-size: 1.3rem;">Soal : </b> <label style="font-size: 1.2rem;">{!! $soal->soal !!}</label>
                    </div>
                    <div>
                        <b style="font-size: 1rem;">A.</b> <label style="font-size: 1rem;">{!! $soal->pilihan_a !!}</label>
                    </div>
                    <div>
                        <b style="font-size: 1rem;">B.</b> <label style="font-size: 1rem;">{!! $soal->pilihan_b !!}</label>
                    </div>
                    <div>
                        <b style="font-size: 1rem;">C.</b> <label style="font-size: 1rem;">{!! $soal->pilihan_c !!}</label>
                    </div>
                    <div>
                        <b style="font-size: 1rem;">D.</b> <label style="font-size: 1rem;">{!! $soal->pilihan_d !!}</label>
                    </div>
                    <div>
                        <b style="font-size: 1rem;">E.</b> <label style="font-size: 1rem;">{!! $soal->pilihan_e !!}</label>
                    </div>
                    <div>
                        <b style="font-size: 1rem; background-color: rgb(102, 255, 0);">Jawaban Benar : </b> <label style="font-size: 1rem;">{!! $soal->jawaban_benar !!}</label>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.soal.index') }}" class="btn btn-danger mr-2"
                        style="border-radius: 0;">Back</a>
                </div>
            </div>
        </div>
    </div>

@stop
