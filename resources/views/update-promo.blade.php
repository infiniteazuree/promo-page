@extends('layouts.app')

@section('css')
<style type="text/css">
    .table td, .table th{
        vertical-align: middle;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(session()->has('message'))
        <div class="col-md-12">
            <div class="alert alert-primary" id="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        @if(session()->has('error'))
        <div class="col-md-12">
            <div class="alert alert-danger" id="alert">
                {{ session()->get('error') }}
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Promo</div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('edit-promo', $detail->id) }}">
                    @csrf
                        <div class="form-group">
                            <input id="inputImageUrl" name="image_url" value="{{$detail->image_url}}" type="text" class="form-control" placeholder="Input URL gambar"/>
                            <span role="alert" class="invalid-feedback">test error</span>
                        </div>
                        <div class="form-group">
                            <input id="inputUrl" name="url" value="{{$detail->url}}" type="text" class="form-control" placeholder="Input URL"/>
                            <span role="alert" class="invalid-feedback">test error</span>
                        </div>
                        <div class="form-group">
                            <input id="inputNode" name="note" value="{{$detail->note}}" type="text" class="form-control" placeholder="Input Keterangan"/>
                            <span role="alert" class="invalid-feedback">test error</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    setTimeout(function(){
        $('.close').click(function(){
            $('#alert').slideUp();
        });
    }, 100);
</script>
@endsection
