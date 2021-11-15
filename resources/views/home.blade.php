@extends('layouts.main')

@section('container')
    <center>
        <img src="https://github.blog/wp-content/uploads/2020/04/Facebook_1200-x-630_Option1%402x.png?width=852&height=480" class="img-fluid" alt="pizza" width="852" height="480">
            
        <div class="card" style="width: 18rem;">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="example@examplemail.com">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Address</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Jl.Example No.1">
            </div>
        </div>
        </center>
@endsection