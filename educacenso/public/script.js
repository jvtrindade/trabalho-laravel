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
}