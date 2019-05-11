<script>

  // var server = "http://localhost/AT/jsonp_test1.php? x=";
  var server = "http://atburst.atwebpages.com/at/rosetta/jsonp_test1.php? x=";


  // ************
  // *** Compile
  // ************

  function compile_mc() {
    document.getElementById("_compiler").value = "";
    tab_mcode();
    createScriptTag_mcode();
  }

  function compile_bc() {
    document.getElementById("_compiler").value = "";
    tab_bcode();
    createScriptTag_bcode();
  }

  function step1() {
    tab_steps();
    createScriptTag_step1();
  }

  function step2() {
    tab_steps();
    createScriptTag_step2();
  }

  function step3() {
    tab_steps();
    createScriptTag_step3();
  }

  function step4() {
    tab_steps();
    createScriptTag_step4();
  }

  function step5() {
    tab_steps();
    createScriptTag_step5();
  }

  function step6() {
    tab_steps();
    createScriptTag_step6();
  }

  // *************
  // *** Evaluate
  // *************

  function evaluate_bc() {
    tab_evaluate();
    createScriptTag_evaluate();
    /***
    document.getElementById("_compiler").value = 
        document.getElementById("bcode").value;
    ***/
  }


  // *********
  // *** tabs
  // *********

  function tab_assembly() {
  }

  function tab_mcode() {
    $('#tabs_left a[href="#mcode_"]').tab('show');
    $('#tabs_right a[href="#_compiler_"]').tab('show');

    // ll btns
    document.getElementById("compmc").classList.add("hide");
    document.getElementById("compbc").classList.remove("hide");
  }

  function tab_bcode() {
    $('#tabs_left a[href="#bcode_"]').tab('show');
    $('#tabs_right a[href="#_compiler_"]').tab('show');

    // ll btns
    document.getElementById("compmc").classList.add("hide");
    document.getElementById("compbc").classList.add("hide");
    document.getElementById("evaluate").classList.remove("hide");
  }

  function tab_steps() {
    $('#tabs_right a[href="#_bcode_"]').tab('show');
  }

  function tab_evaluate() {
    $('#tabs_right a[href="#_compiler_"]').tab('show');
  }


  // ****************
  // *** ScriptTags
  // ****************

  function createScriptTag_mcode() {
      var s = document.createElement("script");
      var data = document.getElementById("assembly").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"mcode", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);
      //alert(s.src);


      document.body.appendChild(s);
  }

  function createScriptTag_bcode() {
      var s = document.createElement("script");
      var data = document.getElementById("mcode").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"bcode", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s);
  }

  function createScriptTag_evaluate() {
      var s = document.createElement("script");
      var data = document.getElementById("bcode").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"evaluate", "input": data };
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s);
  }

  function createScriptTag_step6() {
      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step6", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s);
  }

  function createScriptTag_step5() {
      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");
      //alert(data);

      var obj = { "request":"step5", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s); 
  }

  function createScriptTag_step4() {
      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step4", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s);
  }

  function createScriptTag_step3() {
      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step3", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s);
  }

  function createScriptTag_step2() {
      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step2", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s);
  }

  function createScriptTag_step1() {
      var s = document.createElement("script");
      var data = document.getElementById("_compiler").value;
      data = data.replace(/#/g, "~");
      data = data.replace(/\+/g, "§");

      var obj = { "request":"step1", "input": data };
      // s.src = "http://localhost/AT/jsonp_test1.php? x=" + JSON.stringify(obj);
      s.src = server + JSON.stringify(obj);

      document.body.appendChild(s); //
  }



  // **************
  // *** callbacks
  // **************

  function callback_mc(myObj) {
       var s = myObj.output;
       // s = s.replace(/~/g, "#");
       // s = s.replace(/\§/g, "+");

       //alert("callback mc");
       document.getElementById("mcode").value = s;
  }

  function callback_bc(myObj) {
       var s = myObj.output;
       s = s.replace(/~/g, "#");
       s = s.replace(/\§/g, "+");

       document.getElementById("bcode").value = s;
  }

  function callback_evaluate(myObj) {
       var s = myObj.output;
       s = s.replace(/~/g, "#");
       s = s.replace(/\§/g, "+");

       document.getElementById("bcode").value = s;
       document.getElementById("_compiler").value = 
           document.getElementById("bcode").value;

  }

  function callback_step6(myObj) {
       var s = myObj.output;

       document.getElementById("_bcode").value = s;
  }

  function callback_step5(myObj) {
       var s = myObj.output;

       document.getElementById("_bcode").value = s;
  }

  function callback_step4(myObj) {
       var s = myObj.output;

       document.getElementById("_bcode").value = s;
  }

  function callback_step3(myObj) {
       var s = myObj.output;

       document.getElementById("_bcode").value = s;
  }

  function callback_step2(myObj) {
       var s = myObj.output;

       document.getElementById("_bcode").value = s;
  }

  function callback_step1(myObj) {
       var s = myObj.output;

       document.getElementById("_bcode").value = s;
  }


</script>
