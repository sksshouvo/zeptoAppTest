function itemBtn(elementName) {
    var elements =  document.querySelector(elementName)
    elements.classList.add("hidden");
    if (elementName === "#headingBtn") {
        document.querySelector("#headingElement").classList.remove('hidden')
    } else if (elementName === "#imageBtn") {
        document.querySelector("#imageElement").classList.remove('hidden')
    } else {
        document.querySelector("#descriptionElement").classList.remove('hidden')
    }
}

function closeElement(elementName) {
    var elements =  document.querySelector(elementName)
    console.log(elements)
    elements.classList.add("hidden");
    if (elementName === "#headingElement") {
        document.querySelector("#headingBtn").classList.remove('hidden')
    } else if (elementName === "#imageElement") {
        document.querySelector("#imageBtn").classList.remove('hidden')
    } else {
        document.querySelector("#descriptionBtn").classList.remove('hidden')
    }
}

function preview() {
    var heading = document.querySelector('#headingInput')
    document.querySelector("#headingPreview").innerHTML = heading.value ? heading.value : null
    
    var description = document.querySelector('#descriptionInput')
    document.querySelector("#descriptionPreview").innerHTML = description.value ? description.value : null

}

function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.querySelector("#imgPrv");
      var downloadBtn = document.querySelector("#downloadBtn")
      preview.classList.remove("hidden")
      preview.src           = src
      downloadBtn.href      = src
      preview.style.display = "block";
    }
  }

  function changeAlign(alignName) {
    var heading = document.querySelector("#headingPreview")

    if (localStorage.getItem('alignName')) {
        heading.classList.remove(localStorage.getItem('alignName'))
    }

    if (alignName) {
        localStorage.setItem('alignName', alignName)
    }

    heading.classList.add(alignName)
  }

  function changeColor(colorName) {
    var heading = document.querySelector("#headingPreview")
    
    if (localStorage.getItem('colorName')) {
        heading.classList.remove(localStorage.getItem('colorName'))
    }

    if (colorName) {
        localStorage.setItem('colorName', colorName)
    }

    heading.classList.add(colorName)
  }

  function saveImg() {
    var c = document.querySelector('#preview');
    var t = c.getContext('2d');
    window.location.href = image;

    window.open('', document.getElementById('mycanvas').toDataURL());
  }