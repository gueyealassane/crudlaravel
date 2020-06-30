
@extends('layouts')





@section('edit')

        <div class="container fluid">
           
            <form method="post" action="#" >
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputmarque">Marque</label>
                  <input type="text" class="form-control" id="Inputmarque"  name="Inputmarque"  value="{{$car->nom}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputColor">Color</label>
                    <input type="text" class="form-control" id="InputColor" name="InputColor" value="{{$car->color}}" >
                </div>
                <div class="form-group">
                    <label for="InputCompagny">Compagny</label>
                    <input type="text" class="form-control" id="InputCompagny" name="InputCompagny" value="{{$car->compagny}}" >
                </div>
                <button type="submit" class="btn btn-primary">Editer</button>
              </form>
        </div>

@endsection