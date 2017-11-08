function getNowPlaying()
{
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var tituloprograma;
    var anclasprograma;
    var horarioprograma;
    var descripcionprograma;
    var titulosiguiente;
    var anclassiguiente;
    var horariosiguiente;
    var imagenprograma = "";
    var imagenprogramaPlayer ="";
    var programURL = "/#";

    var tituloprogramaur;
    var anclasprogramaur;
    var horarioprogramaur;
    var descripcionprogramaur;
    var titulosiguienteur;
    var anclassiguienteur;
    var horariosiguienteur;
    var imagenprogramaur = "";
    var anclas_ur = "";



    // Unión radio 90.3 FM
    if(now.getDay() >= 1 && now.getDay() <= 5)
    {
        // 60 minutos
        if(isDateInRange('05','00','06','00'))
        {
            tituloprogramaur="60 Minutos";
            anclasprogramaur="Tinedo Guía";
            horarioprogramaur="5:00 am a 6:00 am";
            descripcionprogramaur = "<p></p>";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/60-minutos.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/60-minutos.jpg";

            titulosiguienteur="Noticiero";
            anclassiguienteur="";
            horariosiguienteur="6:00 am a 6:30 am";


        }

        // Noticiero
        if(isDateInRange('06','00','06','30'))
        {
            tituloprogramaur="Noticiero";
            anclasprogramaur="";
            horarioprogramaur="6:00 am a 6:30 am";
            descripcionprogramaur = "<p></p>";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/blank_250x250.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/generic.jpg";

            titulosiguienteur="A tiempo";
            anclassiguienteur="Eduardo Rodríguez Giollity junto a Sonsiré Luna y Saúl Noriega";
            horariosiguienteur="6:30 am a 9:30 am";

        }

        // A tiempo con Eduardo Rodríguez
        if(isDateInRange('06','30','09','30'))
        {
            tituloprogramaur="A tiempo";
            anclasprogramaur="Eduardo Rodríguez, Sonsiré Luna y Saúl Noriega";
            horarioprogramaur="6:30 am a 9:30 am";
            descripcionprogramaur = "<p></p>";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/a-tiempo.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/a-tiempo.jpg";

            titulosiguienteur="Al Instante";
            anclassiguienteur="Esther Quiaro";
            horariosiguienteur="9:30 am a 11:00 am";
        }


        // Esther Quiaro
        if(isDateInRange('09','30','11','00'))
        {
            tituloprogramaur="Al Instante";
            anclasprogramaur="Esther Quiaro";
            horarioprogramaur="9:30 am a 11:00 am";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/al-instante.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/al-instante.jpg";

            titulosiguienteur="En Sintonía";
            anclassiguienteur="Anna Vaccarella";
            horariosiguienteur="11:00 am a 1:00 pm";

        }


        // Anna Vaccarella En Sintonía
        if(isDateInRange('11','00','13','00'))
        {
            tituloprogramaur="En Sintonía";
            anclasprogramaur="Anna Vaccarella";
            horarioprogramaur="11:00 am a 1:00 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/en-sintonia.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/en-sintonia.jpg";

            titulosiguienteur="Sin Duda";
            anclassiguienteur="Mary Pili Hernández";
            horariosiguienteur="1:00 pm a 2:30 pm";

        }

        // Mary Pili Hernández; Sin Duda
        if(isDateInRange('13','00','14','30'))
        {
            tituloprogramaur="Sin Duda";
            anclasprogramaur="Mary Pili Hernández";
            horarioprogramaur="1:00 pm a 2:30 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/sin-duda.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/sin-duda.jpg";

            titulosiguienteur="Noticiero Deportes Unión Radio";
            anclassiguienteur="Luis Miguel Núñez";
            horariosiguienteur="2:30 pm a 3:00 pm";

        }


        // Noticiero Deportes Unión Radio
        if(isDateInRange('14','30','15','00'))
        {
            tituloprogramaur="Noticiero Deportes Unión Radio";
            anclasprogramaur="Luis Miguel Núñez";
            horarioprogramaur="2:30 pm a 3:00 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/blank_250x250.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/generic.jpg";

            titulosiguienteur="Por donde vamos";
            anclassiguienteur="Vanessa Davies";
            horariosiguienteur="3:00 pm a 4:30 pm";

        }

        // Vanessa DAvies
        if(isDateInRange('15','00','16','30'))
        {
            tituloprogramaur="Por donde vamos";
            anclasprogramaur="Vanessa Davies";
            horarioprogramaur="3:00 pm a 4:30 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/por-donde-vamos.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/por-donde-vamos.jpg";

            titulosiguienteur="Gente de palabra";
            anclassiguienteur="Alonso Moleiro y María Fernanda Flores";
            horariosiguienteur="4:30 pm a 6:00 pm";

        }


        // Alonso Moleiro y María Fernanda Flores
        if(isDateInRange('16','30','18','00'))
        {
            tituloprogramaur="Gente de palabra";
            anclasprogramaur="Alonso Moleiro y María Fernanda Flores";
            horarioprogramaur="4:30 pm a 6:00 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/gente-de-palabra.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/gente-de-palabra.jpg";

            titulosiguienteur="Vladimir Villegas";
            anclassiguienteur="Vladimir Villegas";
            horariosiguienteur="6:00 pm a 8:00 pm";
        }


        // Vladimir Villegas
        if(isDateInRange('18','00','19','30'))
        {
            tituloprogramaur="Vladimir Villegas";
            anclasprogramaur="Vladimir Villegas";
            horarioprogramaur="6:00 pm a 8:00 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/vladimir-villegas.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/vladimir-villegas.jpg";

            titulosiguienteur="Noticiero";
            anclassiguienteur="";
            horariosiguienteur="";

        }

        // Noticiero
        if(isDateInRange('20','00','20','29'))
        {
            tituloprogramaur="Noticiero";
            anclasprogramaur="Anita Grantio";
            horarioprogramaur="8:00 pm a 8:30 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/anita_grantio.png";
            imagenprogramaPlayer = "/img/blank_250x250.png";

            titulosiguienteur="Lo mejor de los cronistas";
            anclassiguienteur="";
            horariosiguienteur="8:30 pm a 9:00 pm";

        }

        // Lo mejor de los cronistas
        if(isDateInRange('20','30','21','00'))
        {
            tituloprogramaur="Lo mejor de Los Cronistas";
            anclasprogramaur="";
            horarioprogramaur="8:30 pm a 9:00 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "/img/talentodur/2016/mugshot/los_cronistas.png";
            imagenprogramaPlayer = "/img/talentodur/2016/fondo/Programacion-Página-Web-Los-Cronistas.jpg";

            titulosiguienteur="Anahí Arizmendi";
            anclassiguienteur="Anahí Arizmendi";
            horariosiguienteur="9:00 pm a 10:00 pm";

        }

        // Anahí Arizmendi
        if(isDateInRange('21','00','22','00'))
        {
            tituloprogramaur="Anahí Arizmendi";
            anclasprogramaur="Anahí Arizmendi";
            horarioprogramaur="9:00 pm a 10:00 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/anahi-arismendi.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/anahi-arismendi.jpg";

            titulosiguienteur="Noticiero";
            anclassiguienteur="";
            horariosiguienteur="10:00 pm a 10:30 pm";

        }

        // Noticiero
        if(isDateInRange('22','00','22','30'))
        {
            tituloprogramaur="Noticiero";
            anclasprogramaur="";
            horarioprogramaur="10:00 pm a 10:30 pm";
            descripcionprogramaur = "<p></p>  ";
            imagenprogramaur = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/anita_grantio.png";
            imagenprogramaPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/generic.jpg";

            titulosiguienteur="La entrevista";
            anclassiguienteur="";
            horariosiguienteur="10:30 pm a 11:00 pm";
        }


    }
    else if (now.getDay() == 6) {
        tituloprogramaur="Programación regular";
        anclasprogramaur="";
        horarioprogramaur="";
        descripcionprogramaur = "<p></p>";
        imagenprogramaur = "/img/blank_250x250.png";
        imagenprogramaPlayer = "/img/blank_250x250.png";

        titulosiguienteur="";
        anclassiguienteur="";
        horariosiguienteur="";



    }
    else if (now.getDay() == 0) {
        tituloprogramaur="Programación regular";
        anclasprogramaur="";
        horarioprogramaur="";
        descripcionprogramaur = "<p></p>";
        imagenprogramaur = "/img/blank_250x250.png";
        imagenprogramaPlayer = "/img/blank_250x250.png";

        titulosiguienteur="";
        anclassiguienteur="";
        horariosiguienteur="";
    }


    if(hours >= 0 && hours < 0)
    {
        tituloprogramaur="";
        anclasprogramaur="";
        horarioprogramaur="";
        descripcionprogramaur = "<p></p>  ";
        imagenprogramaur = "/img/talentour/programacion_regular.jpg";

        titulosiguienteur="";
        anclassiguienteur="";
        horariosiguienteur="";

    }

    $('#titulo_programa_ur,.titulo_programa_ur').text(tituloprogramaur);
    $("#anclas_programa_ur,.anclas_programa_ur").text(anclasprogramaur);
    $("#horario_programa_ur,.horario_programa_ur").text(horarioprogramaur);
    $("#descripcion_programa_ur,.descripcion_programa_ur").html(descripcionprogramaur);
    $("#titulo_siguiente_programa_ur,.titulo_siguiente_programa_ur").html('<strong>' + titulosiguienteur + '</strong>');
    $("#anclas_siguiente_programa_ur,.anclas_siguiente_programa_ur").text(anclassiguienteur);
    $("#horario_siguiente_programa_ur,.horario_siguiente_programa_ur").text(horariosiguienteur);
    if(imagenprogramaur.length >0)
    {
        $(".video-killed-the-radio-star-ur").attr({"src": imagenprogramaur});
    }
    if(imagenprogramaPlayer.length >0)
    {
        $(".video-killed-the-radio-star-ur-player").attr({"src":imagenprogramaPlayer});
    }

    $("#programAnchor").bind("click", function(){
        window.opener.parent.location.href='http://unionradio.net/'+programURL;
    });
}
