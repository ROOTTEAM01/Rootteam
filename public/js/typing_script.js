let text = 'Aorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis corrupti laudantium minima ratione consequuntur incidunt reiciendis veniam! Dicta, mollitia suscipit?'


const inputText = document.querySelector('.input_text')
const textBox = document.querySelector('.text_box')
const popup = document.querySelector('.popup_layer')
const tryAgainButton = document.querySelector('.try_again_btn')
const words = document.getElementsByClassName('word')

let inputLettersLenght = 0
let inputWordsCount = 0

let wordSizes = []
let boxSize  = 0
let lastsIndex = []

pintTheText()

words[0].firstChild.classList = 'char under_line'

inputText.addEventListener('input', () => {
    inputLettersLenght++
    const inputLettersArr = inputText.value.split('')
    inputWordsCount = inputText.value.split(' ').length
    const allSpans = document.querySelectorAll('.char')


    //clear input
    if(inputLettersArr.length != inputLettersLenght) {
        if(inputLettersArr.length == 0) {
            allSpans[0].classList = 'char under_line'
        }

        if(allSpans[inputLettersArr.length].classList.contains('last')) {
            apeareClearRow()
        }

        allSpans[inputLettersArr.length + 1].classList.remove('done')
        allSpans[inputLettersArr.length + 1].classList.remove('wrong')
        allSpans[inputLettersArr.length + 1].classList.remove('under_line')
        allSpans[inputLettersArr.length].classList.add('under_line')

        inputLettersLenght--
        inputLettersLenght = inputLettersArr.length
        return
    }

    if(inputLettersLenght == allSpans.length - 1) {
        stopGameAndCheckStatistics()
    }

    if(allSpans[inputLettersLenght].classList.contains('last')) {
        dissapeareFullRow()
    }

    // used spans filter
    const spansOnRange = [] 
    for(let i = 0; i < inputLettersLenght; i++) {
        spansOnRange.push(allSpans[i])
    }

    //for letter blue color and underline
    if(allSpans.length != inputLettersLenght) {
        allSpans[inputLettersLenght].classList.add('under_line')
    }

    spansOnRange.forEach((span, index) => {
        const inputLetter = inputLettersArr[index]
        if (inputLetter === span.innerText) {
            span.classList.remove('under_line')
            span.classList.add('done')
            span.classList.remove('wrong')
            if (inputLetter === ' ') {
                span.classList.remove('under_line')
                span.classList.remove('done')
                span.classList.add('space')
            }
        } else { 
            span.classList.remove('under_line')
            span.classList.remove('done')
            span.classList.add('wrong')
        }
    })
})


function stopGameAndCheckStatistics() {
    inputText.disabled = true
    clearInterval(timer)
    const spansWithClassNameWrong = document.querySelectorAll('.wrong').length
    const spansWithClassNameDone = document.querySelectorAll('.done').length

   if(spansWithClassNameWrong > spansWithClassNameDone ) {
    let stat = (spansWithClassNameDone * 100) / spansWithClassNameWrong
    document.getElementById('accuracy_procent').innerText = stat.toFixed(2) +' %'
    document.getElementById('statistic_wpm').innerText = `(${inputWordsCount}) WPM`
    document.querySelector('.statistic').innerText = currentSeconds < 59 ? `${inputWordsCount} բառ ${currentSeconds} վայրկյանում` 
                                                    : `${inputWordsCount} բառ մեկ րոպեում`

    photoSrcAndDescription = popupPhotoSrcChangeAndGameDescription(inputWordsCount)
    document.querySelector('.qualify').innerText = photoSrcAndDescription.description
    document.querySelector('.popup_animal_photo').src = photoSrcAndDescription.src
    
    document.querySelector('body').style.overflow = 'hidden' 
    popup.classList.add('open')
        return

   } else if (spansWithClassNameWrong < spansWithClassNameDone) {
    let stat = (spansWithClassNameWrong * 100) / spansWithClassNameDone
    document.getElementById('accuracy_procent').innerText = (100 - stat).toFixed(2) +' %'
    document.getElementById('statistic_wpm').innerText = `(${inputWordsCount}) WPM`
    document.querySelector('.statistic').innerText = currentSeconds < 59 ? `${inputWordsCount} բառ ${currentSeconds} վայրկյանում` 
                                                    : `${inputWordsCount} բառ մեկ րոպեում`

    photoSrcAndDescription = popupPhotoSrcChangeAndGameDescription(inputWordsCount)
    document.querySelector('.qualify').innerText = photoSrcAndDescription.description
    document.querySelector('.popup_animal_photo').src = photoSrcAndDescription.src

    document.querySelector('body').style.overflow = 'hidden'
    popup.classList.add('open')
        return
   }
}

