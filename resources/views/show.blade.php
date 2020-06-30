@extends('layouts')


@section('show')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Marque</th>
        <th scope="col">Color</th>
        <th scope="col">Comapgny</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($car as $caritem)
            <tr>
                    <td>{{$caritem->id}}</td>
                    <td>{{$caritem->nom}}</td>
                    <td>{{$caritem->color}}</td>
                    <td> {{$caritem->compagny}}</td>
                    <td>
                    <a  href="{{ url('edit/'.$caritem->id)}}"><button type="button" class="btn btn-primary">Editer</button></a>
                    <a  href="{{ url('edit/'.$caritem->id)}}"><button type="button" class="btn btn-danger" >Supprimer</button></a>
                    </td>
            </tr>
        @endforeach
    
    </tbody>
  </table>

@endsection