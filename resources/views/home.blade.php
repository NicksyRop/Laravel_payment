@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make Payement</div>
                <div class="card-body">
                    <form action="" method="POST" id="paymentForm">
                        @csrf
                        <div class="row">
                            <div class="col-auto">

                                <label for="amount">How much do you want to pay?</label>
                                <input type="number" name="value" class="form-control" min="5" step="0.01" value="{{ mt_rand(5,10000)}}" id="" required>

                            </div>

                            <div class="col-auto">
                                <label for="select">Currency</label>
                                <select name="currency" id="" class="form-control">
                                    @foreach ($currencies as $currency)
                                    <option value="{{ $currency->iso}}">{{ strtoupper($currency->iso)}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="platform">Select payment platform</label>
                                <div class="form-group">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @foreach($payemntPlatforms as $platform)

                                            <label for="" class="btn btn-outline-secondary rounded m-2 p-1">

                                                <input type="radio" name="payment_platform" id="" value="{{$platform->id}}">
                                                <img src="{{asset($platform->image)}}" class="img-thumbnail" alt="payment image">
                                            </label>

                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary" id="payButton">Pay</button>

                        </div>


                    </form>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
