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


  function compile_bc() {
    //alert("compile bc");
    document.getElementById("_compiler").value = "";
    $('#tabs_left a[href="#bcode_"]').tab('show');
    $('#tabs_right a[href="#_compiler_"]').tab('show');
    createScriptTag_bcode();
    // ll btns
    document.getElementById("compbc").classList.add("hide");
  }

  function compile_mc() {
    //alert("compile mc");
    //alert(document.getElementById("assembly").value);
    document.getElementById("_compiler").value = "";
    $('#tabs_left a[href="#mcode_"]').tab('show');
    $('#tabs_right a[href="#_compiler_"]').tab('show');
    createScriptTag_mcode();
    // ll btns
    document.getElementById("compmc").classList.add("hide");
    document.getElementById("compbc").classList.remove("hide");

  }

  function step1() {
    // alert("step1");
    $('#tabs_right a[href="#_bcode_"]').tab('show');
    createScriptTag_step1();
  }

  function step2() {
    // alert("step2");
    $('#tabs_right a[href="#_bcode_"]').tab('show');
    createScriptTag_step2();
  }

  function step3() {
    // alert("step3");
    $('#tabs_right a[href="#_bcode_"]').tab('show');
    createScriptTag_step3();
  }

  function step4() {
    // alert("step4");
    $('#tabs_right a[href="#_bcode_"]').tab('show');
    createScriptTag_step4();
  }

  function step5() {
    // alert("step5");
    $('#tabs_right a[href="#_bcode_"]').tab('show');
    createScriptTag_step5();
  }

  function step6() {
    // alert("step6");
    $('#tabs_right a[href="#_bcode_"]').tab('show');
    createScriptTag_step6();
    //alert("step 6");
  }


  // *** API

  function createScriptTag_mcode() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("assembly").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"mcode", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);

      document.body.appendChild(s);
  }

  function createScriptTag_bcode() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("mcode").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"bcode", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      document.body.appendChild(s); //
  }

  function createScriptTag_step6() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");
      //alert(data);

      var obj = { "request":"step6", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      document.body.appendChild(s); //
  }

  function createScriptTag_step5() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");
      //alert(data);

      var obj = { "request":"step5", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      document.body.appendChild(s); //
  }

  function createScriptTag_step4() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step4", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      document.body.appendChild(s); //
  }

  function createScriptTag_step3() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step3", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      document.body.appendChild(s); //
  }

  function createScriptTag_step2() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step2", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      //alert(s.src);
      document.body.appendChild(s); //
  }

  function createScriptTag_step1() {
      //alert("inside createscripttag");

      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step1", "input": data };
      s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      document.body.appendChild(s); //
  }

  // *** callbacks

  function callback_mc(myObj) {
       var s = myObj.output;
       //alert(s);
       document.getElementById("mcode").value = s;
       removeScriptTag();
  }

  function callback_bc(myObj) {
       var s = myObj.output;
       //alert(s);
       s = s.replace(/~/g, "#");
       s = s.replace(/\§/g, "+");
       //alert(s);
       document.getElementById("bcode").value = s;
       document.getElementById("_compiler").value = s;
       removeScriptTag();
  }

  function callback_step6(myObj) {
       var s = myObj.output;
       //alert("step6 callback " + s);
       document.getElementById("_bcode").value = s;
       removeScriptTag();
  }

  function callback_step5(myObj) {
       var s = myObj.output;
       //alert("step5 " + s);
       document.getElementById("_bcode").value = s;
       removeScriptTag();
  }

  function callback_step4(myObj) {
       var s = myObj.output;
       //alert("step4 " + s);
       document.getElementById("_bcode").value = s;
       removeScriptTag();
  }

  function callback_step3(myObj) {
       var s = myObj.output;
       //alert("step3 " + s);
       document.getElementById("_bcode").value = s;
       removeScriptTag();
  }

  function callback_step2(myObj) {
       var s = myObj.output;
       //alert("calback step2 " + s);
       document.getElementById("_bcode").value = s;
       removeScriptTag();
  }

  function callback_step1(myObj) {
       var s = myObj.output;
       //alert("step1 " + s);
       document.getElementById("_bcode").value = s;
       removeScriptTag();
  }

  function removeScriptTag() {
      var elem = document.getElementById("myId");
      return elem.parentNode.removeChild(elem);
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

