<x-header />

  <main>
    <div class="container-fluid school">
        <div class="row school_content">
            <div class="col-12 school_content-collum">
                <div class="filter"></div>
                <div class="container">
                    <div class="row school_development">
                        <div class="col-12 school_development-collum">
                            <div class="school_development-title">
                                <h2>Professores Registrados</h2>
                            </div>
                            <div class="school_development-create">
                                <button data-toggle="modal" data-target="#modalcreate">Adicionar Professor</button>
                            </div>
                            <div class="school_development-box d-flex justify-content-around">

                                    @foreach($professor as $p)

                                <div class="school_development-box-item">
                                    <div class="school_development-box-item-info">
                                        <div class="school_development-box-item-info-name">
                                            <p>{{$p->nome}}</p>
                                        </div>
                                       <div class="school_development-box-item-info--box text-center">
                                            <div class="school_development-box-item-info--box-age">
                                                <p>Matricula: <span>{{$p->matricula}}</span></p>
                                            </div>
                                       </div>
                                        <div class="school_development-box-item-info-class">
                                            <table>
                                                <thead>
                                                   <tr>
                                                        <th>Matéria</th>
                                                        <th>Horário</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$p->materia}}</td>
                                                        <td>{{$p->horario}} hrs</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="school_development-box-item-info-btns d-flex">
                                            <div class="school_development-box-item-info-btns-1">
                                                <a href="{{ route('edit', $p['id']) }}" data-toggle="modal" data-target="#modalatualizar">Atualizar</a>
                                            </div>
                                            <div class="school_development-box-item-info-btns-1">
                                            <form action="{{route('destroy', $p['id']) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" data-toggle="modal" data-target="#modaldeletar">Deletar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>




