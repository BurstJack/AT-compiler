<script>
  function disable() {
    document.body.style.backgroundColor = "white";
    document.getElementById("desc").style.color = "gray";
    document.getElementById("usage").style.color = "gray";
    $('#tabs_left a[href="#desc_"]').tab('show');

    // enable edit btn
    document.getElementById("edit").classList.remove("hide");
    document.getElementById("save").classList.add("hide");

    // disable textareas
    document.getElementById("assembly").disabled = true;
    document.getElementById("mcode").disabled = true;
    document.getElementById("bcode").disabled = true;
    // document.getElementById("evaluate").disabled = true;
    document.getElementById("desc").disabled = true;
    document.getElementById("usage").disabled = true;
    document.getElementById("_compiler").disabled = true;
    document.getElementById("_bcode").disabled = true;
    document.getElementById("_compiler").style.color = "gray";
    document.getElementById("_bcode").style.color = "gray";

    // ul btns
    document.getElementById("l0").style.display = "none";
    document.getElementById("l1").style.display = "none";
    document.getElementById("l2").style.display = "none";
    // ll btns
    document.getElementById("compmc").classList.add("hide");
    document.getElementById("compbc").classList.add("hide");
    document.getElementById("evaluate").classList.add("hide");
    // ur btns
    document.getElementById("r1").style.display = "none";
    // lr btns
    document.getElementById("steps").style.display = "none";

/**
    $('#tabs_right a[href="#_bytecode_"]').tab('show');
    $('#tabs_left a[href="#bytecode_"]').tab('show');
**/
  }

  function enable() {
    document.body.style.backgroundColor = "#dff0d8";
    document.getElementById("desc").style.color = "";
    document.getElementById("usage").style.color = "";
    $('#tabs_left a[href="#assembly_"]').tab('show');


    // enable save btn
    document.getElementById("edit").classList.add("hide");
    document.getElementById("save").classList.remove("hide");

    // enable textareas
    document.getElementById("assembly").disabled = false;
    document.getElementById("mcode").disabled = false;
    document.getElementById("bcode").disabled = false;
    document.getElementById("desc").disabled = false;
    document.getElementById("usage").disabled = false;
    //document.getElementById("_compiler").disabled = false;
    //document.getElementById("_bcode").disabled = false;
    document.getElementById("_compiler").disabled = true;
    document.getElementById("_bcode").disabled = true;
    document.getElementById("_compiler").style.color = "gray";
    document.getElementById("_bcode").style.color = "gray";

    // ul btns
    document.getElementById("l0").style.display = "block";
    document.getElementById("l1").style.display = "block";
    document.getElementById("l2").style.display = "block";
    // ll btns
    document.getElementById("compmc").classList.remove("hide");
    // document.getElementById("compbc").classList.remove("hide");
    // ur btns
    document.getElementById("r1").style.display = "block";
    // lr btns
    document.getElementById("steps").style.display = "block";

  }

 
  function enable1(btn) {
      //alert(btn);
      if (btn == "asm") {
          //alert("processing asm.."); 
          document.getElementById("compmc").classList.remove("hide");
          document.getElementById("compbc").classList.add("hide");
      }
      else if (btn == "mcode") { 
          //alert("processing mcode.."); 
          document.getElementById("compmc").classList.add("hide");
          document.getElementById("compbc").classList.remove("hide");
      }
      else if (btn == "bcode") { 
          //alert("processing bcode.."); 
          document.getElementById("compmc").classList.add("hide");
          document.getElementById("compbc").classList.add("hide");
      }
  }


  disable();
</script>

