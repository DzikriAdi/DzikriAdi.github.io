
    var jam = prompt("Masukan Jam");

    if(jam<=12 && jam>=6)
    {
        alert(" PAGI ");
        if(jam>=8.40 && jam<=10.20)
        {
            alert(" Kuliah PBW ");
        }
    }
    else if(jam>12 && jam<=15)
    {
        alert(" SIANG ");
    }
    else if(jam>15 && jam<=18)
    {
        alert(" SORE ");
    }
    else
    {
        alert(" MALAM ");
    }
	
	
    var konfirm = confirm("Apakah anda ingin menginputkan jam lagi?");
    if(konfirm==true)
    {
        document.location.href = "Latihan.html";
    }
    else if(konfirm==false)
    {
        documen.write("Terimakasih");
    }

