
@extends('layouts')





@section('create')

        <div class="container fluid">
           
            <form method="post" action="create" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputmarque">Marque</label>
                  <input type="text" class="form-control" id="Inputmarque"  name="Inputmarque" >
                </div>
                <div class="form-group">
                    <label for="exampleInputColor">Color</label>
                    <input type="text" class="form-control" id="InputColor" name="InputColor">
                </div>
                <div class="form-group">
                    <label for="InputCompagny">Compagny</label>
                    <input type="text" class="form-control" id="InputCompagny" name="InputCompagny">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </form>
        </div>

@endsection