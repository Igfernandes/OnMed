class Professor {
    constructor($info){
        this.struct = $info.struct;
        this.callback = $info.callback;
        this.request = $info.request;
        this.value;
    }

    insert_table(){
        this.struct.query(`CREATE TABLE IF NOT EXISTS professores(
            id          INT NOT NULL AUTO_INCREMENT,
            nome        VARCHAR(100),
            matricula   INT,
            materia     VARCHAR(50),
            horario     VARCHAR(50),
            data_criacao    TIMESTAMP default current_timestamp,
            CONSTRAINT  pk_id PRIMARY KEY (id)
        )`)
    }

    get_field(){
        this.struct.query(`SELECT * FROM professores WHERE ${this.request}`, this.callback);
    }

    get_field_all(){
        this.struct.query(`SELECT * FROM professores`, this.callback);
    }

    set_field_all(){
        this.struct.query(`INSERT INTO professores(nome, matricula, materia, horario) 
        VALUES ('${this.request.nome}','${this.request.matricula}','${this.request.materia}' , '${this.request.horario}')`
        , this.callback)
        //this.struct.query('INSERT INTO noticias set ?', this.request, this.callback );
    }

    update_fields(){
        this.struct.query(`UPDATE professores SET nome='${this.request.nome}', matricula=${this.request.matricula}, materia='${this.request.materia}', horario='${this.request.horario}' WHERE id = ${this.request.id}`, 
         this.callback)
    }

    delete_fields(){
        this.struct.query(`DELETE FROM professores  WHERE id = ${this.request.id}`, this.callback)
    }
}

module.exports = new Professor({import: "null"});