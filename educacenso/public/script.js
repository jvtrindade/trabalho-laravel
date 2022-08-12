onload = async () =>{

  let urle = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome';

  $.getJSON(urle, function(data){
    let conteudo = ""
    $.each(data, function(v,val){
      conteudo += "<option value='"+val.sigla+"'>"+val.nome+"</option>"
    });

    $("#estado").html(conteudo);
    $("#estado").change(async function(){
      $("#cidade").attr('disabled', true)
      $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${$(this).val()}/municipios?orderBy=nome`, function(data){
        let conteudo = ""
        $.each(data, function(v,val){
          conteudo += "<option value='"+val.id+"'>"+val.nome+"</option>"
        });

        $("#cidade").html(conteudo);
        $("#cidade").attr('disabled', false)
      })
    })
  })


async function getCursos(){
 const response = await fetch('/getcursos')
 const cursos = await response.json()

 cursos.forEach(curso => {
   var opt = document.createElement('option')
   opt.innerHTML = curso.nome
   opt.setAttribute('value', curso.id)

   document.getElementById('curso_id').appendChild(opt)

  });

  document.getElementById('curso_id').onchange = () => {
    getTurmas()
 }
}

  async function getTurmas(){

    var cursoID = document.getElementById('curso_id').value

    const selectTurmas = document.getElementById('turma_id')
    selectTurmas.innerHTML = ""

    const response = await fetch('/getturmas')
    const turmas = await response.json()

    turmas.forEach(turma => {
        if(turma.curso_id == cursoID){
            var opt = document.createElement('option')
            opt.innerHTML = turma.nome
            opt.setAttribute('value', turma.id)
            document.getElementById('turma_id').appendChild(opt)
        }
    })
 }

  getCursos();

}

