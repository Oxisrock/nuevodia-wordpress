function isDateInRange(lowerHour, lowerMinute, upperHour, upperMinute) {
    var now=new Date();
    var from = new Date();
    from.setHours(lowerHour,lowerMinute);
    var to = new Date();
    to.setHours(upperHour,upperMinute);
    return !!(now >= from && now <= to);
}
function getNowPlayingDeportes() {
    var now = new Date().getDay();
    //var hours =  now.getHours();
    //var minutes = now.getMinutes();
    var tituloprograma;
    var anclasprograma;
    var horarioprograma;
    var descripcionprograma;
    var titulosiguiente;
    var anclassiguiente;
    var horariosiguiente;
    var imagenprograma = "";
    var imagenPlayer = "";

    if(now >= 1 && now <= 5) {
        // Programación Lunes a viernes


        // Noticiero
        if (isDateInRange('06', '00', '06', '29')) {
            tituloprograma = "Noticiero de Unión Radio";
            anclasprograma = "Tinedo Guía";
            horarioprograma = "6:00 am aa 6:30 am";
            descripcionprograma = "<p></p>";
            imagenprograma = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/mugshot/60-minutos.png";
            imagenPlayer = "http://unionradio.net/wp-content/themes/UnionRadio-R1-2015/img/talentour/2017/hero/60-minutos.jpg";

            titulosiguiente = "Noticiero Deportivo de Unión Radio";
            anclassiguiente = "Raúl Inojosa, Jorge Ferreira e Irving Pérez";
            horariosiguiente = "6:30 am a 7:00 am";
        }
        // Noticiero Deportivo union Radio
        else if (isDateInRange('06', '30', '06', '29')) {
            tituloprograma = "Noticiero Deportivo de Unión Radio";
            anclasprograma = "Raúl Inojosa, Jorge Ferreira e Irving Pérez";
            horarioprograma = "6:30 am a 7:00 am";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/Noticiero-Deportes-URD.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/Noticiero-URD.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "El Infield";
            anclassiguiente = "Freddy Chersia, Efrain Zavarce, Carlos Valmore Rodriguez y Octavio Hernandez";
            horariosiguiente = "7:00 am a 9:00 am";
        }
        // El infield
        else if (isDateInRange('07', '00', '8', '59')) {
            tituloprograma = "El Infield";
            anclasprograma = "Freddy Chersia, Efrain Zavarce, Carlos Valmore Rodriguez y Octavio Hernandez";
            horarioprograma = "7:00 am a 9:00 am";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/El-Infield.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/El-Infield.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Basket Report";
            anclassiguiente = "Aldrym Adrianza y Adelino López";
            horariosiguiente = "9:00 am a 10:00 am";
        }
        // Basket Report
        else if (isDateInRange('09', '00', '9', '59')) {
            tituloprograma = "Basket Report";
            anclasprograma = "Aldrym Adrianza y Adelino López";
            horarioprograma = "9:00 am a 10:00 am";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/basket-report.png";
            imagenPlayer = "/img/talentodur/2017/fondo/basket-report.jpg";

            titulosiguiente = "Motores";
            anclassiguiente = "Víctor Hugo Bracamonte";
            horariosiguiente = "10:00 am a 11:00 am";
        }
        // Motores
        else if (isDateInRange('10', '00', '10', '59')) {
            tituloprograma = "Motores";
            anclasprograma = "Víctor Hugo Bracamonte";
            horarioprograma = "10:00 am a 11:00 am";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/Motores.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/Motores.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Noticiero Deportivo de Unión Radio";
            anclassiguiente = "Raúl Inojosa, Jorge Ferreira e Irving Pérez";
            horariosiguiente = "11:00 am a 11:30 am";
        }
        // Noticiero Union Radio Deportes
        else if (isDateInRange('11', '00', '11', '29')) {
            tituloprograma = "Noticiero Deportivo de Unión Radio";
            anclasprograma = "Raúl Inojosa, Jorge Ferreira e Irving Pérez";
            horarioprograma = "11:00 am a 11:30 am";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/Noticiero-Deportes-URD.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/Noticiero-URD.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Scouting Report";
            anclassiguiente = "Iván Medina";
            horariosiguiente = "11:30 am a 12:00 pm";
        }
        // Scouting Report
        else if (isDateInRange('11', '30', '11', '59')) {
            tituloprograma = "Scouting Report";
            anclasprograma = "Iván medina";
            horarioprograma = "11:30 am a 12:00 pm";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/Scouting-Report.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/Scouting-Report.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Deportes para todos";
            anclassiguiente = "Pedro Ricardo Maio, Giancarlo Figliulo y Diego Castillo";
            horariosiguiente = "12:00 pm a 2:30 pm";
        }
        // Deportes para todos
        else if (isDateInRange('12', '00', '14', '29')) {
            tituloprograma = "Deportes para todos";
            anclasprograma = "Pedro Ricardo Maio, Giancarlo Figliulo y Diego Castillo";
            horarioprograma = "12:00 pm a 2:30 pm";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/deportes-para-todos.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/deportes-para-todos.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Noticiero Deportivo de Unión Radio";
            anclassiguiente = "Raúl Inojosa, Jorge Ferreira e Irving Pérez";
            horariosiguiente = "2:30 pm a 3:00 pm";
        }
        // Noticiero Union Radio Deportes
        else if (isDateInRange('14', '30', '14', '59')) {
            tituloprograma = "Noticiero Deportivo de Unión Radio";
            anclasprograma = "Raúl Inojosa, Jorge Ferreira e Irving Pérez";
            horarioprograma = "2:30 pm a 3:00 pm";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/Noticiero-Deportes-URD.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/Noticiero-URD.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Línea Deportiva";
            anclassiguiente = "Luis miguel Nuñez, José Antonio Rodríguez";
            horariosiguiente = "3:00 pm a 4:30 pm";
        }
        // Línea deportiva
        else if (isDateInRange('15', '00', '16', '29')) {
            tituloprograma = "Línea Deportiva";
            anclasprograma = "Luis miguel Nuñez, José Antonio Rodríguez";
            horarioprograma = "3:00 pm a 4:30 pm";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/linea-deportiva.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/linea-deportiva.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "En la Cancha";
            anclassiguiente = "Humberto Turinese, Bruno Gómez, Carlos Domingues, Alexandra Cuevas Alliegro y Richard Morales";
            horariosiguiente = "4:30 pm a 6:30 pm";
        }
        // En la cancha
        else if (isDateInRange('16', '30', '18', '30')) {
            tituloprograma = "En la Cancha";
            anclasprograma = "Humberto Turinese, Bruno Gómez, Carlos Domingues, Alexandra Cuevas Alliegro y Richard Morales";
            horarioprograma = "4:30 pm a 6:30 pm";
            descripcionprograma = "<p></p>";
            imagenprograma = "/img/talentodur/2017/mugshot/En-la-Cancha.png";
            //imagenprograma = "/img/blank_250x250.png";
            imagenPlayer = "/img/talentodur/2017/fondo/En-la-Cancha.jpg";
            //imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Progrmación regular";
            anclassiguiente = "";
            horariosiguiente = "";
        }
    }
    else if(now == 0)
    {
        // El agregado
        if (isDateInRange('18', '00', '18', '59'))
        {
            tituloprograma = "El Agregado";
            anclasprograma = "Julio Goncalves, Raúl Inojosa y Giusseppe Palmariello";
            horarioprograma = "6:00 pm a 7:00 pm";
            descripcionprograma = "<p></p>";
            //imagenprograma = "/img/talentodur/2017/mugshot/Noticiero-Deportes-URD.png";
            imagenprograma = "/img/blank_250x250.png";
            //imagenPlayer = "/img/talentodur/2017/fondo/Noticiero-URD.jpg";
            imagenPlayer = "/img/union_radio_250.png";

            titulosiguiente = "Programación regular";
            anclassiguiente = "";
            horariosiguiente = "";
        }

    }



    $('#titulo_programa').text(tituloprograma);
    $("#anclas_programa").text(anclasprograma);
    $("#horario_programa").text(horarioprograma);
    $("#descripcion_programa").html(descripcionprograma);
    $("#titulo_siguiente_programa").html('<strong>' + titulosiguiente + '</strong>');
    $("#anclas_siguiente_programa").text(anclassiguiente);
    $("#horario_siguiente_programa").text(horariosiguiente);
    if(imagenprograma.length >0)
    {
        $(".video-killed-the-radio-star").attr({"src":'http://unionradio.net/wp-content/themes/UnionRadio-R1-2015' +  imagenprograma});
    }
    if(imagenPlayer.length >0)
    {
        $(".video-killed-the-radio-star-player").attr({"src":'http://unionradio.net/wp-content/themes/UnionRadio-R1-2015' +  imagenPlayer});
    }


}