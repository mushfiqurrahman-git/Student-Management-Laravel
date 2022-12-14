<div class="card mb-3">
  <!-- <img src="" class="card-img-top height=40px" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all the informations about students in the system</p>
  </div>
</div>
<table class="table  table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td >{{$student->cne}}</td>
      <td >{{$student->firstName}}</td>
      <td >{{$student->secondName}}</td>
      <td >{{$student->age}}</td>
      <td >{{$student->speciality}}</td>
      <td>
        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{url('/delete/'.$student->id)}}" class="btn btn-sm btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
