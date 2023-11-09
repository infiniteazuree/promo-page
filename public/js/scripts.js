$(function() {
    $('#exampleModalCenter').modal('show')
    $('.inputCode').click(() => {
        $('#exampleModalCenter').modal('hide')
        $('#exampleModalCenter2').modal('show')
    })
    
    $('#showPrize').click(() => {
        $('#exampleModalCenter').modal('hide')
        $('.angpao-wrapper').addClass('show-value')
        $('.ingame-start').removeClass('d-none')
    })
    
    $('#startGame').click(() => {
        let code = $('#ticketCode').val()
        console.log("🚀 ~ file: script.js:17 ~ $ ~ code", code)
        $('#exampleModalCenter2').modal('hide')

        $('.angpao-wrapper').click((e) => {
            e.currentTarget.classList.add('show-value')
            $('#wonMoney').html(e.currentTarget.getElementsByClassName('angpao-value')[0].innerHTML)
            $('#exampleModalCenter3').modal('show')
        })
    })
})