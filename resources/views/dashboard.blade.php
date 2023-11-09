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
        <div class="col-md-12">
            @if($message != '')
            <div class="alert alert-primary" id="alert">
                {{ $message }}
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if($error != '')
            <div class="alert alert-danger" id="alert">
                {{ $error }}
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Promo Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($detail as $promo)
                            @if($promo->deleted_at == null)
                                <tr>
                                    <td>{{ $promo->id }}</td>
                                    <td>
                                        <a href="{{ $promo->image_url }}" target="_blank">See Image</a>
                                    </td>
                                    @if($promo->url == null)
                                        <td>
                                            -
                                        </td>
                                    @else
                                        <td>
                                            <a href="{{ $promo->url }}" target="_blank">{{ $promo->url }}</a>
                                        </td>
                                    @endif
                                    @if($promo->deleted_at == null)
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                    @else
                                        <td>
                                            <span class="badge badge-danger">Deleted</span>
                                            ({{$promo->deleted_at}})
                                        </td>
                                    @endif
                                    <td>{{ $promo->note }}</td>
                                    <td>
                                        <form class="d-inline-block" role="form" method="POST" action="{{ route('delete-promo') }}">
                                            @csrf
                                            <input name="id" type="hidden" value="{{ $promo->id }}" />
                                            <input name="code" type="hidden" value="{{ $promo->note }}" />
                                            <button type="submit" class="btn btn-danger">Hapus</button>                     
                                        </form>
                                        <form class="d-inline-block" role="form" method="POST" action="{{ route('update-promo', $promo->id) }}">
                                            @csrf
                                            <input name="id" type="hidden" value="{{ $promo->id }}" />
                                            <input name="code" type="hidden" value="{{ $promo->note }}" />
                                            <button type="submit" class="btn btn-primary">Edit</button>                     
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
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
    }, 100)
</script>
@endsection
