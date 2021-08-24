
<!-- MODAL CREATE -->
<div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="modalcreateCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Informações do Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @foreach ($professor as $p)
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Fotografia</label>
                        <input type="file" class="form-control" name="fotografia" aria-describedby="fotografia" placeholder="Fula de tal" >
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="Fula de tal">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Matricula</label>
                        <input type="text" class="form-control" name="matricula" aria-describedby="matricula" placeholder="00-0000">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <select name="materia" class="custom-select" required>
                        <option >Escolha a matéria</option>
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
                        <option value="">Escolha o horário</option>
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
            <button type="submit" class="btn btn-primary" >Registrar</button>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modalatualizar" tabindex="-1" role="dialog" aria-labelledby="modalatualizarCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Informações do Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{ route('update', $p['id']) }}" method="POST">
        @csrf
        @METHOD('PUT')
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Fotografia</label>
                        <input type="file" class="form-control" name="fotografia" aria-describedby="fotografia" value="{{$p['fotografia']}}"  >
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="Fula de tal" value="{{$p['nome']}}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="text">Data de nascimento</label>
                        <input type="text" class="form-control" name="data_de_nasc" aria-describedby="data de nascimento" placeholder="25..." value="{{$p['data_nasc']}}" >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="text">Matricula</label>
                        <input type="text" class="form-control" name="matricula" aria-describedby="matricula" placeholder="00-0000" value="{{$p['matricula']}}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <select name="materia" class="custom-select" required>
                        <option >Matéria atual: {{ $p['materia'] }}</option>
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
                        <option >Horario atual: {{ $p['horario'] }}</option>
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
</div>
@endforeach
<!-- MODAL DELETE -->
<div class="modal fade" id="modaldeletar" tabindex="-1" role="dialog" aria-labelledby="modaldeletarCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h3 class="text-primary">DELETADO COM SUCESSO!</h3>
      </div>
    </div>
  </div>
</div>




    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
