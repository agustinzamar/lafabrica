//navbar elements
const btnEdit = document.querySelector('#btnEdit')
const btnSave = document.querySelector('#btnSave')
const btnCancel = document.querySelector('#btnCancel')
const btnUndo = document.querySelector('#btnUndo')
const btnRedo = document.querySelector('#btnRedo')

//initial data
let data = JSON.parse(localStorage.getItem('data')) || {}

//all editable elements
const editableElements = Array.from(document.querySelectorAll('.editable'))

const getTexts = editableElements => {
    if (!Array.isArray(editableElements)) return

    editableElements.forEach(x => {
        const text = data[x.dataset.editable] || 'Put your text here.'

        if (x.childNodes[0]) {
            x.childNodes[0].nodeValue = text
        } else {
            x.textContent = text
        }
    })
}

const enableEdit = elements => {
    btnEdit.disabled = true
    btnCancel.disabled = false
    btnSave.disabled = false
    btnUndo.disabled = false
    btnRedo.disabled = false

    elements.forEach(x => {
        x.contentEditable = true
    })
}

const disableEdit = elements => {
    btnSave.disabled = true
    btnCancel.disabled = true
    btnUndo.disabled = true
    btnRedo.disabled = true
    btnEdit.disabled = false

    elements.forEach(x => {
        x.contentEditable = false
    })
}

const save = element => {
    data = {
        ...data,
        [element.dataset.editable]: element.textContent,
    }

    localStorage.setItem('data', JSON.stringify(data))
}

const addListeners = elements => {
    elements.forEach(x => {
        x.addEventListener('blur', function () {
            //this timeout is necesary to avoid setting the old data when
            // enter is pressed and focus is lost
            setTimeout(() => {
                this.contentEditable = false
                this.childNodes[0].nodeValue = data[this.dataset.editable]
            }, 0)
        })

        x.addEventListener('keydown', evt => {
            if (evt.keyCode === 13) {
                evt.preventDefault()
                x.contentEditable = false
                save(x)
            }
        })
    })
}

const createPopUp = element => {
    const popup = document.createElement('div')
    popup.classList.add('editable-popup')
    popup.innerHTML = '<i class="fas fa-pen"></i>'
    popup.addEventListener('click', evt => {
        evt.stopPropagation()

        enableEdit([popup.parentElement])
    })

    element.appendChild(popup)
}

const createPopUps = elements => {
    elements.forEach(x => {
        createPopUp(x)
    })
}

const init = elements => {
    getTexts(elements)
    createPopUps(elements)
    //add listener to enter keypress
    addListeners(elements)
}

//init edit mode
init(editableElements)

/*Manage buttons bar */
btnEdit.addEventListener('click', function (evt) {
    evt.stopPropagation()
    enableEdit(editableElements)
})

btnSave.addEventListener('click', function (evt) {
    evt.stopPropagation()

    disableEdit(editableElements)

    editableElements.forEach(x => {
        save(x)
    })
})

btnCancel.addEventListener('click', function (evt) {
    evt.stopPropagation()

    disableEdit(editableElements)
})

document.addEventListener('click', () => {
    disableEdit(editableElements)
})
