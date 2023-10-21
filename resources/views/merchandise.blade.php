@extends('dashboard')
@section('content')

<style>
    * {
        background-color: #23141E;
    }

    h2,
    h4,
    h5,
    p {
        font-family: goldenbook, serif;
        font-style: normal;
        color: white;
    }


    .card-img-top {
        transition: 0.1s;
        elevation: 2;
        box-shadow: 4px 3px 15px;
        margin-bottom: 15px;
    }

    .card-img-top:hover {
        box-shadow: 0 0 10px 4px #D6B56E;
    }

    .horizontal-scroll-container {
        display: flex;
        overflow-x: auto;
        white-space: nowrap;
    }

    .card {
        flex: 0 0 calc(33.33% - 18px);
        margin-right: 20px;
        background-color: inherit;
    }
</style>
<div class="container-index">
    <div class="table-container">
        <div class="title text-center">
            <h2 class="mt-3 mb-4">2022 IU CONCERT〈The Golden Hour: Under The Orange Sun〉</h2>
            <h5>Our Official Merchandise</h5>
        </div>

        @if($merchandise->isEmpty())
        <p style="color:white">No tickets available at the moment.</p>
        @else
        <div class="horizontal-scroll-container">
            @foreach ($merchandise as $item)
            <div class="card mt-3 p-3" style="border: none;">
                <img src="{{ asset('images/seatplan.jpg') }}" class="card-img-top" style="object-fit: cover; aspect-ratio: 1/1;" alt="...">

                <div class="card-body">
                    <h5 class="card-title text-white">{{$item->name}}</h5>
                    <p class="card-text">IDR {{number_format($item->price)}}</p>
                </div>
            </div>
            @endforeach
        </div>
        @endif

    </div>

</div>

@endsection