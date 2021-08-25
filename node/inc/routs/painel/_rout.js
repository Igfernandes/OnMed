module.exports = function(app){
    app.get("/", (req,res)=>{
        
        const $cnt = app.data._connect();
        const $query = app.data.models.professor._mod

        $query.struct = $cnt
        $query.callback = (err, resp) =>{
            res.render("painel/_view", {professor: resp})
        }

        $query.get_field_all()
    })
}