<script>
  $("a.upload").click(function(e) {
    // Código escrito em javascript puro
    // document.getElementById("categoria").value = e.target.id;
    // Código escrito em jQuery
    $("#categoria").val(e.target.id);
    //document.getElementById("uploadImage").click();
    $("#uploadImage").click();
  });

  function enviar() {
    document.getElementById("formUpload").submit();
  }
</script>