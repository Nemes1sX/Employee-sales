@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2 class="text-center">Pardavimai</h2>
            <div class="text-center">
                <div class="btn-group customer-btn create-button" role="group">
                    <a href="{{route('sales.create')}}" class="btn btn-info">Sukurti anketa</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert col-lg-9 col-md-9 alert-success alert-box templates">
                    <p class="text-center">{{ $message }}</p>
                </div>
            @endif

        </div>


        <div class="col-lg-9 center-table">
            <table class="table table-bordered table-responsive-lg" id="customers-datatable">
                <thead>
                <tr>
                    <th>Aptarnavęs darbuotojas</th>
                    <th>Sutarties nr.</th>
                    <th>Greitis</th>
                    <th>Aptarnavimas</th>
                    <th>Rekomendacija</th>
                    <th>Pastabos</th>
                    <th>Sutikimas</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($sales as $sale)
                       <tr>
                          <td>{{$sale->employee->name.' '.$sale->employee->surname }}</td>
                           <td>{{ $sale->sutarties_nr }}</td>
                           <td>
                               @for($i = 1; $i<=$sale->greitis; $i++)
                                   <span class="fa fa-star checked"></span>
                               @endfor
                           </td>
                           <td>
                               @for($i = 1; $i<=$sale->aptarnavimas; $i++)
                                   <span class="fa fa-star checked"></span>
                               @endfor
                           </td>
                           <td>
                               @for($i = 1; $i<=$sale->rekomendacija; $i++)
                                   <span class="fa fa-star checked"></span>
                               @endfor
                           </td>
                           <td>{{ $sale->pastabos }}</td>
                           <td>
                           @if ($sale->sutikimas)
                               <span>&#10003;</span>
                           @else
                               <span>&#9888;</span>
                           @endif
                           </td>
                       </tr>
                   @endforeach
                </tbody>
            </table>
            {{ $sales->links() }}
        </div>
    </div>
@endsection