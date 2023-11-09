@extends('layouts.admin')
@section('content')
<div class="">
      <div class="d-flex justify-content-between mt-3">
        <h3>Projects</h3>
      <a href="{{route('add-project')}}" title="Edit" class="edit-btn btn btn-primary px-4 mb-0">Add</a>
      </div>
    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
                <tr>
                <th>Sl no.</th>
                <th>Project Name</th>
                <th>Commercial</th>
                <th>Resources</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
              </thead>
              <tbody>
                @foreach($projects as $project)
                @php $count = 1; @endphp
                <tr>
                  <td>{{$count}}</td>
                  <td>{{$project->project_name}}</td>
                  <td>{{$project->commercial}}</td>
                  <td>{{$project->resources}}</td>
                  <td>{{$project->description}}</td>
                  <td><a href="{{route('edit-project',$project->id)}}" class="edit-btn btn btn-primary mb-0">Edit</a></td>
                </tr>
                @php $count++; @endphp
                @endforeach
              </tbody>
        </table>
      </div>
</div>
@endsection