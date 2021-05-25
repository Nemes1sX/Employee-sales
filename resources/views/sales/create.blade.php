@extends('layouts.app')
@section('content')
<h2 class="text-center">Aptarnaviumo vertinimo anketa</h2>
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12">
                    <div class="card sales-form">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('sales.store') }}" method="POST">
                            @csrf
                            <div class="card-header">{{ __('Nauja anketa') }}</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="darbuotojas">{{ __('Darbuotojas') }}</label>
                                            <select id="darbuotojas" class="form-control" name="employee_id">
                                                @foreach ($employees as $employee)
                                                    <option value="{{$employee->id}}">{{$employee->name.' '.$employee->surname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="aptarnavimas">{{ __('Kaip vertinate aptarnavimo kokybę?') }}</label>
                                            <br/>
                                            @for ($i = 1; $i<=10; $i++)
                                                <label class="form-check-label" for="{{$i}}">{{ $i }}</label>
                                                <input name="aptarnavimas" value="{{ $i }}" type="radio">
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sutarties_nr">{{ __('Kaip vertinate aptarnavimo greitį?') }}</label>
                                            <br/>
                                             @for($i = 1; $i <= 10; $i++)
                                                <label class="form-check-label" for="{{ $i }}">{{ $i }}</label>
                                                <input name="greitis" value="{{ $i}}"  type="radio">
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sutarties_nr">{{ __('Kokia tikimybė, kad rekomenduosite mus savo draugams?nuo 1 labai maža iki 10 labai didelė') }}</label>
                                            <br/>
                                            @for($i = 1; $i <= 10; $i++)
                                                <label class="form-check-label" for="{{ $i }}">{{ $i }}</label>
                                                <input name="rekomendacija" value="{{ $i}}"  type="radio">
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="pastaba">{{ __('Gal galite pakomentuoti kodėl pateikėte tokius vertinimus?') }}</label>
                                            <textarea class="form-control" name="pastabos" rows="5" placeholder="{{ __('Pastabos') }}">{{ old('name') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="sutikimas">{{ __('Ar galėsime šį Jūsų vertinimą panaudoti savo svetainėjear socialiniuose puslapiuose?') }}</label>
                                            <input type="checkbox" name="sutikimas" value="1">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-sm btn-primary" type="submit"> {{ __('Save') }}</button>
                                <a class="btn btn-sm btn-danger" href="{{route('sales.index')}}">Grįžti į sąrašą</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection