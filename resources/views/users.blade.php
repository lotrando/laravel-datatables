@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <span id="form_result"></span>
    <table class="table-hover table-striped table" id="usertable">
      <thead class="success text-gray">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Department</th>
          <th class="cent">Možnosti</th>
        </tr>
      </thead>
    </table>
  </div>
  <script>
    $(document).ready(function() {

      $('#usertable').DataTable({
        processing: true,
        serverSide: true,
        stateSave: false,
        pageSave: false,
        order: [
          [1, "asc"]
        ],
        "lengthMenu": [
          [10, 30, 60, 100, -1],
          [10, 30, 60, 100, "Všechny"]
        ],
        language: {
          "url": "{{ asset('js/datatables/cs.json') }}"
        },
        ajax: {
          url: "{{ route('users.index') }}",
        },
        columnDefs: [{
          type: 'czech',
          targets: 1
        }],
        columns: [{
            data: 'id',
            name: 'id'
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'department',
            name: 'department'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false
          },
        ],
        columnDefs: [{
            targets: 0,
            "width": "5%"
          },
          {
            targets: 1,
            "width": "15%"
          },
          {
            targets: 2,
            "width": "15%"
          },
          {
            targets: 3,
            "width": "15%"
          },
          {
            targets: 4,
            "width": "5%"
          }
        ]
      });

    });
  </script>
@endsection
