const sintomas = [{
        name: "dorDeCabeça",
        text: "Dor de cabeça"
    },
    {
        name: "calor",
        text: "Calor"
    },
    {
        name: "dorNasCostas",
        text: "Dor nas costas"
    }, {
        name: "dorDeCabeça",
        text: "Dor de cabeça"
    },
    {
        name: "calor",
        text: "Calor"
    },
    {
        name: "dorNasCostas",
        text: "Dor nas costas"
    },
]

function addOptions(slcSintoma) {
    for (const sintoma of sintomas) {
        let option = document.createElement('option')
        option.value = sintoma.name
        option.text = sintoma.text
        slcSintoma.appendChild(option)
    }
}

function loadOptions() {
    let slcSintomas = document.getElementsByClassName('slcSintoma')
    for (const slcSintoma of slcSintomas) {
        addOptions(slcSintoma)
    }
}



document.addEventListener("DOMContentLoaded", function (event) {
    loadOptions()
})