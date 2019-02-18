<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div id="content">
      <h3>Hello, this is a H3 tag </h3>
      <p>a paragraph</p>
    </div>

    <div id="editor">

    </div>
    <button id="cmd">generate PDF</button>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js">
    </script>
    <script type="text/javascript">
      var doc = new jsPDF();
      var specialElementHandlers={
        '#editor':function(element,renderer){
          return true;
        }
      };
      $('#cmd').click(function(){
        doc.fromHTML($
        ('#content').html(), 15, 15,{
          'width':170,
          'elementHandlers':
          specialElementHandlers
        });
        doc.save('sample-file.pdf');
      });

    </script>
  </body>
</html>
