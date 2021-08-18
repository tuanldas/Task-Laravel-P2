@extends('layouts.base')


@section('title')
    Insert
@endsection

@section('content')
    <div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <form class="contact3-form validate-form" method="post" action="{{ route('addData') }}">
                    {{ csrf_field() }}
                    <span class="contact3-form-title">
						Insert
					</span>

                    @include('include.index')

                </form>
            </div>
        </div>
    </div>


@endsection