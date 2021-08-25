document.addEventListener("DOMContentLoaded", ()=>{
    let btns = document.querySelectorAll('[data-edit]')

    for(let btn of btns){
        btn.onclick = function(){
            let box = this.closest('.school_development-box-item')
            let form = document.querySelector('.edit-form')
    
            form.querySelector("[name='id']").value = this.dataset.edit
            form.querySelector("[name='nome']").value = box.querySelector('[data-field="nome"]').innerText
            form.querySelector("[name='matricula']").value = box.querySelector('[data-field="matricula"]').innerText
            form.querySelector("[name='materia'] option").value = box.querySelector('[data-field="materia"]').innerText
            form.querySelector("[name='horario'] option").value = box.querySelector('[data-field="horario"]').innerText
            form.querySelector("[data-horario]").innerText = "Horário atual: "+box.querySelector('[data-field="horario"]').innerText
            form.querySelector("[data-materia]").innerText = "Materia atual: "+box.querySelector('[data-field="materia"]').innerText
        }
    }
})