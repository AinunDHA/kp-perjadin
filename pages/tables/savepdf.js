//Untuk save as PDF

    var doc = new jsPDF();
    var specialElementHandlers{
      '#savepdf': function(element, renderer) {       //id div yg di dlmnya ada button save ass pdf
        return true;
      }
    };
    $('#pdf').click(function()        //id button yg memiliki fungsi save as pdf
  {
    doc.fromHTML($('#tabel').html(), 15, 15, { // area yang akan diconvert as pdf adalah yg memiliki id="tabel"
      'width' : 170,
        'elementHandlers': specialElementHandlers;
    });
    doc.save('rekap-perjadin.pdf');
  });



//#END#Untuk save as PDF
