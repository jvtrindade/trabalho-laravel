onload = async () => {

    let urle = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome';

    $.getJSON(urle, function (data) {
        let conteudo = "<option disabled selected value=''>Selecione o estado desejada</option>"
        $.each(data, function (v, val) {
            conteudo += "<option value='" + val.sigla + "'>" + val.nome + "</option>"
        });

        $("#uf").html(conteudo);
        $("#uf").change(async function () {
            $("#cidade").attr('disabled', true)
            $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${$(this).val()}/municipios?orderBy=nome`, function (data) {
                let conteudo = "<option disabled selected value=''>Selecione a cidade desejada</option>"
                $.each(data, function (v, val) {
                    conteudo += "<option value='" + val.nome + "'>" + val.nome + "</option>"
                });

                $("#cidade").html(conteudo);
                $("#cidade").attr('disabled', false)
            })
        })

        $("#cidade").change(async function () {
            $("cidade_id").val() = "ALGUMA COISA"
        })
    })


    async function getCursos() {
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

    async function getTurmas() {

        var cursoID = document.getElementById('curso_id').value

        const selectTurmas = document.getElementById('turma_id')
        selectTurmas.innerHTML = ""

        const response = await fetch('/getturmas')
        const turmas = await response.json()

        turmas.forEach(turma => {
            if (turma.curso_id == cursoID) {
                var opt = document.createElement('option')
                opt.innerHTML = turma.nome
                opt.setAttribute('value', turma.id)
                document.getElementById('turma_id').appendChild(opt)
            }
        })
    }

    getCursos();

}