let counter = 0
let counterTwo = 1
let textBoxMarginTop = 0

function dissapeareFullRow() {
    let deleteRow = boxSize < 292 ? -55 : -76
    counter++
    let lines = document.querySelectorAll('.line')
    lines[counter - 1].classList.add('diss')
    textBoxMarginTop = (deleteRow * counter)
    textBox.style.marginTop = (deleteRow * counter) + 'px'
    textBox.style.transition = '.3s ease-in-out' 
    if(counterTwo == 1) { return }
    else { counterTwo -- }
    return
}

function apeareClearRow() {
    let apearRow = boxSize < 292 ? 55 : 76
    if (textBox.marginTop > 0) { return }

    let lines = document.querySelectorAll('.line')
    textBox.style.marginTop = ((counterTwo * apearRow) + (textBoxMarginTop)) + 'px'
    textBox.style.transition = '.3s ease-in-out' 
    lines[counter - 1].classList.remove('diss') 
    counterTwo++
    counter--
    return
}

function _createNewRow() {
    const newRow = document.createElement('div')
        newRow.classList = 'row'
        textBox.appendChild(newRow)
        return newRow
}

function popupPhotoSrcChangeAndGameDescription(wordsCounts) { 
    if (wordsCounts < 25) {
        return {
            src: '../images/typing-test/snail@3x.png',
            description: 'Շա՜տ դանդաղ էր ։(' 
         }
    } else if (wordsCounts > 25 && wordsCounts < 45) {
        return {
           src: '../images/typing-test/penguin@3x.png',
           description: 'Բավականին արագ ես գրում!' 
        }
    } else if (wordsCounts > 45) {
        return {
            src: '../images/typing-test/octopus@3x.png',
            description: 'Սուպեր Արագություն!'
         }
    }
}

function pintTheText() {
    var containter = _createNewRow()
    text.split(" ").forEach(word => {
        var _word = document.createElement('div')
            word.split("").forEach((letter) => {
                const span = document.createElement('span')
                span.classList = 'char'
                span.innerText = letter
                _word.appendChild(span)
            })
            const space = document.createElement('span')
            space.classList = 'char'
            space.innerText = " "
            _word.classList.add('word')
            _word.appendChild(space)
            containter.appendChild(_word)
            wordSizes.push(_word.offsetWidth)
    }) 
}

lastLetter()

function lastLetter() {
    boxSize = textBox.clientWidth
    let currentWidth = 0

    let spans = document.getElementsByTagName('span')
    for(let i = 0; i < spans.length; i++) {
       if (spans[i].classList.contains('last')) {
           spans[i].classList.remove('last')
           document.querySelector('.line_box').innerHTML = ''
       }
    }

    for(let i = 0; i < words.length; i++) {
        currentWidth += wordSizes[i]

        if (currentWidth >= boxSize) {
            words[ i ].firstChild.classList.add('last')
            currentWidth = wordSizes[i]
            let line = document.createElement('hr')
            line.classList.add('line')
           if(document.querySelector('.container').offsetWidth <= 361){
                line.classList.add('mini')
           }
            document.querySelector('.line_box').appendChild(line)
        }
    }
        return
}


var timer
const limit = 60
let currentSeconds = 0
var initialOffset = '188';
$('.circle_animation').css('stroke-dashoffset', -188);

inputText.addEventListener('focus', () => {
    lastLetter()
    document.getElementById('pointer').classList = 'pointer_hidden'
    var start = Date.now();
      timer = setInterval(() => {

        var delta = Date.now() - start;
        let seconds = ((Math.floor(delta / 1000)))
        document.querySelector('.timer_seconds').innerText = 60 - seconds

        if (seconds > (limit - 0.5)) {
            clearInterval(timer)
            stopGameAndCheckStatistics()
            document.querySelector('body').style.overflow = 'hidden'
            popup.classList.add('open')
            return
        }
        currentSeconds = seconds

    $('.circle_animation').css('stroke-dashoffset',-1 * (initialOffset-((seconds +1)*(initialOffset/limit))));

}, 1000); 

}, {once : true})


function popupClose() { 
    popup.classList.remove('open')
    popup.classList.add('close')
    location.reload()
}

tryAgainButton.addEventListener('click', () => { location.reload() })

document.addEventListener('keyup', (e) => {
    if(e.key == 'Backspace') {
        return false
    }
})

window.addEventListener('resize', () => {
    boxSize = textBox.clientWidth
    lastLetter()
})
    





























