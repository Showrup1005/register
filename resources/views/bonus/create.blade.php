@extends('layout.master')
@section('title')
    Category Page
@endsection

@section('content')
<div class="my-5"></div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('bonus.store')}}" method="post">
                        @csrf
                        <div class="mb-5">
                            <label for="name">Name: </label>
                            <input type="text" name="name" id="name" class="form-control">
                            @error('name')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="bonusType">Bonus Type: </label>
                            <input type="text" name="bonusType" id="bonusType" class="form-control">
                            @error('bonusType')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="month">Month: </label>
                            <input type="text" name="month" id="month" class="form-control">
                            @error('month')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="rate">Rate: </label>
                            <input type="number" name="rate" id="rate" class="form-control">
                            @error('rate')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="gradeNumbers">Grade Numbers: </label>
                            <select name="gradeNumbers[]" id="gradeNumbers" class="form-control" multiple>
                                @foreach($grades as $grade)
                                    <option value="{{ $grade }}">{{ $grade }}</option>
                                @endforeach
                            </select>
                            @error('gradeNumbers')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>                        
                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
