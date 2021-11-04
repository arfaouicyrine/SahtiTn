@extends('layouts.inc.front-navbar')

<div class="container-fluid" style="margin-top: 140px;">
  <div class="row justify-content-center">
      @if (!empty($errors))
           @foreach ($errors->all() as $error )
                 <div class="alert alert-danger">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="alert alert-danger">

                                {{ $errors }}
                            </div>
                        </li>
                    </ul>
                </div>
           @endforeach
      @endif
      <div class="col-md-8 mx-auto" style="margin-left: -180px ;">
          <div class="card">
              <div class="card-header"><h2 style="color: #C96567">Ajouter une question </h2></div>
              <div class="card-body">
                  <form action="{{ route('forum.store') }}" method="POST">
                  @csrf

                  @method('PUT')
                      <div class="form-group" style="margin-bottom: 14px;">
                          <input type="text" name="title" placeholder="Tapez votre question" class="form-control">
                      </div>

                      <div class="form-group " style="margin-bottom: 14px;">
                          <textarea class="form-control" name="content" id="content" cols="30" rows="5"></textarea>
                      </div>
                      <div class="col-md-6 mt-0"  style="margin-bottom: 14px;">
                             <div class="form-group">
                                 <label for="">Choisir un department</label>

                                 <select name="department_id">
                                     <option selected="" disabled> Tout les département</option>
                                     @foreach ($department as $ditem)
                                          <option value="{{ $ditem->id }}"> {{ $ditem->name }} </option>

                                     @endforeach

                                </select>
                         </div>
                        </div>
                      <div class="form-group" style="margin-bottom: 14px;">
                          <button type="submit" class="btn "  style="background-color:#C96567 ;">Valider</button>
                      </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


