@extends('components.navbar')

@section('content')
<div class="w3-content" style="max-width:2000px;margin-top:146px">
    <div style="max-width:500px; margin:auto;">
       <form action="{{ route('payment') }}" method="POST">
            @csrf
            {{-- <input type="hidden" value="100" name="amount"> --}}
            <select class="w3-select" name="amount">
                <option value="">-- Select Amount --</option>
                <option value="5">$5</option>
                <option value="10">$10</option>
                <option value="20">$20</option>
                <option value="30">$30</option>
                <option value="40">$40</option>
                <option value="50">$50</option>
                <option value="100">$100</option>
            </select>
            <button class="w3-button w3-block w3-teal">Donate Now</button>
        </form>
    </div>
</div>
@endsection