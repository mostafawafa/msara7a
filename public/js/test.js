/**
 * Created by Mostafa on 14/08/2017.
 */

    $('body').on('click','#showSideBar',function () {

        $('#sideBar').show();
        $('#showSideBar').text('Hide');
        $('#showSideBar').attr('id','hideSideBar');
        $('#main').removeClass('col-md-12');
        $('#main').addClass('col-md-8');
    });


    $('body').on('click','#hideSideBar',function () {

        $('#sideBar').hide();
        $('#hideSideBar').text('Show');
        $('#hideSideBar').attr('id','showSideBar');
        $('#main').addClass('col-md-12');
        $('#main').removeClass('col-md-8');
    });





    $('#changeBg').click(function(){
        current = parseInt($('body').css('background-image').match(/(\d)\.jpg/)[1])
        rand = Math.floor(Math.random() * 4 +1)
        while(rand == current){
            rand = Math.floor(Math.random() * 4 +1)
        }
        $('body').css('background-image','url(/images/' + rand +'.jpg)');
    });
