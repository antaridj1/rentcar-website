@extends('frontend.layouts.app')
@section('style')
<style>
    .navbar img{
        width: 50px; 
        height: 50px;
        border-radius:5px;
    }

    .accordion-button:not(.collapsed){
        background-color: #f2f2f2;
        color:black
    }

    .accordion-button{
        color: rgb(32, 32, 32);
    }

    .price {
        font-size:20px;
    }

    @media (min-width: 576px){
        .navbar img{
            width:60px; 
            height:60px;
             border-radius:10px;
        }

        .price {
            font-size:24px;
        }
    }

    p {
        color: rgb(63, 63, 63);
    }


</style>
@endsection
@section('section')
@include('frontend.includes.nav')
<div class="container-fluid">
    <div class="row" style="margin-top: 100px;">
        @include('frontend.includes.contact')
    </div>

</div>

@endsection