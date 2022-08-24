let cidades = []
let estados = []
onload = async () => {

    let urle = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome';

    $.getJSON(urle, function (data) {
        let conteudo = "<option disabled selected value=''>Selecione o estado desejado</option>"
        estados = data

        $.each(data, function (v, val) {
            conteudo += "<option value='" + val.sigla + "'>" + val.nome + "</option>"
        });

        $("#uf_id").html(conteudo);
        $("#uf_id").change(async function () {
            $("#cidade_id").attr('disabled', true)
            console.log(estados, this.value)
            const { nome } = estados.find(({ sigla }) => sigla === this.value)
            console.log(nome)
            $('#uf').val(nome)

            $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${$(this).val()}/municipios?orderBy=nome`, function (data) {
                let conteudo = "<option disabled selected value=''>Selecione a cidade desejada</option>"
                cidades = data

                $.each(data, function (v, val) {

                    conteudo += "<option value='" + val.id + "'>" + val.nome + "</option>"
                });

                $("#cidade_id").html(conteudo);
                $("#cidade_id").attr('disabled', false)
            })
        })

        $("#cidade_id").change(async function () {
            const { nome } = cidades.find(({ id }) => id === parseInt(this.value))
            $('#cidade').val(nome)
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
        async function getCursos() {
            const response = await fetch('/getcursos')
            const cursos = await response.json()

            document.getElementById('CURSO').onchange = () => {
                getTurmas()
            }
        }

        async function getTurmas() {

            var cursoID = document.getElementById('CURSO').value

            const selectTurmas = document.getElementById('TURMA')
            selectTurmas.innerHTML = ""

            const response = await fetch('/getturmas')
            const turmas = await response.json()

            turmas.forEach(turma => {
                if (turma.curso_id == cursoID) {
                    var opt = document.createElement('option')
                    opt.innerHTML = turma.nome
                    opt.setAttribute('value', turma.id)
                    document.getElementById('TURMA').appendChild(opt)
                }
            })
        }

        getCursos()
    })
}

