$(document).ready ( function(){
    console.log('Script started!');
    $('#calc_result').hide();
    var m;
    $("#btn_roof").click(function() {
       if($(this).data("page") == 1) {
           roof1();
       }
    });


    function roof1(){
        $('#calc_result').show();
        let sh_a =  $('#sh_1').val()/100;
        let sh_b =  $('#sh_2').val()/100;
        let sh_c =  $('#sh_3').val()/100;
        let sh_d =  $('#sh_4').val()/100;

        let strop_sh =  $('#strop_sh').val()/100;
        let rast_dosk =  $('#rast_dosk').val()/100;

        // градусы
        let ugol2 = (Math.tan(sh_b / sh_a)*180/3.14).toFixed(2);
        let area = (sh_d * (Math.sqrt((sh_a^2)+(sh_b^2))+ sh_c)).toFixed(2);
        let count_area = (area / 1.75).toFixed(2);
        let dlina_stripol = (((Math.sqrt((sh_a^2)+(sh_b^2))+ sh_c) - 0.15 )*100).toFixed(2);

        let count_stropil = (sh_d / strop_sh).toFixed(0);
        let rast_dosk_cout = ((Math.sqrt((sh_a^2)+(sh_b^2))+ sh_c)  / rast_dosk ).toFixed(0);

        $('#ugol_naklona').html(ugol2);
        $('#area').html(area);
        $('#count_area').html(count_area);
        $('#dlina_stripol').html(dlina_stripol);

        $('#count_st').html(rast_dosk_cout);


        let c = document.getElementById("myCanvas");
        let ctx = c.getContext("2d");
        ctx.clearRect(0, 0, 1000, 1000);
        ctx.beginPath();
        ctx.moveTo(sh_b*50,sh_a*50);
        ctx.lineTo(100,sh_a*50);
        ctx.lineTo(sh_b*50,100);
        ctx.lineTo(sh_b*50,sh_a*50);
        ctx.fillText(sh_b * 100+ ' см', sh_b*30,sh_a*52);
        ctx.fillText(sh_a * 100+ ' см', sh_b*52,sh_a*35);
        ctx.fillText(dlina_stripol * 100+ ' см', sh_b*25,sh_a*25);
        ctx.stroke();

        let c2 = document.getElementById("myCanvas2");
        let ctx2 = c2.getContext("2d");
        let z1 = 600 / (Math.floor( rast_dosk_cout) + 1) ;
        let z2 = 600 / (Math.floor( count_stropil) + 1) ;

        ctx2.clearRect(0, 0, 1000, 1000);
        ctx2.beginPath();
        ctx2.moveTo(0,0);
        for (i=1; i < z1; i++)
        {
            for (j=1; j < z2 * 100; j++)
            {

                    ctx2.moveTo(0 ,i * z1);
                    ctx2.lineTo(600, i * z1);

                    ctx2.moveTo(j * (strop_sh * 100), 0);
                    ctx2.lineTo(j * (strop_sh * 100), 600);



             }
        }
        ctx2.stroke();
    }
});
