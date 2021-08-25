module.exports = function(app){
    /**
     * @SAVE
     */


    app.post("/info", (req, res)=>{

        const $cnt = app.data._connect();
        const $query = app.data.models.professor._mod
    
        $query.struct = $cnt;
    
        $query.insert_table();

        $query.callback = (err, resp) =>{
            if(err != null){
                console.log(err)
            }
        }
        $query.request ={
            nome: req.body.nome,
            matricula: req.body.matricula,
            materia: req.body.materia,
            horario: req.body.horario
        }
        $query.set_field_all();
        res.redirect('./')
    })


    /**
     * @UPDATE
     */


    app.post("/update", (req, res)=>{

        const $cnt = app.data._connect();
        const $query = app.data.models.professor._mod
    
        $query.struct = $cnt;

        $query.callback = (err, resp) =>{
            if(err != null){
                console.log(err)
            }
        }
        $query.request ={
            nome: req.body.nome,
            matricula: req.body.matricula,
            materia: req.body.materia,
            horario: req.body.horario,
            id: req.body.id
        }
        $query.update_fields();
        res.redirect('./')
    })



      /**
     * @DELETE
     */


       app.post("/delete", (req, res)=>{

        const $cnt = app.data._connect();
        const $query = app.data.models.professor._mod
    
        $query.struct = $cnt;

        $query.callback = (err, resp) =>{
            if(err != null){
                console.log(err)
            }
        }
        $query.request ={
            id: req.body.id
        }
        $query.delete_fields();
        res.redirect('./')
    })

}
