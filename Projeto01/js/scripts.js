$(function(){
    $('nav.mobile').click(function(){
        //quando clicar ele vai chamr essa função
        //vou criar uma variavel p ser acessada várias vezes
        var listaMenu = $('nav.mobile ul');

        if(listaMenu.is(':hidden')==true){
         var icone= $('botao-menu-mobile').find('i');
             icone.removeClass('fa-bars');
             icone.addClass('fa-times');
             listaMenu.slideToggle();//abre cortina

        }else {
         var icone= $('botao-menu-mobile').find('i');
             icone.removeClass('fa-times');
             icone.addClass('fa-bars');
             listaMenu.slideToggle();//abre cortina
        }
    })
})