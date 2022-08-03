onload = async () => {
    curso = document.getElementById("curso_id");

    curso.addEventListener("click", async () => {
        const inputCurso = document.getElementById("curso_id").value;

        const body = new FormData();
        body.append("turma_cadastro", inputCurso);

        const response = await fetch(`options.php`, {
            method: "POST",
            body,
          });

        turma = await response.json()
        
    });
};
