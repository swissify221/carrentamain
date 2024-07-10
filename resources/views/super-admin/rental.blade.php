@extends('layout/layout')

@section('space-work')

<div class="table-responsive">
    <table id="dataTable" class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Car Type</th>
                <th>Trip Priod</th>
                <th>Trip Date</th>
                <th>Trip Time</th>
                <th>Passengers</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>

            @if ($rentals != null)
                @foreach ($rentals as $rental)
                <tr>
                    <td scope="row">{{ $rental->name }}</td>
                    <td scope="row">{{ $rental->email }}</td>
                    <td scope="row">{{ $rental->phone }}</td>
                    <td scope="row">{{ $rental->cartype }}</td>
                    <td scope="row">{{ $rental->trippriod }}</td>
                    <td scope="row">{{ $rental->date }}</td>
                    <td scope="row">{{ $rental->time }}</td>
                    <td scope="row">{{ $rental->passengers }}</td>
                    <td scope="row">{{ $rental->message }}</td>
                </tr>
                @endforeach
            @endif

        </tbody>
    </table>

</div>
@endsection


@section('script')
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
{{-- <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css"> --}}
<script>



   $('#dataTable').DataTable({
    columnDefs: [
    {bSortable: false, targets: [6]}
  ],
                dom: 'lBfrtip',
           buttons: [
               {
                   extend: 'copyHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                       columns: [ 0, ':visible' ]

                   }
               },
               {
                   extend: 'excelHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                    columns: [ 0, ':visible' ]
                   }
               },
               {
                   extend: 'pdfHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                       columns: [ 0, 1, 2, 5 ]
                   }
               },
               'colvis'
           ]
           });
       </script>
@endsection
