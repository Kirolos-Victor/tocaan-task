@extends('product')
@section('content')
    <form action="{{route('task')}}" method="post">
        @csrf

        <th>Task 2</th>

    <div class="row  text-center">

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Dress</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p>Please select your color:</p>
                            <input type="radio" id="red" name="color" value="red">
                            <label for="red">Red</label><br>
                            <input type="radio" id="blue" name="color" value="blue">
                            <label for="blue">Blue</label><br>
                            <input type="radio" id="black" name="color" value="black">
                            <label for="black">Black</label>
                        </div>
                        <div class="col">
                            <p>Please select your Size:</p>
                            <input type="radio" id="large" name="size" value="large">
                            <label for="large">Large</label><br>
                            <input type="radio" id="Small" name="size" value="small">
                            <label for="Small">Small</label><br>
                            <input type="radio" id="Medium" name="size" value="medium">
                            <label for="Medium">Medium</label>
                        </div>
                        <div class="col">
                            <p>Please select your Type:</p>
                            <input type="radio" id="Polyester" name="type" value="polyester">
                            <label for="Polyester">Polyester</label><br>
                            <input type="radio" id="Cotton" name="type" value="cotton">
                            <label for="Cotton">Cotton</label><br>

                        </div>
                    </div>
                    <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Purchase</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
