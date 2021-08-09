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
                                <input type="number" name="value" class="form-control" min="5" step="0.01" value="{{ mt_rand(5,10000)}}" id="">

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
