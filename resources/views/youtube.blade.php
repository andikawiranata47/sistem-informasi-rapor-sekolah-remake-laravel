@extends('layouts.main')

@section('judul')
    <title>{{ $judul }}</title>
@endsection

@section('navbar')
    <form class="d-flex align-items-center h-100" action="/youtube">
    @endsection

    <!-- Modal  -->

    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 510px" role="document">
            <div class="modal-content bg-white">
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal  -->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {

            // get Edit Product
            $('.btn-view').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');

                // Set data to Form Edit
                // $('.id').val(id);

                $.ajax({
                    url: 'https://www.googleapis.com/youtube/v3/videos',
                    dataType: 'json',
                    type: 'get',
                    data: {
                        'key': 'AIzaSyB0PmICOo9vXGhzs4hFIHoyDEyLkd17kuM',
                        'part': 'snippet,player',
                        'id': id
                    },
                    success: function(result) {
                        // console.log(result.items[0].player.embedHtml);
                        $('.modal-body').html(result.items[0].player.embedHtml)
                    }
                });



                // Call Modal Edit
                $('#view').modal('show');
            });

            $(document).on('hidden.bs.modal', '#view', function() {
                $('.modal-body').html('');
            });
        });
    </script>

    @section('container')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="d-xl-flex justify-content-between align-items-start">
                    <h2 class="text-dark font-weight-bold mb-2"> Halaman Youtube </h2>
                </div>
                @if (request('search') != null)
                    <div class="row">
                        @foreach ($result as $res)
                            <div class="col-lg-4 grid-margin stretch-card">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ $res['snippet']['thumbnails']['medium']['url'] }}"
                                        class="card-img-top img-fluid" alt="">
                                    <div class="card-body p-4 d-flex align-content-between flex-wrap">
                                        <div>
                                            <h5 class="card-title">{{ $res['snippet']['title'] }}</h5>
                                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                                {{ $res['snippet']['channelTitle'] }}</h6>
                                            <p class="card-text">{{ $res['snippet']['description'] }}</p>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-3 btn-view" data-toggle="modal"
                                            data-target="#view" data-id="{{ $res['id']['videoId'] }}">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="card-subtitle my-1 text-body-secondary">Silakan melakukan pencarian</h5>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        {{-- </div> --}}
                @endif


            @endsection
