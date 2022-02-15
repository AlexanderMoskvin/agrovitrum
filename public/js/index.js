let productsListMobile = document.querySelector("#product-list-mobile")

let closeButton = document.querySelector(".close-menu")

let close = document.querySelector(".close-menu img")

let listButton = document.querySelector(".icon-menu")

let list = document.querySelector(".icon-menu img")

let block = document.querySelector(".d-block-3")

let blockList = document.querySelector(".d-block-3 ul")

let headerTopBlock = document.querySelector(".header-top-block")

let searchForm = document.querySelector(".search-form")

list.onclick = () => {
    productsListMobile.style.display = 'block'
    closeButton.setAttribute('id', 'visible')
    close.setAttribute('id', 'visible')
    listButton.setAttribute('id', 'hidden')
    headerTopBlock.setAttribute('id', 'hidden')
    searchForm.style.marginTop = '45px';
}

close.onclick = () => {
    productsListMobile.style.display = 'none'
    closeButton.removeAttribute('id')
    close.removeAttribute('id')
    list.style.display = 'block'
    listButton.removeAttribute('id')
    headerTopBlock.removeAttribute('id')
    searchForm.style.marginTop = '0';
}

block.onmouseover = () => {
    blockList.style.display = 'block'
}

block.onmouseout = () => {
    blockList.style.display = 'none'
}

let buttonMail = document.querySelector(".feedBack")

let form = document.querySelector("#hideBlock")

buttonMail.onclick = () => {
    form.style.display = 'block'
}

let hiddenClose = document.querySelector(".hiddenClose img")

hiddenClose.onclick = () => {
    form.style.display = 'none'
}

let first = document.querySelector('.first')

let second = document.querySelector('.second')

let third = document.querySelector('.third')

let descriptionFirst = document.querySelector('.description-first')

let descriptionSecond = document.querySelector('.description-second')

let descriptionThird = document.querySelector('.description-third')

first.onclick = () => {
    descriptionFirst.setAttribute('id', 'visible')
    descriptionSecond.setAttribute('id', 'hidden')
    descriptionThird.setAttribute('id', 'hidden')
    first.style.background = '#85a81e'
    second.style.background = 'white'
    third.style.background = 'white'
}

second.onclick = () => {
    descriptionFirst.setAttribute('id', 'hidden')
    descriptionSecond.setAttribute('id', 'visible')
    descriptionThird.setAttribute('id', 'hidden')
    first.style.background = 'white'
    second.style.background = '#85a81e'
    third.style.background = 'white'
}

third.onclick = () => {
    descriptionFirst.setAttribute('id', 'hidden')
    descriptionSecond.setAttribute('id', 'hidden')
    descriptionThird.setAttribute('id', 'visible')
    first.style.background = 'white'
    second.style.background = 'white'
    third.style.background = '#85a81e'
}
















