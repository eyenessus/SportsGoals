const voltar = (()=>{
    window.location.href = "/";
})

$(document).ready(()=>{
    $('#nivelintervalo').on('mouseup', function () {
        $('#valor').html(this.value);
    });
    $('#exit').on('click',()=>{
        $('#exit').slideUp(5000);
        setTimeout(voltar, 3000); 
    })
})
