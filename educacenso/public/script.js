onload = async () =>{
 
  let urle = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';
  let urlc = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+$uf+'/municipios';
   
  $.getJSON(urle, function(data){
      let conteudo = ""
      $.each(data, function(v,val){
          conteudo += "<option value='"+val.sigla+"'>"+val.nome+"</option>"
      });
   
      $("#estado").html(conteudo);
  })
   
  $.getJSON()
   
  }
  