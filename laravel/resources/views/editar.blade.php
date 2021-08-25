@extends('layout.index')

@section('conteudo')

<main>
<div class="modal-dialog modal-dialog-centered school" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Informações do Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{ route('update', $professor->id) }}" method="POST">
        @csrf
        @METHOD('PUT')
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="Fula de tal" value="{{$professor->nome}}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Matricula</label>
                        <input type="text" class="form-control" name="matricula" aria-describedby="matricula" placeholder="00-0000" value="{{$professor->matricula}}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <select name="materia" class="custom-select" required>
                        <option >Matéria atual: {{ $professor->materia }}</option>
                        <option value="matematica">Matemática</option>
                        <option value="historia">História</option>
                        <option value="portugues">Português</option>
                        <option value="ciencias">Ciências</option>
                        <option value="geografia">Geografia</option>
                        <option value="artes">Artes</option>
                        </select>
                        <div class="invalid-feedback">A sua escolha não é válida</div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <select name="horario" class="custom-select" required>
                        <option >Horario atual: {{ $professor->horario }}</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        </select>
                        <div class="invalid-feedback">A sua escolha não é válida</div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Salvar</button>
        </form>

      </div>
    </div>
  </div>
</main>
@endsection
